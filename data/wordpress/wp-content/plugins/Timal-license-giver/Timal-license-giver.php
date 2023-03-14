<?php
/*
Plugin Name:  Timal license giver
Description:  Автоматический выдает лицензий клиенту после подтверждения оплаты.изменено для pluginstore
Version:      1.5
Author:       Zhakiya Akadil
Author URI:   https://www.instagram.com/zhakia_ak/
*/


defined("ABSPATH") or die;
define("TLG_PLUGIN_DIR", plugin_dir_path(__FILE__));
define("TLG_PLUGIN_URL", plugin_dir_path(__FILE__));
define("TLG_PLUGIN_NAME", dirname(plugin_basename(__FILE__)));

register_activation_hook(__FILE__, 'tlg_activate');

function tlg_activate()
{
    require_once TLG_PLUGIN_DIR . 'includes/class-tlg-activate.php';
    Tlg_Activate::activate();
}

require_once TLG_PLUGIN_DIR . 'includes/class-tlg.php';
function run_tlg()
{
    $plugin = new Tlg();
}
run_tlg();



