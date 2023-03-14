<?php namespace Elementor;

class restly_blog_two_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_blog_two';
    }
    public function get_title() {
        return esc_html__( 'Restly Blog V2', 'restlycore' );
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
        $this->start_controls_section(
            'restly_blog_static_options',
            [
                'label' => esc_html__( 'Restly Blog Static Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_blog_static_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get News & Blog', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_blog_static_title_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h2',
                'options' => [
                    'h1'  => esc_html__( 'H1', 'restlycore' ),
                    'h2'  => esc_html__( 'H2', 'restlycore' ),
                    'h3'  => esc_html__( 'H3', 'restlycore' ),
                    'h4'  => esc_html__( 'H4', 'restlycore' ),
                    'h5'  => esc_html__( 'H5', 'restlycore' ),
                    'h6'  => esc_html__( 'H6', 'restlycore' ),
                    'p'  => esc_html__( 'P', 'restlycore' ),
                    'span'  => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_blog_static_stitle',
            [
                'label' => esc_html__( 'Sub Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Recent Articles', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_blog_static_stitle_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h3',
                'options' => [
                    'h1'  => esc_html__( 'H1', 'restlycore' ),
                    'h2'  => esc_html__( 'H2', 'restlycore' ),
                    'h3'  => esc_html__( 'H3', 'restlycore' ),
                    'h4'  => esc_html__( 'H4', 'restlycore' ),
                    'h5'  => esc_html__( 'H5', 'restlycore' ),
                    'h6'  => esc_html__( 'H6', 'restlycore' ),
                    'p'  => esc_html__( 'P', 'restlycore' ),
                    'span'  => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_blog_static_dec',
            [
                'label' => esc_html__( 'Sort Description', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<p>Lorem ipsum dolor amet consectetur adips 
                elit sed do eiusmod tempor incididunt laboey
                dolore magna aliqua enim minim</p>
                <p>On the other hand, we denounce righteous indignation and dislike men who are beguiled and demoralized by the charms</p>', 'restlycore' ),
            ]
        );
        $this->add_control(
			'restly_blog_static_buttons_select',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
				'label_block' => true,
			]
		);
        $this->add_control(
			'restly_blog_static_buttons_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_blog_static_buttons_select' => 'extranal',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_blog_static_buttons_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_blog_static_buttons_select' => 'page',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_blog_static_buttons_text',
			[
				'label' => esc_html__( 'Buttn Text', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'default'	=> esc_html__( 'View All News', 'restlycore' ),
				'label_block' => true,
			]
		);
        $this->add_control(
			'restly_blog_static_buttons_new_tab',
			[
				'label' => __( 'Open New Window?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $this->add_control(
			'restly_blog_static_buttons_nofollow',
			[
				'label' => __( 'Add nofollow ?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $this->end_controls_section();
        //Content tab start
        $this->start_controls_section(
            'restly_blog_two_options',
            [
                'label' => esc_html__( 'Restly Blog V2', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_blog_v2_enable_cat',
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
            'restly_blog_v2_post_cat',
            [
                'label' => __( 'Select Categoris', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $options,
                'condition' => [
                    'restly_blog_v2_enable_cat' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_item_order',
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
            'restly_blog_two_item_title_lanth',
            [
                'label' => esc_html__( 'Title Lanth ', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 20,
                'step' => 1,
                'default' => 7,
            ]
        );
        $this->add_control(
            'restly_blog_two_item_dec_lanth',
            [
                'label' => esc_html__( 'Content Lanth ', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 20,
                'step' => 1,
                'default' => 10,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_two_CSS_box_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_blog_two_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-blog-post-item.restly-blog-one',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_blog_two_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-post-item.restly-blog-one',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_blog_two_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-post-item.restly-blog-one',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_CSS_box_radius',
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
            'restly_blog_two_CSS_box_margin',
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
            'restly_blog_two_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-post-item.restly-blog-one' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_two_CSS_content_box_options',
            [
                'label' => esc_html__( 'With image Content Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_blog_two_CSS_content_box_align',
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
                    '{{WRAPPER}} .with-image .restly-blog-post-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_CSS_content_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .with-image .restly-blog-top-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_CSS_content_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .with-image .restly-blog-top-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_two_CSS_content_options',
            [
                'label' => esc_html__( 'With Image Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_blog_two_css_content_tabs'
        );
        $this->start_controls_tab(
            'restly_blog_two_css_content_tabs_cat',
            [
                'label' => __( 'Category', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_cat_icolor',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-content .post-meta-item ul li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_cat_color',
            [
                'label' => esc_html__( 'Meta Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-content .post-meta-item ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_cat_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-content .post-meta-item ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_two_css_content_cat_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .with-image .restly-blog-post-content .post-meta-item ul li a',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_cat_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-content .post-meta-item ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_cat_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-content .post-meta-item ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_blog_two_css_content_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_title_color',
            [
                'label' => esc_html__( 'Meta Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_title_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_two_css_content_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .with-image .restly-blog-post-title a',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-blog-post-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'restly_blog_two_css_content_tabs_dec',
            [
                'label' => __( 'content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_contentdect_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-post-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_two_css_content_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .with-image .restly-post-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-post-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .with-image .restly-post-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_blog_two_css_content_tabs_author',
            [
                'label' => __( 'Author', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_content_author_width',
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
            'restly_blog_two_css_content_tabs_author_height',
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
            'restly_blog_two_css_content_tabs_autho_radius',
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
            'restly_blog_two_css_content_tabs_author_mrgin',
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
            'restly_blog_two_css_content_tabs_author_padding',
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

        $this->start_controls_section(
            'restly_blog_two_css_noimg_content_box_options',
            [
                'label' => esc_html__( 'No image Content Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_blog_two_css_noimg_content_box_align',
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
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .restly-blog-v2-items .no-image .restly-blog-top-area' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}}  .restly-blog-v2-items .no-image .restly-blog-top-area' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_two_css_noimg_content_options',
            [
                'label' => esc_html__( 'No Image Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_blog_two_css_noimg_content_tabs'
        );
        $this->start_controls_tab(
            'restly_blog_two_css_noimg_content_tabs_cat',
            [
                'label' => __( 'Category', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_cat_icolor',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-content .post-meta-item ul li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_cat_ihcolor',
            [
                'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-item:hover .restly-blog-post-content .post-meta-item ul li i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_cat_color',
            [
                'label' => esc_html__( 'Meta Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-content .post-meta-item ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_cat_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-item:hover .restly-blog-post-content .post-meta-item ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_two_css_noimg_content_cat_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-content .post-meta-item ul li a',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_cat_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-content .post-meta-item ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_cat_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-content .post-meta-item ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_blog_two_css_noimg_content_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_title_color',
            [
                'label' => esc_html__( 'Meta Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_title_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-item:hover .restly-blog-post-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_two_css_noimg_content_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-title a',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-title a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-title a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'restly_blog_two_css_noimg_content_tabs_dec',
            [
                'label' => __( 'content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_contentdect_color',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-post-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_contentdect_hcolor',
            [
                'label' => esc_html__( 'Meta Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-blog-post-item:hover .restly-post-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_two_css_cimg_ontent_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-post-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-post-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_two_css_noimg_content_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-items .no-image .restly-post-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_blog_static_content_options',
            [
                'label' => esc_html__( 'Static Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_blog_static_title_tabs'
        );
        $this->start_controls_tab(
            'restly_blog_static_tabs_normal',
            [
                'label' => __( 'Small Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_stitle_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-static-stitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_static_stitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-static-stitle',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_stitle_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-static-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_stitle_pading',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-static-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'restly_blog_static_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-static-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_static_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-tatic-stitle',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_title_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-tatic-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_title_pading',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-blog-tatic-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_blog_static_tabs_dec',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_dec_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-sdec' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_blog_static_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-sdec',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_dec_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-sdec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_dec_pading',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-sdec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_blog_static_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'conrestly_blog_static_buttons_Css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_buttons_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_blog_static_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_buttons_Css_nradisu',
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
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_blog_static_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_button_CSS_aligment',
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
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'more_options',
            [
                'label' => __( 'Hover CSS Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_buttons_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_blog_static_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_blog_static_buttons_Css_hradisu',
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
                    '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_blog_static_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-blog-v2-static-wrapper .restly-button a.theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        global $post;
        if($settings['restly_blog_v2_enable_cat'] == 'yes' && !empty($settings['restly_blog_v2_post_cat'])){
            $p = new \WP_Query( array( 
                'posts_per_page' => 3,
                'post_type' => 'post',
                'order' => esc_attr($settings['restly_blog_two_item_order']), 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => $settings['restly_blog_v2_post_cat'],
                    )
                ),
            ));
        }else{
            $p = new \WP_Query( array( 
                'posts_per_page' => 3,
                'post_type' => 'post',
                'order' => esc_attr($settings['restly_blog_two_item_order']), 
            ));
        }

        if($settings['restly_blog_static_buttons_select'] == 'page' ){
			$link = get_page_link($settings['restly_blog_static_buttons_link']);
		}else{
			$link = $settings['restly_blog_static_buttons_extra'];
		}
        ob_start();
        ?>
        <div class="restly-blog-post-wrapper restly-blog-version-two">
            <div class="restly-blog-post-box">
                <div class="row ">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="restly-blog-v2-static-wrapper">
                            <<?php echo esc_attr($settings['restly_blog_static_stitle_tag']); ?> class="restly-blog-tatic-stitle"><?php echo esc_html($settings['restly_blog_static_stitle']); ?></<?php echo esc_attr($settings['restly_blog_static_stitle_tag']); ?>>
                            <<?php echo esc_attr($settings['restly_blog_static_title_tag']); ?> class="restly-blog-tatic-title"><?php echo esc_html($settings['restly_blog_static_title']); ?></<?php echo esc_attr($settings['restly_blog_static_title_tag']); ?>>
                            <div class="restly-blog-v2-sdec">
                                <?php echo wp_kses_post($settings['restly_blog_static_dec']); ?>
                            </div>
                            <div class="restly-button">
                                <a href="<?php echo esc_url($link); ?>" class="theme-btns" <?php if($settings['restly_blog_static_buttons_new_tab'] == 'yes' ) : ?> target="_blank" <?php endif; ?> <?php if($settings['restly_blog_static_buttons_nofollow'] == 'yes' ) : ?>  rel="nofollow" <?php endif; ?>><?php echo esc_html($settings['restly_blog_static_buttons_text']); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="restly-blog-v2-items">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 with-image">
                                    <?php $count = 0; while ( $p->have_posts() ): $p->the_post(); $count++; if($count == 1) : ?>
                                    <div class="restly-blog-post-item restly-blog-one">
                                        <?php if(has_post_thumbnail()) { ?>
                                        <div class="restly-blog-post-img">
                                            <?php the_post_thumbnail('restly-blog-full', array('class' => 'img-responsive')); ?>
                                        </div>
                                        <?php } ?>
                                        <div class="restly-blog-post-content">
                                            <div class="restly-blog-top-area">
                                                <div class="post-meta-item">
                                                    <ul>
                                                        <li><i class="fas fa-calendar-alt"></i><?php restly_posted_on(); ?></li>
                                                        <li class="post-cat"><i class="fas fa-tag"></i><?php the_category(','); ?></li>
                                                    </ul>
                                                </div>
                                                <div class="restly-blog-post-title">
                                                    <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $settings['restly_blog_two_item_title_lanth'] ); ?></a>
                                                </div>
                                                <div class="restly-post-dec">
                                                    <P><?php echo wp_trim_words( get_the_content(), $settings['restly_blog_two_item_dec_lanth'] ); ?></P>
                                                </div>
                                            </div>
                                            <div class="restly-blog-post-author">
                                                <?php echo get_avatar( get_the_author_meta('ID'), 60); esc_html_e('By','restlycore'); restly_posted_by(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; endwhile; wp_reset_query();?>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 no-image">
                                    <?php $count = 0; while ( $p->have_posts() ): $p->the_post(); $count++;if($count == 2 or $count == 3) : ?>
                                    <div class="restly-blog-post-item">
                                        <div class="restly-blog-post-content">
                                            <div class="restly-blog-top-area">
                                                <div class="post-meta-item">
                                                    <ul>
                                                        <li><i class="fas fa-calendar-alt"></i><?php restly_posted_on(); ?></li>
                                                        <li class="post-cat"><i class="fas fa-tag"></i><?php the_category(','); ?></li>
                                                    </ul>
                                                </div>
                                                <div class="restly-blog-post-title">
                                                    <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), $settings['restly_blog_two_item_title_lanth'] ); ?></a>
                                                </div>
                                                <div class="restly-post-dec">
                                                    <P><?php echo wp_trim_words( get_the_content(), $settings['restly_blog_two_item_dec_lanth'] ); ?></P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; endwhile; wp_reset_query();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_blog_two_Widget );