<?php
if (!defined('ABSPATH')) exit; // No access of directly access
class restlyElementorWidget {
    private static $instance = null;
    public static function get_instance() {
        if (!self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    
    public function init() {
        add_action('elementor/widgets/register', array($this, 'restly_elementor_widgets'));
        require_once( __DIR__ . '/control/custom-control.php' );
        require_once( __DIR__ . '/header-footer/tp-function.php' );
        add_action( 'init', [ $this, 'tp_hf_post_type' ] );
        add_action( 'add_meta_boxes', [ $this, 'tp_hf_register_metabox' ] );
        add_action( 'save_post', [ $this, 'tp_hf_save_meta' ] );
        add_filter( 'single_template', [ $this, 'tp_hf_load_canvas_template' ] );
        add_action( 'wp', [ $this, 'hooks' ],100 );
    }
    
    public function restly_elementor_widgets() {
        // Check if the Elementor plugin has been installed / activated.
        if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
            require_once('slider.php');
            require_once('title.php');
            require_once('home-banner.php');
            require_once('home-banner-two.php');
            require_once('service-box.php');
            require_once('service-two.php');
            require_once('service-slider.php');
            require_once('image.php');
            require_once('about-us.php');
            require_once('counter.php');
            require_once('counter-new.php');
            require_once('theme-button.php');
            require_once('work-process.php');
            require_once('pricing-table.php');
            require_once('pricing-table-two.php');
            require_once('pricing-v2.php');
            require_once('pricing-tab-v2.php');
            require_once('pricing-v3.php');
            require_once('portfolio-info.php');
            require_once('contact-info.php');
            require_once('home-portfolio.php');
            require_once('home-blog.php');
            require_once('home-blog-two.php');
            require_once('home-blog-v3.php');
            require_once('home-blog-v4.php');
            require_once('home-blog-v5.php');
            require_once('feature-icon-with-title.php');
            
            require_once('clients-logo.php');
            require_once('team-title.php');
            require_once('team-member.php');
            require_once('mailchip-subscribe.php');
            require_once('our-testimonial.php');
            require_once('testimonial-two.php');
            require_once('testimonial-three.php');
            require_once('testimonial-v4.php');
            require_once('testimonial-v5.php');
            require_once('testimonial-v6.php');
            require_once('portfolio-category.php');
            require_once('contact-info-box.php');
            require_once('dot-shape.php');
            require_once('shape.php');
            require_once('social-icons.php');
            require_once('line.php');
            require_once('tab.php');
            require_once('nav-menu.php');
            require_once('search.php');
            require_once('company-info.php');
            require_once('contact-list.php');
            require_once('subscribe-two.php');
            require_once('recent-post.php');
            require_once('copyright.php');
            require_once('menu-list.php');
            require_once('contact-form7.php');
            require_once('video-button.php');
            require_once('image-deta.php');
            require_once('faq-addon.php');
            require_once('nft-seller.php');
            require_once('nft-work-progress.php');
            require_once('nft-Collection.php');
            require_once('nft-products.php');
            require_once('nft-products-menu.php');
            require_once('jobs-info.php');
            require_once('job-post.php');
            /// New 
            require_once('image-with-shape.php');
            require_once('image-with-shape-v2.php');
            require_once('service-three.php');
            require_once('home-banner-three.php');
            require_once('title-two.php');
            require_once('message.php');
            require_once('feature-icon.php');
            require_once('mobilescreen.php');
            require_once('pricing-v4.php');
            require_once('newsletter-section.php');
            require_once('testimonial-v7.php');
            require_once('counter-v3.php');

        }
    }
    // Header footer 
    static function tp_get_template_elementor($type = null) {
        $args = [
            'post_type' => 'elementor_library',
            'posts_per_page' => -1,
        ];
        if ($type) {
            $args['tax_query'] = [
                [
                    'taxonomy' => 'elementor_library_type',
                    'field' => 'slug',
                    'terms' => $type,
                ],
            ];
        }
        $tp_template = get_posts($args);
        $tpl = array();
        if (!empty($tp_template) && !is_wp_error($tp_template)) {
            foreach ($tp_template as $post) {
                $tpl[$post->ID] = $post->post_title;
            }
        }
        return $tpl;
    }
    /* Post type header footer */
    public function tp_hf_post_type() {
        $labels = array(
            'name'                  => esc_html__( 'Restly Header - Footer', 'restlycore' ),
            'singular_name'         => esc_html__( 'Restly Header - Footer', 'restlycore' ),
            'rewrite'               => array( 'slug' => esc_html__( 'Restly Header - Footer' ) ),
            'menu_name'             => esc_html__( 'Restly Header - Footer', 'restlycore' ),
            'add_new'               => esc_html__( 'Add New', 'restlycore' ),
            'add_new_item'          => esc_html__( 'Add New Template', 'restlycore' ),
            'new_item'              => esc_html__( 'New Template Item', 'restlycore' ),
            'edit_item'             => esc_html__( 'Edit Template Item', 'restlycore' ),
            'view_item'             => esc_html__( 'View Template', 'restlycore' ),
            'all_items'             => esc_html__( 'All Template', 'restlycore' ),
            'search_items'          => esc_html__( 'Search Template', 'restlycore' ),
            'not_found'             => esc_html__( 'No Template Items Found', 'restlycore' ),
            'not_found_in_trash'    => esc_html__( 'No Template Items Found In Trash', 'restlycore' ),
            'parent_item_colon'     => esc_html__( 'Parent Template:', 'restlycore' ),
            'not_found'             => esc_html__( 'No Template found', 'restlycore' ),
            'not_found_in_trash'    => esc_html__( 'No Template found in Trash', 'restlycore' )

        );
        $args = array(
            'labels'      => $labels,
            'supports'    => array( 'title', 'thumbnail', 'elementor' ),
            'public'      => true,
            'has_archive' => true,
            'rewrite'     => array('slug' => get_theme_mod('tp_hf_slug','tp_hf')),
            'menu_icon'   => 'dashicons-welcome-widgets-menus',
        );
        register_post_type( 'tp_hf', $args );
        flush_rewrite_rules();
    }
    public function tp_hf_register_metabox() {
        add_meta_box(
            'tphf-meta-box',
            esc_html__( 'Restly Header Footer Options', 'restlycore' ), 
            [ $this, 'tp_hf_metabox_render'], 
            'tp_hf', 'normal', 'high' );
    }  
    public function tp_hf_metabox_render( $post ) {
        $values            = get_post_custom( $post->ID );
        $tp_template_type     = isset( $values['tp_template_type'] ) ? esc_attr( $values['tp_template_type'][0] ) : '';
        ?>
        <table class="tp-table" style="padding: 10px;background: #2271b1;width: 100%;color: #ffffff;font-size: 18px;font-weight: bold;">
            <tbody>
                <tr class="tp-row type-of-template">
                    <td class="tp-row-title" style="width: 15%;">
                        <label for="tp_template_type"><?php esc_html_e( 'Template Type', 'restlycore' ); ?></label>
                    </td>
                    <td class="tp-content-area" style="width: 75%;">
                        <select name="tp_template_type" id="tp_template_type" style="width: 100%;padding: 12px;">
                            <option value="" <?php selected( $tp_template_type, '' ); ?>><?php esc_html_e( 'Select Option', 'restlycore' ); ?></option>
                            <option value="type_header" <?php selected( $tp_template_type, 'type_header' ); ?>><?php esc_html_e( 'Header', 'restlycore' ); ?></option>
                            <option value="type_footer" <?php selected( $tp_template_type, 'type_footer' ); ?>><?php esc_html_e( 'Footer', 'restlycore' ); ?></option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php 
    }
    public function tp_hf_save_meta( $post_id ) {
        if ( isset( $_POST['tp_template_type'] ) ) {
            update_post_meta( $post_id, 'tp_template_type', esc_attr( $_POST['tp_template_type'] ) );
        }
        return false;
    }
    public function tp_hf_load_canvas_template( $tp_single_template ) {
        global $post;
        if ( 'tp_hf' == $post->post_type ) {
            $tp_elementor_canvas = ELEMENTOR_PATH . '/modules/page-templates/templates/canvas.php';

            if ( file_exists( $tp_elementor_canvas ) ) {
                return $tp_elementor_canvas;
            } else {
                return ELEMENTOR_PATH . '/includes/page-templates/canvas.php';
            }
        }
        return $tp_single_template;
    }    
    public static function tp_get_header_id() {
        $tp_header_id = self::get_template_id( 'type_header' );
        if ( '' === $tp_header_id ) {
            $tp_header_id = false;
        }
        return apply_filters( 'tp_get_header_id', $tp_header_id );
    }
    public static function tp_get_footer_id() {
        $tp_footer_id = self::get_template_id( 'type_footer' );
        if ( '' === $tp_footer_id ) {
            $tp_footer_id = false;
        }
        return apply_filters( 'tp_get_footer_id', $tp_footer_id );
    }
    public static function get_template_id( $type ) {
        $args = [
            'post_type' => 'tp_hf',
            'posts_per_page' => -1,
        ];
        $tphf_templates = get_posts($args);
        foreach ( $tphf_templates as $tp_template ) {
            if ( get_post_meta( absint( $tp_template->ID ), 'tp_template_type', true ) === $type ) {
                return $tp_template->ID;
            }
        }
        return '';
    }
    public static function get_settings( $setting = '', $default = '' ) {
        if ( 'type_header' == $setting || 'type_footer' == $setting ) {
            $tp_templates = self::get_template_id( $setting );
            $tp_template = ! is_array( $tp_templates ) ? $tp_templates : $tp_templates[0];
            return $tp_template;
        }
    }
    public function hooks() {
        if ( tp_header_enabled() ) { 
            add_action( 'get_header', [ $this, 'tp_override_header' ] ); 
            add_action( 'tp_header', [ $this, 'tp_render_header' ] );
        }
        if ( tp_footer_enabled() ) {
            add_action( 'get_footer', [ $this, 'tp_override_footer' ] ); 
            add_action( 'tp_footer', [ $this, 'tp_render_footer' ] ); 
        }
    }  
    public function tp_override_header() {
		require_once( __DIR__ . '/header-footer/tp-header.php' );
        $tp_templates   = [];
        $tp_templates[] = 'header.php';
        remove_all_actions( 'wp_head' );
        ob_start();
        locate_template( $tp_templates, true );
        ob_get_clean();
    }
    public function tp_override_footer() {
		require_once( __DIR__ . '/header-footer/tp-footer.php' );
        $tp_templates   = [];
        $tp_templates[] = 'footer.php';
        remove_all_actions( 'wp_footer' );
        ob_start();
        locate_template( $tp_templates, true );
        ob_get_clean();
    }
    public static function get_header_content() {
        $tp_get_header_id = self::tp_get_header_id();
        $tp_frontend = new \Elementor\Frontend;
        echo $tp_frontend->get_builder_content_for_display($tp_get_header_id);
    }
    public static function get_footer_content() {
        $tp_get_footer_id = self::tp_get_footer_id();
        $tp_frontend = new \Elementor\Frontend;
        echo $tp_frontend->get_builder_content_for_display($tp_get_footer_id);
    }
    public function tp_render_header() {
        ?>        
        <header class="site-header tp-header-builder" role="banner"> 
            <div class="tp-container"> 
                <div class="tp-row">
                    <div class="tp-col">
                    <?php echo self::get_header_content(); ?>
                    </div>
                </div>
            </div>
        </header>
        <?php
    }
    public function tp_render_footer() {
    ?>
    <footer class="site-footer tp-footer-builder" role="contentinfo">
        <div class="tp-container"> 
            <div class="tp-row">
                <div class="tp-col">
                <?php echo self::get_footer_content(); ?>
                </div>
            </div>
        </div>
    </footer>
    <?php
    }
    public function tp_set_columns_status($tp_columns) {
        $tp_date_column = $tp_columns['date'];
        $author_column = $tp_columns['author'];
        unset( $tp_columns['date'] );
        $tp_columns['status'] = esc_html__( 'Status', 'restlycore' );
        $tp_columns['date']      = $tp_date_column;
        return $tp_columns;
    }
    public function tp_render_column_status($column, $post_id) {  
        if ( is_admin() ){
            $tp_curent_header = $this->tp_get_header_id();
            $tp_curent_footer = $this->tp_get_footer_id();
            $type = get_post_meta( $post_id, 'tp_template_type', true );
            if ($type == 'type_header') {
                if ($post_id == $tp_curent_header ) {
                    echo ( '<span class="tp-hf-status tp-hf-status-on">'. esc_html__('On', 'restlycore') .'</span>' );
                } else {
                    echo ( '<span class="tp-hf-status tp-hf-status-off">'. esc_html__('Off', 'restlycore') .'</span>' );
                }
            } elseif($type == 'type_footer') {
                if ($post_id == $tp_curent_footer ) {
                    echo ( '<span class="tp-hf-status tp-hf-status-on">'. esc_html__('On', 'restlycore') .'</span>' );
                } else {
                    echo ( '<span class="tp-hf-status tp-hf-status-off">'. esc_html__('Off', 'restlycore') .'</span>' );
                }
            }else {
                echo ( '<span class="tp-hf-status tp-hf-status-off">'. esc_html__('Off', 'restlycore') .'</span>' );
            } 
        }
    } 
}
restlyElementorWidget::get_instance()->init();

function restly_elementor_widget_categories($elements_manager) {
    $elements_manager->add_category(
        'restly',
        [
            'title' => __('Restly Elements', 'restlycore'),
        ],
    );
    $elements_manager->add_category(
        'restlynft',
        [
            'title' => __('Restly NFT', 'restlycore'),
        ],
    );
    $elements_manager->add_category(
        'restlyhf',
        [
            'title' => __('Restly Header Footer', 'restlycore'),
        ],
    );
}
add_action('elementor/elements/categories_registered', 'restly_elementor_widget_categories');


