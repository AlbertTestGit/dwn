<?php
namespace ElementorControls;
if (!defined('ABSPATH')) exit; // Exit if accessed directly

class ThemePul_Elementor_Custom_Controls {

	public function includes() {
        require_once( __DIR__ . '/shape-control.php' );
	}

	public function register_controls() {
		$this->includes();
		$controls_manager = \Elementor\Plugin::$instance->controls_manager;
	}

	public function __construct() {
		add_action('elementor/controls/controls_registered', [$this, 'register_controls']);
	}

}
new ThemePul_Elementor_Custom_Controls();