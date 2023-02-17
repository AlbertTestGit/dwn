<?php 
$restly_show_login6 = restly_options('restly_show_login6');
$restly_show_login_text = restly_options('restly_show_login_text');
$restly_show_clogin6 = restly_options('restly_show_clogin6');
$restly_clogin_link = restly_options('restly_clogin_link');
?>
<?php if($restly_show_clogin6 == true ) : ?>
    <div class="login-signup-btn">
        <a href="<?php echo esc_url($restly_clogin_link); ?>" class="theme-login-btn"><?php echo esc_html($restly_show_login_text); ?></a>
    </div>
<?php else : ?>
    <div class="login-signup-btn">
    <?php if (is_user_logged_in()) : ?>
        <a class="theme-login-btn" href="<?php echo wp_logout_url(get_permalink()); ?>"><?php echo esc_html($restly_show_login_text); ?></a>
    <?php else : ?>
        <a class="theme-login-btn" href="<?php echo wp_login_url(get_permalink()); ?>"><?php echo esc_html($restly_show_login_text); ?></a>
    <?php endif;?>
    </div>
<?php endif; ?>

