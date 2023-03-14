<div class="wrap">

    <h1> <?php _e('Timal License Giver Page'); ?></h1>
</div>
<?php

$data = Tlg_Admin::get_content();
$content = $data['content'];
$id = $data['id'];

?>
<form action=" <?php echo admin_url('admin-post.php'); ?> " method="post">
    <?php wp_editor($content, 'wp_editor', array(
        'textarea_name' => 'tlg_content',
        'textarea_rows' => 10,
    )); ?>



    <?php wp_nonce_field('Tlg_action', 'Tlg_nonce') ?>
    <input type="hidden" name="Tlg_id" value="<?php echo $id; ?>">
    <input type="hidden" name="action" value="save_content">

    <p><input type="submit" value="Save" class="button button-primary"></p>
</form>