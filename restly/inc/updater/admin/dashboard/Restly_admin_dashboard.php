<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Restly_admin_dashboard extends Restly_admin_page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id         = 'restly';
		$this->page_title = esc_html__( 'Restly Dashboard', 'restly' );
		$this->menu_title = esc_html__( 'Register/Verify', 'restly' );
		$this->position   = '50';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
		include_once get_template_directory() . '/inc/updater/admin/dashboard/dashboard.php';
	}

	/**
	 * [save description]
	 * @method save
	 * @return [type] [description]
	 */
	public function save() {

	}
}
new Restly_admin_dashboard();
