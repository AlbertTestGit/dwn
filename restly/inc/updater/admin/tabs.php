<nav class="dsd-menubard">

	<span class="dsd-logo">
		<img src="<?php echo RESTLY_DIR_IMG . '/logo_sticky_retina.png'; ?>" alt="<?php echo esc_attr( $theme->name ); ?>">
		<?php printf( '<span class="v">%s</span>', $theme->version ); ?>
	</span>

	<ul class="dsd-menu">
		<li class="<?php restly_helper()->active_tab( 'restly' ); ?>">
			<a href="">
				<span><?php esc_html_e( 'Dashboard', 'restly' ); ?></span>
			</a>
		</li>
		<li class="">
			<a href="">
				<span><?php esc_html_e( 'Install Plugins', 'restly' ); ?></span>
			</a>
		</li>
		<li class="">
			<a href="">
				<span><?php esc_html_e( 'Import Demo', 'restly' ); ?></span>
			</a>
		</li>
		<li class="">
			<a href="">
				<span><?php esc_html_e( 'Support', 'restly' ); ?></span>
			</a>
		</li>
		<li>
			<a href="http://docs.themepul.co/" target="_blank">
				<i class="icon-md-help-circle"></i>
				<span><?php esc_html_e( 'Documentations', 'restly' ); ?></span>
			</a>
		</li>
	</ul>

</nav> <!-- /.dsd-menubard -->
