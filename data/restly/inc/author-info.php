<div class="author-info-wrapper">
    <div class="author-info-inner">
        <div class="author-info-left">
            <div class="author-img">
                <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
            </div>
        </div>
        <div class="author-info-right">
            <div class="author-info-content">
                <h2 class="author-info-title"><?php the_author_posts_link(); ?></h2>
                <div class="author-dec"><?php the_author_meta('description'); ?></div>
                <div class="author-social-info">
                    <ul>
                        <?php
                        $restly_user_cm = wp_get_user_contact_methods();
						foreach ($restly_user_cm as $restly_ucm_key => $restly_ucm_value) :
							$restly_cm_link = get_user_meta(get_the_author_meta('ID'), $restly_ucm_key, true);
						?>
						<?php if($restly_cm_link) : ?>
						<li>
							<a data-toggle="tooltip" data-placement="top" data-original-title="<?php echo esc_attr($restly_ucm_key) ?>" href="<?php echo esc_url($restly_cm_link); ?>"><span class="fab fa-<?php echo esc_attr($restly_ucm_key) ?>"></span>
							</a>
						</li>
						<?php endif; ?>
						<?php
						endforeach;	
						?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>