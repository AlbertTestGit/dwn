<?php 
if(!function_exists('tp_header_enabled')){
    function tp_header_enabled() {
        $tp_header_id = restlyElementorWidget::get_settings( 'type_header', '' );
        $tp_status    = false;
        if ( '' !== $tp_header_id ) {
            $tp_status = true;
        }
        return apply_filters( 'tp_header_enabled', $tp_status );
    }
}
if(!function_exists('tp_footer_enabled')){
    function tp_footer_enabled() {
        $tp_header_id = restlyElementorWidget::get_settings( 'type_footer', '' );
        $tp_status    = false;
        if ( '' !== $tp_header_id ) {
            $tp_status = true;
        }
        return apply_filters( 'tp_footer_enabled', $tp_status );
    }
}
if(!function_exists('get_header_content')){
    function get_header_content() {
        $tp_get_tp_header_id = restlyElementorWidget::tp_get_tp_header_id();
        $tp_frontend = new \Elementor\Frontend;
        echo $tp_frontend->get_builder_content_for_display($tp_get_tp_header_id);
    }
}