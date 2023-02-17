<?php
if (class_exists('CSF')) {
    function restly_inline_style() {
        wp_enqueue_style('restly-inline', get_template_directory_uri() . '/assets/css/inline-style.css', array(), '1.0.8', 'all');
 
        if (is_page() || is_singular('post') || is_singular('restly_project') || is_singular('restly_team') && get_post_meta(get_the_ID(), 'restly_metabox', true)) {
            $restlyMeta = get_post_meta(get_the_ID(), 'restly_metabox', true);
        } else {
            $restlyMeta = array();
        }
        $restly_header_styles = restly_options('restly_header_styles');
        if (is_array($restlyMeta) && array_key_exists('restly_meta_select_header', $restlyMeta) && $restlyMeta['restly_meta_select_header'] != 'default' && $restlyMeta['restly_meta_enable_header'] == true) {
            $selectedHeader = $restlyMeta['restly_meta_select_header'];
        } else if (!empty($restly_header_styles) && class_exists('CSF')) {
            $selectedHeader = restly_options('restly_header_styles');
        } else {
            $selectedHeader = 'one';
        }
        if ($selectedHeader === 'one') {
            $restly_header1_menu_bg = restly_options('restly_header1_menu_bg');
            $restly_inline = '
                .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_header1_menu_bg['restly_hea1_submeni_bgc']) . ';
                }
                .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_header1_menu_bg['restly_hea1_submeni_textc']) . ';
                }
                .main-navigation ul li ul li a:hover, .main-navigation ul li ul li.current-menu-item>a, .main-navigation ul li ul li.current_page_item>a, .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_header1_menu_bg['restly_hea1_submeni_texthc']) . ';
                    background-color: ' . esc_attr($restly_header1_menu_bg['restly_hea1_submeni_texthbg']) . ';
                }
            ';
        }
        if ($selectedHeader === 'two') {
            $restly_he2_menus = restly_options('restly_header2_menu_bg');
            $restly_inline = '
                .header-two .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he2_menus['restly_hea2_submeni_bgc']) . ';
                }
                .header-two .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he2_menus['restly_hea2_submeni_textc']) . ';
                }
                .header-two .main-navigation ul li ul li a:hover,.header-two .main-navigation ul li ul li.current-menu-item>a,.header-two .main-navigation ul li ul li.current_page_item>a,.header-two .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he2_menus['restly_hea2_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he2_menus['restly_hea2_submeni_texthbg']) . ';
                }
            ';
        }
        if ($selectedHeader === 'three') {
            $restly_he3_menus = restly_options('restly_header3_smenu_bg');
            $restly_inline = '
                .header-three .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he3_menus['restly_hea3_submeni_bgc']) . ';
                }
                .header-three .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he3_menus['restly_hea3_submeni_textc']) . ';
                }
                .header-three .main-navigation ul li ul li a:hover,.header-three .main-navigation ul li ul li.current-menu-item>a,.header-three .main-navigation ul li ul li.current_page_item>a,.header-three .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he3_menus['restly_hea3_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he3_menus['restly_hea3_submeni_texthbg']) . ';
                }
            ';
        }
 
        if ($selectedHeader === 'four') {
            $restly_he4_menus = restly_options('restly_header4_menu_submenu');
            $restly_inline = '
                .header-three.header-four .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he4_menus['restly_hea4_submeni_bgc']) . ';
                }
                .header-three.header-four .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he4_menus['restly_hea4_submeni_textc']) . ';
                }
                .header-three.header-four .main-navigation ul li ul li a:hover,.header-three.header-four .main-navigation ul li ul li.current-menu-item>a,.header-three.header-four .main-navigation ul li ul li.current_page_item>a,.header-three.header-four .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he4_menus['restly_hea4_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he4_menus['restly_hea4_submeni_texthbg']) . ';
                }
            ';
        }
        if ($selectedHeader === 'five') {
            $restly_he5_menus = restly_options('restly_header5_menu_submenu');
            $restly_inline = '
                .header-three.header-five .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he5_menus['restly_hea5_submeni_bgc']) . ';
                }
                .header-three.header-five .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he5_menus['restly_hea5_submeni_textc']) . ';
                }
                .header-three.header-five .main-navigation ul li ul li a:hover,.header-three.header-five .main-navigation ul li ul li.current-menu-item>a,.header-three.header-five .main-navigation ul li ul li.current_page_item>a,.header-three.header-five .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he5_menus['restly_hea5_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he5_menus['restly_hea5_submeni_texthbg']) . ';
                }
            ';
        }
        if ($selectedHeader === 'six') {
            $restly_he6_menus = restly_options('restly_header6_menu_submenu');
            $restly_login6_colors = restly_options('restly_login6_colors');
            $restly_inline = '
                .header-six .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he6_menus['restly_hea6_submeni_bgc']) . ';
                }
                .header-six .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he6_menus['restly_hea6_submeni_textc']) . ';
                }
                .header-six .main-navigation ul li ul li a:hover,.header-six .main-navigation ul li ul li.current-menu-item>a,.header-six .main-navigation ul li ul li.current_page_item>a,.header-six .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he6_menus['restly_hea6_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he6_menus['restly_hea6_submeni_texthbg']) . ';
                }
                a.theme-login-btn{
                    border-color:' . esc_attr($restly_login6_colors['restly_login6_bocolor']) . ';
                    background-color:' . esc_attr($restly_login6_colors['restly_login6_bgcolor']) . ';
                    color:' . esc_attr($restly_login6_colors['restly_login6_tcolor']) . ';
                }
                a.theme-login-btn:hover{
                    border-color:' . esc_attr($restly_login6_colors['restly_login6_hbocolor']) . ';
                    background-color:' . esc_attr($restly_login6_colors['restly_login6_hbgcolor']) . ';
                    color:' . esc_attr($restly_login6_colors['restly_login6_htcolor']) . ';
                }
            ';
        }
        if ($selectedHeader === 'seven') {
            $restly_he7_menus = restly_options('restly_header7_menu_submenu');
            $restly_inline = '
                .header-seven .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he7_menus['restly_hea7_submeni_bgc']) . ';
                }
                .header-seven .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he7_menus['restly_hea7_submeni_textc']) . ';
                }
                .header-seven .main-navigation ul li ul li a:hover,.header-seven .main-navigation ul li ul li.current-menu-item>a,.header-seven .main-navigation ul li ul li.current_page_item>a,.header-seven .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he7_menus['restly_hea7_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he7_menus['restly_hea7_submeni_texthbg']) . ';
                }
            ';
        }

        if ($selectedHeader === 'eight') {
            $restly_he8_menus = restly_options('restly_header8_menu_colors');
            $restly_inline = '
                .header-eight .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he8_menus['restly_hea8_submeni_bgc']) . ';
                }
                .header-eight .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he8_menus['restly_hea8_submeni_textc']) . ';
                }
                .header-eight .main-navigation ul li ul li a:hover,.header-eight .main-navigation ul li ul li.current-menu-item>a,.header-eight .main-navigation ul li ul li.current_page_item>a,.header-eight .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he8_menus['restly_hea8_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he8_menus['restly_hea8_submeni_texthbg']) . ';
                }
            ';
        }

        if ($selectedHeader === 'nine') {
            $restly_he9_menus = restly_options('restly_header9_menu_submenu');
            $restly_inline = '
                .header-nine .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he9_menus['restly_hea9_submeni_bgc']) . ';
                }
                .header-nine .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he9_menus['restly_hea9_submeni_textc']) . ';
                }
                .header-nine .main-navigation ul li ul li a:hover,.header-nine .main-navigation ul li ul li.current-menu-item>a,.header-nine .main-navigation ul li ul li.current_page_item>a,.header-nine .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he9_menus['restly_hea9_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he9_menus['restly_hea9_submeni_texthbg']) . ';
                }
            ';
        }
        if ($selectedHeader === 'ten') {
            $restly_he10_menus = restly_options('restly_header10_menu_submenu');
            $restly_inline = '
                .header-ten .main-navigation ul li ul{
                    background-color: ' . esc_attr($restly_he10_menus['restly_hea10_submeni_bgc']) . ';
                }
                .header-ten .main-navigation ul li ul li a{
                    color: ' . esc_attr($restly_he10_menus['restly_hea10_submeni_textc']) . ';
                }
                .header-ten .main-navigation ul li ul li a:hover,.header-ten .main-navigation ul li ul li.current-menu-item>a,.header-ten .main-navigation ul li ul li.current_page_item>a,.header-ten .main-navigation ul li ul li.current_page_ancestor>a{
                    color: ' . esc_attr($restly_he10_menus['restly_hea10_submeni_texthc']) . ';
                   background-color: ' . esc_attr($restly_he10_menus['restly_hea10_submeni_texthbg']) . ';
                }
            ';
        }
        $restly_css_editor = restly_options('restly_css_editor');
        $restly_ct_colar = restly_options('restly_ct_colar');
        if (!empty($restly_css_editor)) {
            $restly_inline .= '' . esc_attr($restly_css_editor) . '';
        }
        $restly_ct_colar = restly_options('restly_ct_colar');
        $restly_primary_color = restly_options('restly_primary_color');
        $restly_secondary_color = restly_options('restly_secondary_color');
        if ($restly_ct_colar == true && !empty($restly_primary_color) ) {
            $restly_inline .= '
            .theme-btns,ul.slick-dots li.slick-active button,.navbar ul li a[title]:after,.header-search-popup-content form button,.post-tag-social .share-this-post ul li a,a.post-video,.woocommerce-pagination ul li span.page-numbers.current,nav.navigation.pagination ul li a:hover,nav.navigation.pagination ul li span.current,
            .page-links span.current,.page-links a:hover,.pagination-area ul li a:hover,.pagination-area ul li a.current,nav.navigation.comments-pagination ul li span.page-numbers.current,.comments-area a.page-numbers:hover, .sidebar-widget-area h2.widget-title:after,.sidebar-widget-area h2.widget-title:before,.widget.widget_tag_cloud a:hover,.sidebar-widget-area .widget.widget_archive li:hover .post-count-number,.comment-form input[type="submit"],.post-single.format-quote .post-contents,button.slick-prev.slick-arrow,button.slick-next.slick-arrow,.footer-widgets-area,.sidebar-widget-area .wp-calendar-table tbody td#today,.subscribe-widget,.restly-widget-banner-wrapper:after,.restly-post-pagination nav.navigation.post-navigation .nav-links .nav-previous a:hover,.restly-post-pagination nav.navigation.post-navigation .nav-links .nav-next a:hover,.sidebar-widget-area .widget_rss li cite:before,.author-social-info ul li a,.post-password-form input[type="submit"],button.wp-block-search__button:hover  {background-color:'. esc_attr($restly_primary_color) .'}
            a:hover,.post-tag span.tagcloud a:hover,.post-meta-box ul li i,.share-this-post ul li a:hover i,.post-meta-box ul li a:hover,a.post-video:hover,.widget.widget_rss .rss-date,.widget.widget_rss cite,.sidebar-widget-area ul li a:hover,.sidebar-widget-area .widget.widget_nav_menu a:hover,.sidebar-widget-area .widget.widget_recent_entries li a:hover,.sidebar-widget-area .widget.widget_rss li a:hover,.widget form.search-form .search-button button[type="submit"],.sidebar-widget-area .widget_recent_comments span.comment-author-link a, .comment-reply a:hover,.comment-meta .comment-date,.cform-input.name:after,.cform-input.email:after, .cform-input.website:after,.cform-input.message:before,.page-content .search-form .search-button button:hover,.widget.widget_archive ul li a:before,.widget.widget_categories ul li a:before,.widget.widget_pages ul li a:before,.widget.widget_nav_menu ul li a:before,.sidebar-widget-area .wp-calendar-table tr td a,footer .wp-calendar-table tr td a,.footer-two table td a,.footer-three table td a,restly-widget-post-thum-content>h6>a .recent-post-title:hover,.sidebar-widget-area ul li a:hover,.sticky h2.entry-title a,table td a,.wp-block-archives a:hover,.wp-block-categories a:hover{color:'. esc_attr($restly_primary_color) .'}
            .widget form.search-form input:focus,.widget form.search-form input:focus-visible,blockquote,.comment-form input:focus,.comment-form textarea:focus,.page-content .search-form input.search-field,.mc4wp-form-fields input[type=email],.widget.widget_recent_comments li,.sticky .post-contents {border-color:'. esc_attr($restly_primary_color) .'}
            .navbar ul li a[title]:before{border-left-color:'. esc_attr($restly_primary_color) .'}
            ';
        }
        if ($restly_ct_colar == true && !empty($restly_secondary_color) ) {
            $restly_inline .= '
            .theme-btns:hover,.post-tag-social .share-this-post ul li a:hover,.comment-form input[type="submit"]:hover,button.slick-prev.slick-arrow:hover, button.slick-next.slick-arrow:hover,.mc4wp-form-fields button:hover,.restly-social-widgets ul li a,.restly-widget-banner-wrapper .restly-banner-btn a:hover{background-color:'. esc_attr($restly_secondary_color) .'}
            h1,h2,h3,h4,h5,h6,a,strong,dt, th,.comment-meta .fn,.comment-reply-link,.no-comments,.post-tag label,.post-tag-social .post-share label,.post-tag span.tagcloud a,.post-meta-box ul li a,
            .post-meta-box label,.share-this-post ul li a i,h2.entry-title,.post-details h2.entry-title,.woocommerce-pagination ul li a,nav.navigation.pagination ul li a,nav.navigation.pagination ul li span,.page-links span,
            .page-links a,.pagination-area ul li a, nav.navigation.comments-pagination ul li a,nav.navigation.comments-pagination ul li span.page-numbers.current,
            .woocommerce-pagination ul li span.page-numbers.current,.sidebar-widget-area ul li a, .widget.widget_tag_cloud a,.widget select,.widget select:focus,.sidebar-widget-area .widget.widget_archive li,.sidebar-widget-area .widget.widget_categories li,.sidebar-widget-area .widget.widget_pages li,.sidebar-widget-area .widget.widget_meta li,
            .sidebar-widget-area .widget.widget_recent_entries li a,
            .sidebar-widget-area .widget.widget_rss li a,
            .sidebar-widget-area .widget.widget_text strong,
            .sidebar-widget-area .widget.widget_nav_menu a,.widget ul li>span.number,.post-content blockquote p,blockquote cite,.post-single.format-quote .post-contents h2.entry-title a:hover,.restly-widget-post-thum-content>h6>a.recent-post-title,.sidebar-widget-area ul li a,.blocks-gallery-caption,.wp-block-embed figcaption,.wp-block-image figcaption,figcaption,footer span.wp-calendar-nav-prev a:hover,footer span .wp-calendar-nav-next a:hover,.wp-calendar-table tr td a:hover,.wp-block-archives a,.wp-block-categories a,.sidebar-widget-area h2.widget-title{color:'. esc_attr($restly_secondary_color) .'}
            ';
        }
        wp_add_inline_style('restly-inline', $restly_inline);
    }
}
add_action('wp_enqueue_scripts', 'restly_inline_style');