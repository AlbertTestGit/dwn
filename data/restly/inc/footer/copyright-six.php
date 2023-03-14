<?php 
$restly_copyright_text = restly_options('restly_copyright_text');
$restly_enable_ttb_icon = restly_options('restly_enable_ttb_icon','fa fa-angle-up');
?>
<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 col-10">
                <div class="site-info">
                    <?php echo wp_kses($restly_copyright_text,'restly_allowed_html'); ?>
                </div><!-- .site-info -->
            </div>
            <?php if( '1' == restly_options('restly_enable_top_to_bottom') ) : ?>
            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                <div class="scroll-top scroll-to-target" id="back-top"><i class="<?php echo esc_attr($restly_enable_ttb_icon); ?>"></i></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>