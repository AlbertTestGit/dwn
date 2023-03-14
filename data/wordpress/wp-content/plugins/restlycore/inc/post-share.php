<?php

function restly_post_share(){

    global $post;

    $post_title = get_the_title();
    $post_id    = get_the_ID();
    $post_title   = htmlspecialchars( urlencode( html_entity_decode( esc_attr( get_the_title() ), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8');
    $post_url   = get_permalink( $post_id );
    $pin_image  = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
    $protocol	= is_ssl() ? 'https' : 'http';

    ?>

    <div class="share-this-post">
        <ul class="social-icons m0p0ln">
            <li>
                <a href="https://www.facebook.com/sharer.php?u=<?php echo rawurlencode( esc_url( $post_url  ) ); ?>">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>

            <li>
                <a href="https://twitter.com/share?text=<?php echo wp_strip_all_tags( $post_title ); ?>&amp;url=<?php echo rawurlencode( esc_url( $post_url  ) ); ?>">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>

            <li>
                <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo rawurlencode( esc_url( $post_url  ) ); ?>&amp;media=<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post_id ) ); ?>&amp;description=<?php echo urlencode( wp_trim_words( strip_shortcodes( get_the_content( $post_id ) ), 40 ) ); ?>">
                    <i class="fab fa-pinterest"></i>
                </a>
            </li>

            <li>
                <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo rawurlencode( esc_url( $post_url  ) ); ?>&amp;title=<?php echo wp_strip_all_tags( $post_title ); ?>&amp;summary=<?php echo urlencode( wp_trim_words( strip_shortcodes( get_the_content( $post_id ) ), 40 ) ); ?>&amp;source=<?php echo esc_url( home_url( '/' ) ); ?>">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
        </ul>
    </div>

<?php } ?>