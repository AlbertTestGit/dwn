<?php namespace Elementor;

class restly_service_v4_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_service_v4';
    }

    public function get_title() {
        return esc_html__( 'Restly Service V4', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-site-identity';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'service_options',
            [
                'label' => esc_html__( 'Restly Service', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Smarter Insights' , 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon flaticon-art',
                    'library' => 'flaticon',
                ],
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'content',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Sed ut persiciatis undnatus error sit voluptatem accuatie laudantie totam aperiam' , 'restlycore' ),
                'show_label' => true,
                'dynamic' => [
                   'active' => true,
                ],
            ]
        );
        $repeater->add_control(
            'enable',
            [
                'label' => esc_html__( 'Enable Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'link',
            [
                'label' => __( 'Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'button_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
			'services',
			[
				'label' => esc_html__( 'Items', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => esc_html__( 'Smarter Insights', 'restlycore' ),
						'content' => esc_html__( 'Sed ut persiciatis undnatus error sit voluptatem accuatie laudantie totam aperiam', 'restlycore' ),
						'button_text' => esc_html__( 'Read More', 'restlycore' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);
        $this->add_control(
            'note',
            [
                'label' => __( 'Additional Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'container',
            [
                'label' => esc_html__( 'Enable Container', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'enable_shape',
            [
                'label' => esc_html__( 'Enable circle Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'shape_image',
            [
                'label' => __( 'Shape Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
			'desktop_col',
			[
				'label'   => __( 'Columns On Desktop', 'restlycore' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'col-xl-3',
				'options' => [
					'col-xl-12' => __( '1 Column', 'restlycore' ),
					'col-xl-6'  => __( '2 Column', 'restlycore' ),
					'col-xl-4'  => __( '3 Column', 'restlycore' ),
					'col-xl-3'  => __( '4 Column', 'restlycore' ),
				],
			]
		);

		$this->add_control(
			'iPad_pro_col',
			[
				'label'   => __( 'Columns On iPad Pro', 'restlycore' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'col-lg-4',
				'options' => [
					'col-lg-12' => __( '1 Column', 'restlycore' ),
					'col-lg-6'  => __( '2 Column', 'restlycore' ),
					'col-lg-4'  => __( '3 Column', 'restlycore' ),
					'col-lg-3'  => __( '4 Column', 'restlycore' ),
				],
			]
		);

		$this->add_control(
			'tab_col',
			[
				'label'   => __( 'Columns On Tablet', 'restlycore' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'col-md-6',
				'options' => [
					'col-md-12' => __( '1 Column', 'restlycore' ),
					'col-md-6'  => __( '2 Column', 'restlycore' ),
					'col-md-4'  => __( '3 Column', 'restlycore' ),
					'col-md-3'  => __( '4 Column', 'restlycore' ),
				],
			]
		);

        $this->add_control(
			'tab_col2',
			[
				'label'   => __( 'Columns On Small Tablet', 'restlycore' ),
				'type'    => Controls_Manager::SELECT,
				'default' => 'col-sm-6',
				'options' => [
					'col-sm-12' => __( '1 Column', 'restlycore' ),
					'col-sm-6'  => __( '2 Column', 'restlycore' ),
					'col-sm-4'  => __( '3 Column', 'restlycore' ),
					'col-sm-3'  => __( '4 Column', 'restlycore' ),
				],
			]
		);
        $this->add_control(
            'btn_icon',
            [
                'label' => esc_html__( 'Button Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'box_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'rezilla_class_box_aligment',
            [
                'label' => __( 'Alignment', 'restlycore' ),
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
                    'justify' => [
                        'title' => __( 'Justify', 'restlycore' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'box_tabs'
        );
        $this->start_controls_tab(
            'box_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal',
            ]
        );
        $this->add_responsive_control(
            'box_radius',
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
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'box_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} {{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} {{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal',
            ]
        );
        $this->add_responsive_control(
            'box_hradius',
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
                'selectors' => [
                    '{{WRAPPER}} {{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} {{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'content_css_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'content_tabs'
        );
        $this->start_controls_tab(
            'icon_tab',
            [
                'label' => __( 'Icon', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'icon_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .icon',
            ]
        );
        $this->add_responsive_control(
            'icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal .icon,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'title_tab',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .service-title',
            ]
        );
        $this->add_responsive_control(
            'title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .service-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal .service-title,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal .service-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .service-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .service-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'dec_tab',
            [
                'label' => __( 'Contnet', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal p',
            ]
        );
        $this->add_responsive_control(
            'dec_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'dec_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two:hover .service-normal p,{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two.active .service-normal p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'button_css_options',
            [
                'label' => esc_html__( 'Button', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn',
            ]
        );
        $this->add_responsive_control(
            'btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'btn_tabs'
        );
        $this->start_controls_tab(
            'btn_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'btn_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn',
            ]
        );
        $this->add_responsive_control(
            'btn_radius',
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
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'btn_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'btn_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'btn_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn:hover',
            ]
        );
        $this->add_responsive_control(
            'btn_hradius',
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
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'btn_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .service-normal .theme-btn:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'carcle_shape',
            [
                'label' => esc_html__( 'Circle Shape', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'enable_shape' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'border_color',
            [
                'label' => esc_html__( 'Border Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .circle-shapes-wrap .circle-shape' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'dot_color',
            [
                'label' => esc_html__( 'Dot Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .circle-shapes-wrap .circle-shape:before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'dot_2',
            [
                'label' => esc_html__( 'Dot Two Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .circle-shapes-wrap .circle-shape:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'dot_3',
            [
                'label' => esc_html__( 'Dot Three Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v4-wrapper .service-box.style-two .circle-shapes-wrap:before' => 'backgrond-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();

    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $column = $settings['desktop_col'] . ' ' . $settings['iPad_pro_col'] . ' ' . $settings['tab_col'] . ' ' . $settings['tab_col2'] ;
        ob_start();
        ?>
        <script>
			jQuery(document).ready(function($) {
				"use strict";
                $(".service-box.style-two").hover(function(){
                    $(".service-box.style-two").removeClass("active");
                    $(this).addClass("active");
                });
			});
		</script>
        <div class="restly-service-v4-wrapper">
            <div class="<?php echo esc_attr($settings['container'] == 'yes' ? 'container container-1250' : 'no-container'); ?>">
                <div class="row small-gap">
                    <?php $count = 0; foreach($settings['services'] as $service ) : $count++; ?>
                    <div class="<?php echo esc_attr($column); ?>">
                        <div class="service-box style-two <?php echo esc_attr( $count == 1 ? 'active' : ''); ?>">
                            <div class="service-normal">
                                <?php if(!empty($service['icon'])) ?>
                                <div class="icon">
                                    <?php \Elementor\Icons_Manager::render_icon( $service['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                </div>
                                <?php if(!empty($service['title'])) : ?>
                                <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($service['content'])){
                                    echo '<p>'.$service['content'].'</p>';
                                } ?>
                                <?php if($service['enable'] === 'yes' ) : 
                                 $url      = $service['link']['url'];
                                 $target   = $service['link']['is_external'] ? ' target="_blank"' : '';
                                 $nofollow = $service['link']['nofollow'] ? ' rel="nofollow"' : '';
                                ?>
                                <a href="<?php echo esc_url($url); ?>" <?php echo $target . $nofollow;?> class="theme-btn style-six"><?php echo esc_html($service['button_text']); ?> <?php \Elementor\Icons_Manager::render_icon( $settings['btn_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                <?php endif; ?>
                            </div>
                            <?php if($settings['enable_shape'] == 'yes' ) : ?>
                            <div class="circle-shapes-wrap">
                                <div class="circle-shape"></div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php if(!empty($settings['shape_image']['url'])) : ?>
        <style>
            .restly-service-v4-wrapper .service-box.style-two .service-normal:after{
                background-image: url(<?php echo esc_url( $settings['shape_image']['url'] ); ?>);
            }
        </style>
        <?php endif; ?>
        <?php
        echo ob_get_clean();
        
    }
}
Plugin::instance()->widgets_manager->register( new restly_service_v4_Widget );