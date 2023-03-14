<?php

class Tlg {
    public function __construct()
    {
        $this->load_dependensens();
        $this->init_hooks();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    private function init_hooks() {}


    private function load_dependensens()
    {
        require_once TLG_PLUGIN_DIR . 'admin/class-tlg-admin.php';
        require_once TLG_PLUGIN_DIR . 'public/class-tlg-public.php';
    }


    private function define_admin_hooks()
    {
        $plugin_admin = new Tlg_Admin();

    }

    private function define_public_hooks()
    {
        $plugin_public = new Tlg_Public();

    }


}
