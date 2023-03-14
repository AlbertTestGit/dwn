<?php
// templates
include( __DIR__ . '/templates/import.php');
include( __DIR__ . '/templates/init.php');
include( __DIR__ . '/templates/load.php');
include( __DIR__ . '/templates/api.php');

\RestlyTheme\Templates\Import::instance()->load();
\RestlyTheme\Templates\Load::instance()->load();
\RestlyTheme\Templates\Templates::instance()->init();

if (!defined('TEMPLATE_LOGO_SRC')){
	define('TEMPLATE_LOGO_SRC', plugin_dir_url( __FILE__ ) . 'templates/assets/img/template_logo.png');
}