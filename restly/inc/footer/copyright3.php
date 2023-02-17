<div class="copyright-area">
    <div class="container">
        <div class="copyright-inner">
            <?php 
                $restly_copyright_text = restly_options('restly_copyright_text');
                echo wp_kses($restly_copyright_text,'restly_allowed_html'); 
            ?>
        </div>
    </div>
</div>