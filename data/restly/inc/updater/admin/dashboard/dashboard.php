<div class="st-dsd-wrap">

	<header class="dt_dsb_header">
		<div class="st-dsb-header-inner">
			<h2><?php esc_html_e( 'Welcome to Restly!', 'restly' ); ?></h2>
			<p><?php esc_html_e( 'Verify Your Purchase of Restly WordPress Theme', 'restly' ); ?></p>
		</div><!-- /.dsd-header-inner -->
	</header>

	<div class="st-row">

		<div class="st-col st-col-6">
			<?php require_once get_template_directory() . '/inc/updater/admin/features.php'; ?>
		</div><!-- /.col -->

		<div class="st-col st-col-6">
			<?php require_once get_template_directory() . '/inc/updater/admin/registration.php'; ?>
		</div><!-- /.col -->

	</div><!-- /.row -->

</div><!-- /.dsd-wrap -->
