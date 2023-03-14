<?php namespace Elementor;

class restly_blog_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_blog';
    }

    public function get_title() {
        return esc_html__( 'Restly Blog V1', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {
        $options = array();
        $args = array(
            'hide_empty' => false,
        );
        $categories = get_categories($args);
        
        foreach ( $categories as $key => $category ) {
            $options[$category->term_id] = $category->name;
        }
        //Content tab start
        $this->start_controls_section(
            'restly_blog_options',
            [
                'label' => esc_html__( 'Restly Blog', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'restly_blog_style',
            [
                'label' => esc_html__( 'Select Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'One', 'restlycore' ),
                    'two'  => esc_html__( 'Two', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_blog_item_show',
            [
                'label' => esc_html__( 'Disply Items', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 3,
            ]
        );
        $this->add_control(
            'restly_blog_v1_enable_cat',
            [
                'label' => esc_html__( 'Post By Category', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'restly_blog_v1_post_cat',
            [
                'label' => __( 'Select Categoris', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $options,
                'condition' => [
                    'restly_blog_v1_enable_cat' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_item_order',
            [
                'label' => esc_html__( 'Order By', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'ASC',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'restlycore' ),
                    'DESE' => esc_html__( 'DESE', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_blog_item_column',
            [
                'label' => esc_html__( 'Select Item Column', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '12'  => esc_html__( '1', 'restlycore' ),
                    '6'  => esc_html__( '2', 'restlycore' ),
                    '4'  => esc_html__( '3', 'restlycore' ),
                    '3'  => esc_html__( '4', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_blog_item_navication',
            [
                'label' => esc_html__( 'Show Navication', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'restly_blog_item_title_lanth',
            [
                'label' => esc_html__( 'Title Lanth ', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 20,
                'step' => 1,
                'default' => 5,
            ]
        );
        $this->add_control(
            'restly_blog_item_dec_lanth',
            [
                'label' => esc_html__( 'Content Lanth ', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 50,
                'step' => 1,
                'default' => 10,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_CSS_box_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_blog_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_image_height',
            [
                'label' => esc_html__( 'Image Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-img img' => 'height: {{SIZE}}{{UNIT}} !important;',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_blog_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-blog-post-item.restly-blog-one',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_blog_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-post-item.restly-blog-one',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_blog_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-post-item.restly-blog-one',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-item.restly-blog-one' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-item.restly-blog-one' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-item.restly-blog-one' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_blog_CSS_pagination_align',
            [
                'label' => __( 'Pagination Alignment', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'restlycore' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .pagination-area' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_CSS_content_box_options',
            [
                'label' => esc_html__( ' Content Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_blog_CSS_content_box_align',
            [
                'label' => __( 'Alignment', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'restlycore' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_blog_CSS_content_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-blog-top-area',
                'condition' => [
                    'restly_blog_style' => 'two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_blog_CSS__shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-two .restly-blog-top-area',
                'condition' => [
                    'restly_blog_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_content_box_pright',
            [
                'label' => esc_html__( 'Padding Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-two .restly-blog-post-content' => 'padding-right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_blog_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_content_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-two .restly-blog-top-area' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_blog_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_content_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .restly-blog-top-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_CSS_content_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .restly-blog-top-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_CSS_content_options',
            [
                'label' => esc_html__( ' Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_blog_css_content_tabs'
        );
        $this->start_controls_tab(
            'restly_blog_css_content_tabs_cat',
            [
                'label' => __( 'Category', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_cat_icolor',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-content .post-meta-item ul li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_cat_color',
            [
                'label' => esc_html__( 'Meta Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-content .post-meta-item ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_cat_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-content .post-meta-item ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_css_content_cat_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-post-content .post-meta-item ul li a',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_cat_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-content .post-meta-item ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_cat_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-content .post-meta-item ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_blog_css_content_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_title_color',
            [
                'label' => esc_html__( 'Meta Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_title_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_css_content_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-post-title a',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'restly_blog_css_content_tabs_dec',
            [
                'label' => __( 'content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_contentdect_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-post-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_css_content_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-post-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-post-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-post-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_blog_css_content_tabs_author',
            [
                'label' => __( 'Author', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_author_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-author img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_tabs_author_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-author img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_tabs_autho_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [  '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-author img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_tabs_author_mrgin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-author img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_css_content_tabs_author_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-author img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if($settings['restly_blog_style'] == 'one' ){
            $styleClass = 'restly-blog-one';
        }else{
            $styleClass = 'restly-blog-two';
        }
        global $post;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        if($settings['restly_blog_v1_enable_cat'] == 'yes' && !empty($settings['restly_blog_v1_post_cat'])){
            $p = new \WP_Query( array( 
                'posts_per_page' => esc_attr($settings['restly_blog_item_show'] ),
                'post_type' => 'post',
                'paged' => $paged,
                'order' => esc_attr($settings['restly_blog_item_order']), 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $settings['restly_blog_v1_post_cat'],
                    )
                ),
            ));
        }else{
            $p = new \WP_Query( array( 
                'posts_per_page' => esc_attr($settings['restly_blog_item_show'] ),
                'post_type' => 'post',
                'paged' => $paged,
                'order' => esc_attr($settings['restly_blog_item_order']), 
            ));
        }
        ob_start();
        ?>
        <div class="restly-blog-post-wrapper">
            <div class="restly-blog-post-box">
                <div class="row ">
                    <?php while ( $p->have_posts() ): $p->the_post(); ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-<?php echo esc_attr($settings['restly_blog_item_column']); ?>">
                        <div class="restly-blog-post-item <?php echo esc_attr($styleClass); ?>">
                            <?php if(has_post_thumbnail()) { ?>
                            <div class="restly-blog-post-img">
                                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            </div>
                            <?php } ?>
                            <div class="restly-blog-post-content">
                                <div class="restly-blog-top-area">
                                    <?php if($settings['restly_blog_style'] == 'two' ) { ?>
                                    <div class="restly-blog-post-author">
                                        <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
                                    </div>
                                    <?php } ?>
                                    <div class="post-meta-item">
                                        <ul>
                                        <?php if($settings['restly_blog_style'] == 'two' ) { ?>
                                            <li class="postby-tow"><?php esc_html_e('By','restlycore'); restly_posted_by(); ?></li>
                                            <?php } ?>
                                            <li><i class="fas fa-calendar-alt"></i><?php restly_posted_on(); ?></li>
                                            <?php if($settings['restly_blog_style'] == 'one' ) { ?>
                                            <li class="post-cat"><i class="fas fa-tag"></i><?php the_category(','); ?></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="restly-blog-post-title">
                                        <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $settings['restly_blog_item_title_lanth'] ); ?></a>
                                    </div>
                                    <div class="restly-post-dec">
                                        <P><?php echo wp_trim_words( get_the_content(), $settings['restly_blog_item_dec_lanth'] ); ?></P>
                                    </div>
                                </div>
                                <?php if($settings['restly_blog_style'] == 'one' ) { ?>
                                <div class="restly-blog-post-author">
                                    <?php echo get_avatar( get_the_author_meta('ID'), 60); esc_html_e('By','restlycore'); restly_posted_by(); ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_query();?>
                    <?php if($settings['restly_blog_item_navication'] == 'yes' ) { ?>
                        <?php restly_paginate_nav($p); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_blog_Widget );