<?php namespace Elementor;

class restly_pricing_v4_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_pricing_v4';
    }

    public function get_title() {
        return esc_html__( 'Restly Pricing V4', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-price-table';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'pricing_v4_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->start_controls_tabs(
            'pricing_v4_tabs'
        );
        $this->start_controls_tab(
            'pricing_v4_title_tab',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Basic Package', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'title_tag',
            [
                'label' => __('Title Tag', 'restlycore'),
                'type' => Controls_Manager::SELECT,
                'default' => 'h2',
                'options' => [
                    'h1' => __('H1', 'restlycore'),
                    'h2' => __('H2', 'restlycore'),
                    'h3' => __('H3', 'restlycore'),
                    'h4' => __('H4', 'restlycore'),
                    'h5' => __('H5', 'restlycore'),
                    'h6' => __('H6', 'restlycore'),
                    'span' => __('Span', 'restlycore'),
                    'p' => __('P', 'restlycore'),
                    'div' => __('Div', 'restlycore'),
                ],
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'pricing_v4_price',
            [
                'label' => __( 'Price', 'restlycore' ),
            ]
        );
        $this->add_control(
            'amount',
            [
                'label' => esc_html__( 'Amount', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '$10', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'amount_text',
            [
                'label' => esc_html__( 'price Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Monthly', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'pricing_v4_content',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        
        $repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'item', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Lifetime Update' , 'restlycore' ),
				'label_block' => true,
			]
		);
        $repeater->add_control(
            'item_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'bi bi-check2',
                    'library' => 'bootstrap-icons',
                ],
            ]
        );
        
        $repeater->add_responsive_control(
            'item_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'item_icon_hcolor',
            [
                'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .pricing-item-eight:hover {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
                ],
            ]
        );
		$this->add_control(
			'lists',
			[
				'label' => esc_html__( 'Content List', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'item' => esc_html__( 'Lifetime Update', 'restlycore' ),
						'item_icon' => 'bi bi-check2',
					],
                    [
						'item' => esc_html__( 'Dedicated Hosting', 'restlycore' ),
						'item_icon' => 'bi bi-check2',
					],
                    [
						'item' => esc_html__( 'Supports 24/7', 'restlycore' ),
						'item_icon' => 'bi bi-check2',
					],
                    [
						'item' => esc_html__( '3 Unique Demos', 'restlycore' ),
						'item_icon' => 'bi bi-check2',
					]
				],
				'title_field' => '{{{ item }}}',
			]
		);
        $this->add_control(
            'list_icon_position',
            [
                'label' => __( 'Icon Position', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'pricing_v4_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_control(
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
        $this->add_control(
            'btn_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Choose Plan', 'restlycore' ),
                    'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'btn_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-long-arrow-alt-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'btn_icon_position',
            [
                'label' => __( 'Alignment', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'right',
                'toggle' => true,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'pricing_v4_box_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-item-eight' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .pricing-item-eight' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'box_tabs'
        );
        $this->start_controls_tab(
            'box_tab_normal',
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
                'selector' => '{{WRAPPER}} .pricing-item-eight',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .pricing-item-eight',
            ]
        );
        $this->add_responsive_control(
            'box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-item-eight' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .pricing-item-eight',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'box_tab_hover',
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
                'selector' => '{{WRAPPER}} .pricing-item-eight:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .pricing-item-eight:hover',
            ]
        );
        $this->add_responsive_control(
            'box_hradius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-item-eight:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .pricing-item-eight:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'pricing_v4_content_style',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'pricing_content_css_tabs'
        );
            $this->start_controls_tab(
                'pricing_title_css',
                [
                    'label' => __( 'Title', 'restlycore' ),
                ]
            );
                $this->add_responsive_control(
                    'title_align',
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
                            '{{WRAPPER}} .pricing-title' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'title_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .pricing-title',
                    ]
                );
                $this->add_responsive_control(
                    'title_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'title_hcolor',
                    [
                        'label' => esc_html__( 'hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .pricing-item-eight:hover .pricing-title' => 'color: {{VALUE}}',
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
                            '{{WRAPPER}} .pricing-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                            '{{WRAPPER}} .pricing-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'pricing_icon_css',
                [
                    'label' => __( 'icon', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'title_icon_align',
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
                        '{{WRAPPER}} .title-icon' => 'text-align: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_icon_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .title-icon',
                ]
            );
            $this->add_responsive_control(
                'title_icon_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .title-icon' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'title_icon_hcolor',
                [
                    'label' => esc_html__( 'hover Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing-item-eight:hover .title-icon' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'title_icon_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .title-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'title_icon_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .title-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->start_controls_tab(
                'pricing_price_css',
                [
                    'label' => __( 'Price', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'price_alignment',
                [
                    'label' => __( 'Alignment', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'options' => [
                        'flex-start' => [
                            'title' => __( 'Left', 'restlycore' ),
                            'icon' => 'eicon-text-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'restlycore' ),
                            'icon' => 'eicon-text-align-center',
                        ],
                        'flex-end' => [
                            'title' => __( 'Right', 'restlycore' ),
                            'icon' => 'eicon-text-align-right',
                        ],
                    ],
                    'default' => 'center',
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} .price' => 'justify-content: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'price_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .price .span',
                ]
            );
            $this->add_responsive_control(
                'price_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .price .span' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'price_hcolor',
                [
                    'label' => esc_html__( 'hover Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing-item-eight:hover .price .span' => 'color: {{VALUE}}',
                    ],
                ]
            );
            
            $this->add_responsive_control(
                'price_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'price_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->add_control(
                'pricing_text_note',
                [
                    'label' => __( 'Price Text', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->end_controls_tab();

            $this->start_controls_tab(
                'pricing_list_css',
                [
                    'label' => __( 'list', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'list_alignment',
                [
                    'label' => __( 'Alignment', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::CHOOSE,
                    'options' => [
                        'flex-start' => [
                            'title' => __( 'Left', 'restlycore' ),
                            'icon' => 'eicon-text-align-left',
                        ],
                        'center' => [
                            'title' => __( 'Center', 'restlycore' ),
                            'icon' => 'eicon-text-align-center',
                        ],
                        'flex-end' => [
                            'title' => __( 'Right', 'restlycore' ),
                            'icon' => 'eicon-text-align-right',
                        ],
                    ],
                    'default' => 'flex-start',
                    'toggle' => true,
                    'selectors' => [
                        '{{WRAPPER}} ul.list-style-three li' => 'justify-content: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'list_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .pricing-item-eight .list-style-three li',
                ]
            );
            $this->add_responsive_control(
                'list_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing-item-eight .list-style-three' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'list_hcolor',
                [
                    'label' => esc_html__( 'hover Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .pricing-item-eight:hover .list-style-three' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'list_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} ul.list-style-three li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'list_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} ul.list-style-three li ' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'pricing_v4_button_css',
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
                'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six',
            ]
        );
        $this->add_responsive_control(
            'btn_align',
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
                    '{{WRAPPER}} .pricing-item-eight .pricing-buttons' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .pricing-item-eight .pricing-buttons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .pricing-item-eight .pricing-buttons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'btn_tabs'
        );
            $this->start_controls_tab(
                'btn_tab_css_normal',
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
                        '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'btn_bg',
                    'label' => esc_html__( 'Background', 'restlycore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'btn_border',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six',
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
                        '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'btn_shadow',
                    'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six',
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'btn_tab_css_hover',
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
                        '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'btn_hbg',
                    'label' => esc_html__( 'Background', 'restlycore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six:hover',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'btn_hborder',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six:hover',
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
                        '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'btn_hshadow',
                    'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .pricing-item-eight .theme-btns.style-six:hover',
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $settings['link']['url'] ) ) {
			$this->add_link_attributes( 'link', $settings['link'] );
		}
        ob_start();
        ?>
        <div class="restly-pricing-v4-wrapper">
            <div class="pricing-item-eight">
                <?php if($settings['title']) : ?>
                    <<?php echo esc_attr($settings['title_tag']); ?> class="pricing-title"><?php echo esc_html($settings['title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
                <?php endif; ?>
                <?php if(!empty($settings['icon'])) : ?>
                    <div class="title-icon">
                        <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </div>
                <?php endif; ?>
                <span class="price"><span><?php echo esc_html($settings['amount']); ?> /</span><?php echo esc_html($settings['amount_text']); ?></span>
                <?php if( $settings[ 'lists' ] ) : ?>
                    <ul class="list-style-three">
                        <?php foreach($settings['lists'] as $item ) : ?>
                        <li>
                            <?php if($settings['list_icon_position'] == 'left') : ?>
                                <div class="icon elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                    <?php \Elementor\Icons_Manager::render_icon( $item['item_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                </div>
                            <?php endif; ?>
                            <?php echo wp_kses_post($item['item']) ?>
                            <?php if($settings['list_icon_position'] == 'right') : ?>
                                <div class="icon elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                                    <?php \Elementor\Icons_Manager::render_icon( $item['item_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                </div>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                
                <div class="pricing-buttons">
                    <a class="theme-btns style-six" <?php echo $this->get_render_attribute_string( 'link' ); ?>>
                        <?php if($settings['btn_icon_position'] == 'left' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['btn_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php endif; ?>
                        <?php echo esc_html($settings['btn_text']); ?> 
                        <?php if($settings['btn_icon_position'] == 'right' ) : ?>
                            <?php \Elementor\Icons_Manager::render_icon( $settings['btn_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_pricing_v4_Widget );