<?php namespace Elementor;

class restly_service_sliders_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_service_slider';
    }

    public function get_title() {
        return esc_html__( 'Restly Service Slider', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-testimonial-carousel';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_service_slider_options',
            [
                'label' => esc_html__( 'Restly Service Slider', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_service_slider_icon_enable',
            [
                'label' => esc_html__( 'Enable Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
			'restly_service_slider_icon_choose',
			[
				'label' => esc_html__( 'Choose Icon Option', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'icon' => [
						'title' => esc_html__( 'Icon', 'restlycore' ),
						'icon' => 'eicon-info-circle',
					],
					'img' => [
						'title' => esc_html__( 'Image', 'restlycore' ),
						'icon' => 'eicon-image-bold',
					],
				],
				'default' => 'icon',
				'toggle' => true,
                'condition' => [
                    'restly_service_slider_icon_enable' => 'yes',
                ],
			]
		);
        $repeater->add_control(
            'restly_service_slider_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_service_slider_icon_choose' => 'icon',
                    'restly_service_slider_icon_enable' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
            'restly_service_slider_icon_img',
            [
                'label' => __( 'Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_service_slider_icon_choose' => 'img',
                    'restly_service_slider_icon_enable' => 'yes',
                ],
            ]
        );
		$repeater->add_control(
			'restly_service_slider_title', [
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Threat intelligence', 'restlycore' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'restly_service_slider_dec', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Praesent eget volutpat vel tellus.quis it for neque blandit elit', 'restlycore' ),
				'show_label' => false,
			]
		);
        $repeater->add_responsive_control(
            'restly_service_slider_btn_select',
            [
                'label' => esc_html__( 'Select Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'custom',
                'options' => [
                    'custom'  => esc_html__( 'Custom Link', 'restlycore' ),
                    'page' => esc_html__( 'Page', 'restlycore' ),
                ],
            ]
        );
        $repeater->add_control(
			'restly_service_slider_btn_custom',
			[
				'label' => esc_html__( 'Custom Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_service_slider_btn_select' => 'custom',
				],
				'placeholder' => esc_html__( 'Add Custom Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'restly_service_slider_btn_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_service_slider_btn_select' => 'page',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_service_slider_list',
			[
				'label' => esc_html__( 'Service List', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'restly_service_slider_title' => esc_html__( 'Threat intelligence', 'restlycore' ),
						'restly_service_slider_dec' => esc_html__( 'Praesent eget volutpat vel tellus.quis it for neque blandit elit', 'restlycore' ),
					],
				],
				'restly_service_slider_title' => '{{{ list_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_service_slider_settings',
            [
                'label' => esc_html__( 'Service Slider Settings', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
			'restly_service_slider_title_tab',
			[
				'label' => esc_html__( 'Title HTML Tag', 'restlycore' ),
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
            'restly_service_slider_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_slider_btn_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
			'restly_service_slider_btn_new',
			[
				'label' => esc_html__( 'Open New Tab', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'restlycore' ),
				'label_off' => esc_html__( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $this->add_control(
			'restly_service_slider_btn_nofollow',
			[
				'label' => esc_html__( 'No Folow', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'restlycore' ),
				'label_off' => esc_html__( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $this->add_control(
            'service_slider_note',
            [
                'label' => __( 'Slide Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'restly_service_slider_dot',
            [
                'label' => esc_html__( 'Enable Dots', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_service_slider_aplay',
            [
                'label' => esc_html__( 'Enable Auto Play', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
       
        $this->add_control(
            'restly_service_slider_show_item',
            [
                'label' => esc_html__( 'Display Item', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 6,
                'step' => 1,
                'default' => 4,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_seslider_box_css_options',
            [
                'label' => esc_html__( 'Box Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_box_align',
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
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'restly_sslider_box_tabs'
            );
                $this->start_controls_tab(
                    'restly_sslider_box_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_sslider_box_nbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-item-eight',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_sslider_box_nshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .service-item-eight',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_sslider_box_nborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .service-item-eight',
                    ]
                );
                $this->add_responsive_control(
                    'restly_sslider_box_nradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-item-eight' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_sslider_box_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_sslider_box_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .service-item-eight:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_sslider_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .service-item-eight:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_sslider_box_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .service-item-eight:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_sslider_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .service-item-eight:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_seslider_icon_css_options',
            [
                'label' => esc_html__( 'Icon Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_box_width_css',
            [
                'label' => esc_html__( 'Box Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 200,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_box_height_css',
            [
                'label' => esc_html__( 'Box Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 200,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_margin_css',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_padding_css',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_sslider_icon_tabs'
        );
        $this->start_controls_tab(
            'restly_sslider_tabs_icon',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_icon_c',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_icon_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_isize',
            [
                'label' => esc_html__( 'icon Size for image', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_seslider_icon_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight .icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_seslider_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight .icon',
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_seslider_icon_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight .icon',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_sslider_icon_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_icon_hc',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight:hover .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_icon_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight:hover .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_seslider_icon_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight:hover .icon',
            ]
        );
        $this->add_responsive_control(
            'restly_seslider_icon_hradius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight:hover .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_seslider_icon_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight:hover .icon',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_seslider_content_css_options',
            [
                'label' => esc_html__( 'Content Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_sslider_content_css_tabs'
        );
        $this->start_controls_tab(
            'restly_sslider_content_css_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_sslider_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-slider-title',
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-slider-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_title_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight:hover .service-slider-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-slider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-slider-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_sslider_content_css_tabs_dec',
            [
                'label' => __( 'Dec', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_sslider_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight .sslier-dec',
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_dec_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight.sslier-dec' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_dec_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight:hover .sslier-dec' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .sslier-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .sslier-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_sslider_content_css_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_sslider_btn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-item-eight .learn-more',
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_btn_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .learn-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_btn_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight:hover .learn-more' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .learn-more' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .learn-more' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_btn_ic',
            [
                'label' => esc_html__( 'icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-item-eight .learn-more i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_sslider_btn_hic',
            [
                'label' => esc_html__( 'icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ..service-item-eight:hover .learn-more i' => 'color: {{VALUE}}',
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
        $unique = rand(1241, 3256);
        ob_start();
        ?>
        <script>
			jQuery(document).ready(function($) {
				"use strict";
                if ($('#service-slider-<?php echo esc_attr($unique); ?>').length) {
                    $('#service-slider-<?php echo esc_attr($unique); ?>').slick({
                        dots: <?php echo json_encode($settings['restly_service_slider_dot'] == 'yes' ? true : false ); ?>,
                        infinite: true,
                        autoplay: <?php echo json_encode($settings['restly_service_slider_aplay'] == 'yes' ? true : false ); ?>,
                        autoplaySpeed: 5000,
                        arrows: false,
                        speed: 1000,
                        slidesToShow: <?php echo json_encode($settings['restly_service_slider_show_item']); ?>,
                        slidesToScroll: 2,
                        responsive: [
                            {
                                breakpoint: 1200,
                                settings: {
                                    slidesToShow: 3,
                                }
                            },
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 575,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });
                } 
			});
		</script>
        <div class="service-slider-version">
            <div class="container">
                <div class="service-slider-wrap" id="service-slider-<?php echo esc_attr($unique);?>">
                    <?php foreach($settings['restly_service_slider_list'] as $sslider) :
                    if($sslider['restly_service_slider_btn_select'] == 'page' ){
                        $link = get_page_link($sslider['restly_service_slider_btn_link']);
                    }else{
                        $link = $sslider['restly_service_slider_btn_custom'];
                    } 
                    ?>
                    <div class="service-single-items">
                        <div class="service-item-eight">
                            <?php if($sslider['restly_service_slider_icon_enable'] == 'yes' ) : ?>
                            <div class="icon">
                                <?php if($sslider['restly_service_slider_icon_choose'] == 'img'){
                                    echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $sslider, 'thumbnail', 'restly_service_slider_icon_img' );
                                }else{
                                    \Elementor\Icons_Manager::render_icon( $sslider['restly_service_slider_icon'], [ 'aria-hidden' => 'true' ] );
                                }?>
                            </div>
                            <?php endif; ?>
                            <<?php echo esc_attr($settings['restly_service_slider_title_tab']); ?> class="service-slider-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($sslider['restly_service_slider_title']); ?></a></<?php echo esc_attr($settings['restly_service_slider_title_tab']); ?>>
                            <div class="sslier-dec">
                                <?php echo wp_kses_post( $sslider['restly_service_slider_dec'] ); ?>
                            </div>
                            <a href="<?php echo esc_url($link); ?>" class="learn-more"><?php echo esc_html($settings['restly_service_slider_btn_text']); ?> <?php \Elementor\Icons_Manager::render_icon( $settings['restly_service_slider_btn_icon']); ?></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_service_sliders_Widget );