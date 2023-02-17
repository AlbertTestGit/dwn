<?php 
$restly_copyright_text = restly_options('restly_copyright_text');
$ftmenu = restly_options('restly_ft5_menu_select');

?>
<div class="container">
    <div class="copyright-area">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="site-info">
                    <?php echo wp_kses($restly_copyright_text,'restly_allowed_html'); ?>
                </div><!-- .site-info -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <?php 
                wp_nav_menu(
                    array(
                        'container' 		=> false,
                        'menu' 				=> $ftmenu,
                        'theme_location' 	=> $ftmenu,
                        'menu_id'        	=> 'footer-menu',
                        'menu_class'		=> 'footer-menu',
                        'echo'              => true,
                    )
                );
                ?>
            </div>
        </div>
    </div>
</div>