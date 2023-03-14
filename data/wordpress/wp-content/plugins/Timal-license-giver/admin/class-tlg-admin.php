<?php

class Tlg_Admin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'admin_menu'));
        add_action('admin_post_save_content', array($this, 'save_content'));
    }

    public function save_content() {
        if ( ! isset( $_POST['Tlg_nonce']) || ! wp_verify_nonce($_POST['Tlg_nonce'], 'Tlg_action')) {
            wp_die( __('error'));
        }

        $content = isset( $_POST['tlg_content']) ? trim( wp_unslash( $_POST['tlg_content']) ) : '';
        $id = isset( $_POST['Tlg_id']) ? (int) $_POST['Tlg_id']  : 0;

        global $wpdb;

        $query = "UPDATE tlg_tbl SET content = %s WHERE id = $id";
        $wpdb->query( $wpdb->prepare( $query, $content ) );

        wp_redirect( $_POST['_wp_http_referer'] );
        die;
    }

    public function admin_menu() {
        add_menu_page( __( 'License Api Page', 'Timal licnese giver'), 'TLG API Conf', 'manage_options', 'TLG-main', array( $this, 'render_main_page'), 'dashicons-admin-settings');

    }

    public function render_main_page() {
        require_once TLG_PLUGIN_DIR . 'admin/templates/main-page.php';
    }


    public static function get_content() {
        global $wpdb;
        return $wpdb->get_row( 'SELECT * FROM tlg_tbl LIMIT 1' , ARRAY_A);
    }

}