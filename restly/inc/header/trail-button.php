<?php 
$restly_h7_trail_text = restly_options('restly_h7_trail_text'); 
$restly_h7_trail_select = restly_options('restly_h7_trail_select'); 
$restly_h7_trail_link = restly_options('restly_h7_trail_link'); 
$restly_h7_trail_page = restly_options('restly_h7_trail_page'); 
if($restly_h7_trail_select == 2 ){
    $trail_link = get_page_link($restly_h7_trail_page);
}else{
    $trail_link = $restly_h7_trail_link;
}
?>
<div class="button-tral">
    <a href="<?php echo esc_url($trail_link); ?>" class="theme-btns"><?php echo esc_html($restly_h7_trail_text); ?></a>
</div>