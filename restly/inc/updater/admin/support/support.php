<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Liquid_Admin_Support extends Liquid_Admin_Page {

	/**
	 * [__construct description]
	 * @method __construct
	 */
	public function __construct() {

		$this->id         = 'restly-support';
		$this->page_title = esc_html__( 'Restly Support', 'restly' );
		$this->menu_title = esc_html__( 'Support', 'restly' );
		$this->parent     = 'restly';
		$this->position   = '15';

		parent::__construct();
	}

	/**
	 * [display description]
	 * @method display
	 * @return [type]  [description]
	 */
	public function display() {
		include_once get_template_directory() . '/liquid/admin/views/liquid-support.php';
	}

	/**
	 * [srestly description]
	 * @method srestly
	 * @return [type] [description]
	 */
	public function srestly() {

	}
}
new Liquid_Admin_Support();
