Может потребоваться изменить владельца папки data/wordpress
```sh
sudo chown -R www-data:www-data wordpress
```

Если в MySQL нет базы wordpress
```sql
CREATE DATABASE IF NOT EXISTS `wordpress`;
GRANT ALL ON `wordpress`.* TO 'shopuser'@'%';
```
