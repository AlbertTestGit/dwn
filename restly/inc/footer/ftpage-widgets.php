
<?php 
if(is_page() || is_singular('post') || is_singular('restly_portfolio') || is_singular('restly_team') && get_post_meta( $post->ID, 'restly_metabox', true)) {
    $restlyMeta = get_post_meta($post->ID, 'restly_metabox', true);
} else {
    $restlyMeta = array();
}
if (is_array($restlyMeta) && array_key_exists('restly_meta_ft_widgets', $restlyMeta) && get_post_meta($post->ID, 'restly_metabox', true) && array_key_exists('restly_meta_ft_widgets_show', $restlyMeta) && $restlyMeta['restly_meta_ft_widgets_show'] == true ) {
    $footer_meta_widgets = $restlyMeta['restly_meta_ft_widgets'];
}
?>
<div class="footer-widget-section widget-form-metabox">
    <div class="restly-footer-widgets">
        <div class="container">
            <div class="row restly-ftw-box">
                <?php foreach($footer_meta_widgets as $ft_mwidget ) : ?>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo esc_attr($ft_mwidget['restly_meta_ft_widget_col']); ?>">
                    <?php 
                        if ( is_active_sidebar( $ft_mwidget['restly_meta_ft_widget'] ) ) : ?>
                            <div class="widget-area footer">
                                <?php dynamic_sidebar( $ft_mwidget['restly_meta_ft_widget'] ); ?>
                            </div><!-- .widget-area -->
                        <?php endif;
                    ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
