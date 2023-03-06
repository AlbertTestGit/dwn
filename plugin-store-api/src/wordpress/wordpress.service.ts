import { Injectable, Logger } from '@nestjs/common';
import { JwtService } from '@nestjs/jwt';
import { InjectDataSource } from '@nestjs/typeorm';
import { DataSource } from 'typeorm';
import { UserDto } from './dto/user.dto';
import * as hasher from 'wordpress-hash-node';
import { PluginDto } from './dto/plugin.dto';
import { catchError, firstValueFrom } from 'rxjs';
import { HttpService } from '@nestjs/axios';

@Injectable()
export class WordpressService {
  constructor(
    private jwtService: JwtService,
    private readonly httpService: HttpService,
    @InjectDataSource('wordpressDb')
    private wordpressDataSource: DataSource,
  ) {}

  private logger = new Logger(WordpressService.name);

  async validateUser(username: string, passwordHash: string) {
    const queryRunner = this.wordpressDataSource;

    const findUserSql: { ID: number; user_login: string }[] =
      await queryRunner.manager.query(
        `SELECT ID, user_login FROM wp_users WHERE user_login='${username}' AND user_pass='${passwordHash}'`,
      );

    if (findUserSql.length == 0) return null;

    const findUserRoleSql: { meta_value: string }[] =
      await queryRunner.manager.query(
        `SELECT meta_value FROM wp_usermeta WHERE meta_key='wp_capabilities' AND user_id='${findUserSql[0].ID}'`,
      );

    const role = findUserRoleSql[0].meta_value.split('"')[1];

    const result = new UserDto();
    result.id = findUserSql[0].ID;
    result.username = findUserSql[0].user_login;
    result.role = role;

    return result;
  }

  async validateUsernameAndPassword(username: string, password: string) {
    const queryRunner = this.wordpressDataSource;

    const findUserSql: { ID: number; user_login: string; user_pass: string }[] =
      await queryRunner.manager.query(
        `SELECT ID, user_login, user_pass FROM wp_users WHERE user_login='${username}'`,
      );

    if (findUserSql.length == 0) return null;

    if (!hasher.CheckPassword(password, findUserSql[0].user_pass)) return null;

    const findUserRoleSql: { meta_value: string }[] =
      await queryRunner.manager.query(
        `SELECT meta_value FROM wp_usermeta WHERE meta_key='wp_capabilities' AND user_id='${findUserSql[0].ID}'`,
      );

    const role = findUserRoleSql[0].meta_value.split('"')[1];

    const result = new UserDto();
    result.id = findUserSql[0].ID;
    result.username = findUserSql[0].user_login;
    result.role = role;

    return result;
  }

  generateJwt(user: UserDto) {
    return {
      access_token: this.jwtService.sign({ ...user }),
    };
  }

  async findUserById(id: number) {
    const queryRunner = this.wordpressDataSource;

    const findUserSql: { ID: number; user_login: string }[] =
      await queryRunner.manager.query(
        `SELECT ID, user_login FROM wp_users WHERE ID='${id}'`,
      );

    if (findUserSql.length == 0) return null;

    const findUserRoleSql: { meta_value: string }[] =
      await queryRunner.manager.query(
        `SELECT meta_value FROM wp_usermeta WHERE meta_key='wp_capabilities' AND user_id='${findUserSql[0].ID}'`,
      );

    const role = findUserRoleSql[0].meta_value.split('"')[1];

    const result = new UserDto();
    result.id = findUserSql[0].ID;
    result.username = findUserSql[0].user_login;
    result.role = role;

    return result;
  }

  async findPluginByProductKey(productKey: string) {
    const plugins = await this.findPlugins();

    return plugins.find((plugin) => plugin.SWID == productKey);
  }

  async findPluginById(id: number): Promise<PluginDto> {
    const { data } = await firstValueFrom(
      this.httpService
        .get<PluginDto>(
          `${process.env.WOOCOMMERCE_API_URL}/wp-json/wp/v3/plugins/${id}`,
          {
            headers: { Authorization: `Bearer ${process.env.WOOCOMMERCE_JWT}` },
          },
        )
        .pipe(
          catchError((error) => {
            this.logger.error(error);
            throw 'An error happened!';
          }),
        ),
    );
    return data;
  }

  async findPlugins(): Promise<PluginDto[]> {
    const { data } = await firstValueFrom(
      this.httpService
        .get<PluginDto[]>(
          `${process.env.WOOCOMMERCE_API_URL}/wp-json/wp/v3/plugins`,
          {
            headers: { Authorization: `Bearer ${process.env.WOOCOMMERCE_JWT}` },
          },
        )
        .pipe(
          catchError((error) => {
            this.logger.error(error);
            throw 'An error happened!';
          }),
        ),
    );
    return data;
  }

  async checkPluginByProductKey(productKey: string) {
    const plugins = await this.findPlugins();

    return !!plugins.find((plugin) => plugin.SWID == productKey);
  }
}
