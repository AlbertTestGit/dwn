<?php 
$restly_h7c_label = restly_options('restly_header7_contact_label'); 
$restly_h7c_num = restly_options('restly_header7_contact_number'); 
$restly_h7c_num_link = restly_options('restly_header7_contact_number_link'); 
$restly_h7c_icon = restly_options('restly_header7_contact_icon'); 
?>
<div class="header-number">
    <i class="fas fa-phone-alt"></i>
    <div class="number-content">
        <?php if(!empty($restly_h7c_label)){
            echo '<span>'.esc_html($restly_h7c_label).'</span>';
        } ?>
        <a href="<?php echo esc_url($restly_h7c_num_link); ?>"><?php echo esc_html($restly_h7c_num); ?></a>
    </div>
</div>