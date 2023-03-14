<?php if ( !defined( 'ABSPATH' ) ) {die;} // Cannot access directly.
// Contact info

CSF::createWidget( 'restly_company_info_widget', array(
    'title'       => esc_html__( 'Restly Company Info', 'restlycore' ),
    'classname'   => 'restly_company_info_widget',
    'description' => esc_html__( 'Add Your Company Info', 'restlycore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'restlycore' ),
        ),
        array(
            'id'      => 'cinfo_img_enable',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Logo', 'restlycore' ),
            'default' => true,
        ),

        array(
            'id'          => 'cinfo_img',
            'type'        => 'media',
            'title'       => esc_html__( 'Upload Logo', 'restlycore' ),
            'library'     => 'image',
            'preview'     => true,
            'placeholder' => 'http://',
            'dependency'  => array( 'cinfo_img_enable', '==', 'true' ), // check for true/false by field id
        ),
        array(
            'id'    => 'restly_conpany_info_dec',
            'type'  => 'textarea',
            'title' => esc_html__( 'Content', 'restlycore' ),
            'default' => esc_html__( 'Lorem ipsum dolor sit amet elit consectetur adipisicing sed do eiusmod tempor incididunt et dolore elit labore', 'restlycore' ),
        ),
        array(
            'id'      => 'restly_company_info_group',
            'type'    => 'group',
            'title'   => esc_html__( 'Add Information', 'restlycore' ),
            'fields'  => array(
                array(
                    'id'    => 'restly_coinfo_gdec',
                    'type'  => 'wp_editor',
                    'title' => esc_html__( 'Content', 'restlycore' ),
                ),
                array(
                    'id'    => 'restly_coinfo_gicon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Icon', 'restlycore' ),
                ),
            ),
            'default' => array(
                array(
                    'restly_coinfo_gdec'  => esc_html__( '1791 Yorkshire Circle Kitty Hawk, NC 27949', 'restlycore' ),
                    'restly_coinfo_gicon' => 'fas fa-map-marker-alt',
                ),
            ),
        ),
    ),
) );

// OutPut

if ( !function_exists( 'restly_company_info_widget' ) ) {
    function restly_company_info_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
        
        <?php
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
           
        ?>
        <div class="company-info-widget">
            <?php  if ( $instance['cinfo_img_enable'] == true ):
                $logo = $instance['cinfo_img'];
            ?>
            <div class="conpany-info-img">
                <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php esc_html_e( 'Restly by Themepul', 'restlycore' );?>">
            </div>
            <?php endif; ?>
            <p><?php echo esc_html($instance['restly_conpany_info_dec']); ?></p>
            <?php if(!empty($instance['restly_company_info_group'])) : ?>
            <div class="company-contact-widget">
                <ul>
                <?php foreach($instance['restly_company_info_group'] as $restly_cinfo ) : ?>
                    <li><i class="<?php echo esc_attr($restly_cinfo['restly_coinfo_gicon']); ?>"></i><?php echo wp_kses_post($restly_cinfo['restly_coinfo_gdec']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
        <?php
    echo wp_kses_post( $args['after_widget'] );
    }
}


// Contact Info 

CSF::createWidget( 'restly_contact_info_widget', array(
    'title'       => esc_html__( 'Restly Contact Info', 'restlycore' ),
    'classname'   => 'contact-widget',
    'description' => esc_html__( 'Add Your Contact Info', 'restlycore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'restlycore' ),
        ),
        array(
            'id'      => 'restly_contact_info_group',
            'type'    => 'group',
            'title'   => esc_html__( 'Add Information', 'restlycore' ),
            'fields'  => array(
                array(
                    'id'    => 'restly_contact_info_editor',
                    'type'  => 'wp_editor',
                    'title' => esc_html__( 'Content', 'restlycore' ),
                ),
                array(
                    'id'    => 'restly_contact_info_icons',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Icon', 'restlycore' ),
                ),
            ),
            'default' => array(
                array(
                    'restly_contact_info_editor'  => esc_html__( '1791 Yorkshire Circle Kitty Hawk, NC 27949', 'restlycore' ),
                    'restly_contact_info_icons' => 'fas fa-map-marker-alt',
                ), 
                array(
                    'restly_contact_info_editor'  => esc_html__( 'Mon-Sat 9:00 - 7:00', 'restlycore' ),
                    'restly_contact_info_icons' => 'fas fa-clock',
                ),
                array(
                    'restly_contact_info_editor'  => esc_html__( '+012-345-6789', 'restlycore' ),
                    'restly_contact_info_icons' => 'fas fa-phone-alt',
                ), 
                array(
                    'restly_contact_info_editor'  => esc_html__( 'info@example.com', 'restlycore' ),
                    'restly_contact_info_icons' => 'fas fa-envelope',
                ),
            ),
        ),
    ),
) );
// OutPut

if ( !function_exists( 'restly_contact_info_widget' ) ) {
    function restly_contact_info_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
        <?php
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
        <div class="company-contact-widget">
            <ul>
            <?php foreach( $instance['restly_contact_info_group'] as $restly_contact_info ) : ?>
                <li><i class="<?php echo esc_attr($restly_contact_info['restly_contact_info_icons']); ?>"></i><?php echo wp_kses_post($restly_contact_info['restly_contact_info_editor']); ?></li>
            <?php endforeach; ?>
            </ul>
        </div>
        <?php
    echo wp_kses_post( $args['after_widget'] );
    }
}
// Blog Post

CSF::createWidget( 'restly_blog_post_widget', array(
    'title'       => esc_html__( 'Restly Post With Thumbnail', 'restlycore' ),
    'classname'   => 'footer-widget-post-with-thum',
    'description' => esc_html__( 'Add your Contact Info', 'restlycore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'restlycore' ),
        ),
        array(
            'id'          => 'restly_widget_blog_position',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Options', 'restlycore' ),
            'options'     => array(
              'ASC'  => esc_html__( 'ASC', 'restlycore' ),
              'DESC'  => esc_html__( 'DESC', 'restlycore' ),
            ),
            'default'     => 'ASC'
        ),
        array(
            'id'      => 'restly_widget_blog_number',
            'type'    => 'number',
            'title'   => esc_html__( 'Show Post', 'restlycore' ),
            'default' => 2,
        ),
        array(
            'id'      => 'restly_widget_blog_show_meta',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Meta', 'restlycore' ),
            'default' => true,
        ),
        array(
            'id'      => 'restly_widget_blog_show_image',
            'type'    => 'switcher',
            'title'   => esc_html__( 'Enable Image', 'restlycore' ),
            'default' => true,
        ),
        array(
            'id'      => 'restly_widget_blog_text_limit',
            'type'    => 'number',
            'title'   => esc_html__( 'Title Text Limit', 'restlycore' ),
            'default' => 5,
        ),
    ),
) );

// OutPut

if ( !function_exists( 'restly_blog_post_widget' ) ) {
    function restly_blog_post_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
        <ul class="restly-widget-post-thum">
            <?php
            $post_q = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => $instance['restly_widget_blog_number'],
            'order'          => $instance['restly_widget_blog_position'],
             ) );
            if ( $post_q->have_posts() ):
            while ( $post_q->have_posts() ):
                $post_q->the_post();
                ?>
		        <li>
                    <?php if ( !empty( $instance['restly_widget_blog_show_image'] == true ) ) {
                        the_post_thumbnail( 'thumbnail' );
                    }?>

                    <div class="restly-widget-post-thum-content">
                        <h6><a class="recent-post-title" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), $instance['restly_widget_blog_text_limit'] ); ?></a></h6>
                        <?php if ( !empty( $instance['restly_widget_blog_show_meta'] == true ) ) : ?>
                        <div class="recent-widget-date">
                            <?php echo get_the_date() ?>
                        </div>
                        <?php endif; ?>
                    </div><!-- /.footer-widget__post-content -->
		        </li>
			<?php endwhile;endif;?>
        </ul>
        <?php
echo wp_kses_post( $args['after_widget'] );
    }
}

// Subscribe Options

CSF::createWidget( 'restly_newsletter_widget', array(
    'title'       => esc_html__( 'Restly Newletter Widget', 'restlycore' ),
    'description' => esc_html__( 'Add Newsletter Info', 'restlycore' ),
    'fields'      => array(
        array(
            'id'      => 'title',
            'type'    => 'text',
            'default' => esc_html__( 'Newsletter', 'restlycore' ),
            'title'   => esc_html__( 'Title', 'restlycore' ),
        ),
        array(
            'id'      => 'newsletter_dec',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Sort Description', 'restlycore' ),
            'desc'    => esc_html__( 'Add Sort Description', 'restlycore' ),
            'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing', 'restlycore' ),
        ),
        array(
            'id'      => 'newsletter_placeholder',
            'type'    => 'text',
            'title'   => esc_html__( 'placeholder Text', 'restlycore' ),
            'desc'    => esc_html__( 'Add placeholder Text', 'restlycore' ),
            'default' => esc_html__( 'Your Email Address', 'restlycore' ),
        ),
        array(
            'id'          => 'select_newsletter',
            'type'        => 'select',
            'title'       => esc_html__( 'Select Type', 'restlycore' ),
            'placeholder' => esc_html__( 'Select an option', 'restlycore' ),
            'options'     => array(
                '1' => esc_html__( 'Shortcode form Plugin', 'restlycore' ),
                '2' => esc_html__( 'Add Link', 'restlycore' ),
            ),
            'default'     => '2',
        ),
        array(
            'id'         => 'newsletter_shortcode',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Add Shortcode', 'restlycore' ),
            'desc'       => esc_html__( 'Add Shortcode from Mailchip wordpress Plugin', 'restlycore' ),
            'dependency' => array( 'select_newsletter', '==', '1' ),
        ),
        array(
            'id'         => 'newsletter_link',
            'type'       => 'textarea',
            'title'      => esc_html__( 'Add Link', 'restlycore' ),
            'desc'       => esc_html__( 'Add Newsletter Link from your Account', 'restlycore' ),
            'dependency' => array( 'select_newsletter', '==', '2' ),
        ),
        array(
            'type'    => 'subheading',
            'content' => esc_html__( 'CSS Options', 'restlycore' ),
        ),
        array(
            'id'          => 'newsletter_bg',
            'type'        => 'color',
            'title'       =>esc_html__( 'Background', 'restlycore' ),
            'output_mode' => 'background-color'
        ),
    ),
) );

// OutPut
if ( !function_exists( 'restly_newsletter_widget' ) ) {
    function restly_newsletter_widget( $args, $instance ) {
        if(!empty($instance['newsletter_bg'])){
            $bg = $instance['newsletter_bg'];
        }else{
            $bg = '';
        }
        echo wp_kses_post( $args['before_widget'] );
        echo '<div class="subscribe-widget" style="background:'.$bg.'">';
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
        <div class="company-subscribe-widget">
            <?php if ( !empty( $instance['newsletter_dec'] ) ): ?>
                <p>
                    <?php echo esc_html( $instance['newsletter_dec'] ); ?>
                </p>
            <?php endif;?>
            <?php
                if ( $instance['select_newsletter'] == '1' ) {
            ?>
                <div class="subscribe-form">
                    <?php echo do_shortcode( $instance['newsletter_shortcode'] ); ?>
                </div>
            <?php
            } else {
            ?>
            <div class="subscribe-form">
                <form action="<?php echo esc_url( $instance['newsletter_link'] ) ?>" method="post">
                    <div class="mc4wp-form-fields">
                        <input type="email" name="EMAIL" placeholder="<?php echo esc_attr($instance['newsletter_placeholder']); ?>" required="" />
                        <button value="submit"><i class="fa fa-location-arrow"></i></button>
                    </div>
                </form>
            </div>
            <?php
            }
            ?>
        </div>
        <?php
        echo '</div>';
        echo wp_kses_post( $args['after_widget'] );
    }
}

// Social Links
CSF::createWidget( 'restly_social_widget', array(
    'title'       => esc_html__( 'Restly Social Widget', 'restlycore' ),
    'classname'   => 'restly-social-widgets',
    'description' => esc_html__( 'Add Your Social Info', 'restlycore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'restlycore' ),
        ),
        array(
            'id'      => 'restly_socials_widget',
            'type'    => 'group',
            'title'   => esc_html__( 'Add Social Links', 'restlycore' ),
            'fields'  => array(
                array(
                    'id'    => 'restly_social_label',
                    'type'  => 'text',
                    'title' => esc_html__( 'Name', 'restlycore' ),
                ),
                array(
                    'id'    => 'restly_social_link',
                    'type'  => 'text',
                    'title' => esc_html__( 'Site Link', 'restlycore' ),
                ),
                array(
                    'id'    => 'restly_social_icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Site Icon', 'restlycore' ),
                ),
            ),
            'default' => array(
                array(
                    'restly_social_label' => esc_html__( 'Facebook', 'restlycore' ),
                    'restly_social_link'  => '#',
                    'restly_social_icon'  => 'fab fa-facebook',
                ),
                array(
                    'restly_social_label' => esc_html__( 'Twitter', 'restlycore' ),
                    'restly_social_link'  => '#',
                    'restly_social_icon'  => 'fab fa-twitter',
                ),
                array(
                    'restly_social_label' => esc_html__( 'Linkedin', 'restlycore' ),
                    'restly_social_link'  => '#',
                    'restly_social_icon'  => 'fab fa-linkedin',
                ),
                array(
                    'restly_social_label' => esc_html__( 'Instagram', 'restlycore' ),
                    'restly_social_link'  => '#',
                    'restly_social_icon'  => 'fab fa-instagram',
                ),
            ),
        ),
    ),
) );

// OutPut
if ( !function_exists( 'restly_social_widget' ) ) {
    function restly_social_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        if ( !empty( $instance['title'] ) ) {
            echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
        }
        ?>
            <ul>
            <?php foreach ( $instance['restly_socials_widget'] as $social ) {
                echo ' <li><a href="' . esc_url( $social['restly_social_link'] ) . '" data-toggle="tooltip" data-placement="top" title="' . esc_attr( $social['restly_social_label'] ) . '"><i class="' . esc_attr( $social['restly_social_icon'] ) . '"></i></a></li>';
            }
            ?>
            </ul>
        <?php
echo wp_kses_post( $args['after_widget'] );
    }
}

// Social Links
CSF::createWidget( 'restly_nabber_widget', array(
    'title'       => esc_html__( 'Restly Banner Widget', 'restlycore' ),
    'classname'   => 'restly-banner-widgets',
    'description' => esc_html__( 'Add Your Banner Info', 'restlycore' ),
    'fields'      => array(
        array(
            'id'    => 'title',
            'type'  => 'text',
            'default' => __('Work  Together','restlycore'),
            'title' => esc_html__( 'Title', 'restlycore' ),
        ),
        array(
            'id'    => 'restly_banner_dec',
            'type'  => 'textarea',
            'title' => esc_html__( 'Content', 'restlycore' ),
            'default' => __('Bur wemust ipsum dolor sit amet consectetur adipisicing elit sed eiusmod tempor incididunt ut labore','restlycore'),
        ),
        array(
            'id'    => 'restly_banner_link',
            'type'  => 'link',
            'title' => esc_html__( 'Link', 'restlycore' ),
        ),
        array(
            'id'    => 'restly_banner_link_text',
            'type'  => 'text',
            'title' => esc_html__( 'Link Text', 'restlycore' ),
            'default' => __('Contact Now','restlycore'),
        ),
        array(
            'id'           => 'restly_banner_widget_bg',
            'type'         => 'upload',
            'title'        => esc_html__( 'Background/Image', 'restlycore' ),
            'library'      => 'image',
            'placeholder'  => 'http://',
            'button_title' => esc_html__( 'Add Image', 'restlycore' ),
            'remove_title' => esc_html__( 'Remove Image', 'restlycore' ),
        ),
    ),
) );

// OutPut
if ( !function_exists( 'restly_nabber_widget' ) ) {
    function restly_nabber_widget( $args, $instance ) {
        echo wp_kses_post( $args['before_widget'] );
        ?>
            <div class="restly-widget-banner-wrapper" style="background-image:url(<?php echo esc_url($instance['restly_banner_widget_bg']); ?>)">
                <?php if ( !empty( $instance['title'] ) ) {
                    echo wp_kses_post( $args['before_title'] ) . apply_filters( 'widget_title widtet-title', $instance['title'] ) . wp_kses_post( $args['after_title'] );
                } ?>
                <div class="restly-banner-dec">
                    <p><?php echo esc_html($instance['restly_banner_dec']); ?></p>
                </div>
                <div class="restly-banner-btn">
                    <a href="<?php echo esc_url($instance['restly_banner_link']['url']); ?>"><?php echo esc_html($instance['restly_banner_link_text']); ?><i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
        <?php
        echo wp_kses_post( $args['after_widget'] );
    }
}