<?php namespace Elementor;

class restly_nft_seller_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_nft_seller';
    }

    public function get_title() {
        return esc_html__( 'Restly NFT Top Seller', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-site-title';
    }

    public function get_categories() {
        return ['restlynft'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_nft_seller_options',
            [
                'label' => esc_html__( 'Restly NFT Top Seller', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_nft_seller_img',
            [
                'label' => __( 'Upload Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'restly_nft_seller_title',
            [
                'label' => esc_html__( 'Name', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Michelle Obama', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'restly_nft_seller_link',
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
            'restly_nft_seller_verify',
            [
                'label' => esc_html__( 'Enable verified Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'restly_nft_seller_count',
            [
                'label' => esc_html__( 'Enable Count', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'restly_nft_seller_items',
            [
                'label' => esc_html__( 'Item Number', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '115', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_nft_sellers',
            [
                'label' => esc_html__( 'Slider List', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_nft_seller_title' => esc_html__( 'Michelle Obama', 'restlycore' ),
                        'restly_nft_seller_items' => esc_html__( '115', 'restlycore' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_seller_advance',
            [
                'label' => esc_html__( 'Settings', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_nft_seller_html',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h5',
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
            'restly_nft_seller_slide_enable',
            [
                'label' => esc_html__( 'Enable Slide', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_nft_sellter_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_nft_seller_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_sellter_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'restly_nft_seller_slide_enable' => 'yes',
                    'restly_nft_sellter_loop' => 'yes',

                ),
            ]
        );
        $this->add_control(
            'restly_nft_sellter_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_nft_seller_slide_enable' => 'yes',
                    'restly_nft_sellter_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_sellter_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'restly_nft_sellter_aloop' => 'yes',
                    'restly_nft_sellter_loop'  => 'yes',
                    'restly_nft_seller_slide_enable' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'restly_nft_sellter_dot',
            [
                'label'        => esc_html__( 'Enable Dots ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'restly_nft_seller_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_sellter_column',
            [
                'label' => esc_html__( 'Column', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '12'  => esc_html__( 'Col 1', 'restlycore' ),
                    '6'  => esc_html__( 'Col 2', 'restlycore' ),
                    '4'  => esc_html__( 'Col 3', 'restlycore' ),
                    '3'  => esc_html__( 'Col 4', 'restlycore' ),
                    '2'  => esc_html__( 'Col 6', 'restlycore' ),
                ],
                'condition'    => [
                    'restly_nft_seller_slide_enable!' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_seller_css_box',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_seller_box_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_seller_box_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_box_aligment',
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
                            'right' => [
                                'title' => __( 'Right', 'restlycore' ),
                                'icon' => 'eicon-text-align-right',
                            ],
                        ],
                        'default' => 'center',
                        'toggle' => true,
                        'selectors' => [
                            '{{WRAPPER}} .seller-item' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_seller_box_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .seller-item',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_seller_box_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_seller_box_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_box_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_box_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_box_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_seller_box_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_seller_box_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .seller-item:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_seller_box_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_seller_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_seller_css_img',
            [
                'label' => esc_html__( 'Image', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_seller_img_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_seller_img_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_seller_img_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .seller-item .image img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_img_with',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 50,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item .image img' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_img_height',
                    [
                        'label' => esc_html__( 'Height', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 100,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item .image img' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_seller_img_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item .image img',
                    ]
                );
                $this->add_responsive_control(
                    'mrestly_nft_seller_img_with_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item .image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_seller_img_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item .image img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_img_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item .image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_seller_img_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item .image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_control(
                    'restly_nft_seller_note',
                    [
                        'label' => __( 'Verified Icon', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'title_color',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .seller-item .image .check' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_seller_verifid_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => ['gradient'],
                        'selector' => '{{WRAPPER}} .seller-item .image .check',
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_seller_img_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_seller_img_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .seller-item:hover .image img',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_seller_img_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item:hover .image img',
                    ]
                );
                $this->add_responsive_control(
                    'mrestly_nft_seller_img_with_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .seller-item:hover .image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_seller_img_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .seller-item:hover .image img',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_seller_css_content',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_nft_seller_csscontent_tabs'
        );
        $this->start_controls_tab(
            'restly_nft_seller_css_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_seller_title_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => [
                    '{{WRAPPER}} .nft-seller-title',
                ],
                'selector' => '{{WRAPPER}} .nft-seller-title a',
                
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_title_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-seller-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .nft-seller-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_title_css_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item:hover .nft-seller-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .seller-item:hover .nft-seller-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_title_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .nft-seller-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_title_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .nft-seller-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_nft_seller_css_tabs_item',
            [
                'label' => __( 'Items', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_seller_item_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .seller-item .items',
                
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_item_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item .items' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_item_css_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item:hover .items' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_item_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seller-item .items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_item_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seller-item .items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_nft_seller_css_tabs_number',
            [
                'label' => __( 'Number', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_seller_nuner_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .seller-item .number',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_number_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .seller-item .number' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .seller-item .number' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item .number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item:hover .number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_bg',
            [
                'label' => esc_html__( 'Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item .number' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_hbg',
            [
                'label' => esc_html__( 'Hover Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .seller-item:hover .number' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seller-item .number' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_nuner_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .seller-item .number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_seller_css_dots',
            [
                'label' => esc_html__( 'Dots', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_dot_aligment',
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
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_dot_acolor',
            [
                'label' => esc_html__( 'Active Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_dot_color',
            [
                'label' => esc_html__( 'Normal Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_dot_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_seller_dot_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $uniqe = rand(1241, 3256);
        if($settings['restly_nft_seller_slide_enable'] == 'yes' ){
            echo '
            <script>
                jQuery(document).ready(function($) {
                    "use strict";
                    if ($("#sellers-'.$uniqe.'").length) {
                        $("#sellers-'.$uniqe.'").slick({
                            rtl: '.json_encode( is_rtl() == 'yes' ? true : false).',
                            dots: '.json_encode($settings['restly_nft_sellter_dot'] == 'yes' ? true : false).',
                            infinite: '.json_encode($settings['restly_nft_sellter_loop'] == 'yes' ? true : false).',
                            autoplay: '.json_encode($settings['restly_nft_sellter_aloop'] == 'yes' ? true : false).',
                            autoplaySpeed: '.json_encode($settings['restly_nft_sellter_aspeed']).',
                            arrows: false,
                            centerMode: false,
                            speed: '.json_encode($settings['restly_nft_sellter_speed']).',
                            slidesToShow: 5,
                            slidesToScroll: 2,
                            responsive: [
                                {
                                    breakpoint: 1199,
                                    settings: {
                                        slidesToShow: 4,
                                    }
                                },
                                {
                                    breakpoint: 991,
                                    settings: {
                                        slidesToShow: 3,
                                    }
                                },
                                {
                                    breakpoint: 776,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 1,
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1,
                                    }
                                }
                            ]
                        });
                    }
                });
            </script>';
            $row = 'sellers-active no-row';
            $col = 'no-col';
        }else{
            $row = 'row';
            $col = 'col-xl-'.$settings['restly_nft_sellter_column'].' col-lg-4 col-sm-6';
        }
        ob_start();
        ?>
        <div class="restly-section-sellers-wrapper">
            <div class="sellers-section">
                <div class="<?php echo esc_attr($row); ?>" id="sellers-<?php echo esc_attr($uniqe); ?>">
                    <?php $count = 0; foreach($settings['restly_nft_sellers'] as $seller ) : $count++; 
                    $this->add_render_attribute( 'restly_nft_seller_img', 'src', $seller['restly_nft_seller_img']['url'] );
                    $this->add_render_attribute( 'restly_nft_seller_img', 'alt', \Elementor\Control_Media::get_image_alt( $seller['restly_nft_seller_img'] ) );
                    $this->add_render_attribute( 'restly_nft_seller_img', 'title', \Elementor\Control_Media::get_image_title( $seller['restly_nft_seller_img'] ) );
                    $this->add_render_attribute( 'restly_nft_seller_img', 'class', 'restly-nft-seller' );
                    if ( ! empty( $seller['restly_nft_seller_link']['url'] ) ) {
                        $this->add_link_attributes( 'restly_nft_seller_link', $seller['restly_nft_seller_link'] );
                    }
                    ?>
                    <div class="<?php echo esc_attr($col); ?>">
                        <div class="seller-item">
                        <?php if($seller['restly_nft_seller_count'] == 'yes' ){
                            echo ' <span class="number">'.esc_html($count).'</span>';
                        } ?>
                        <div class="image">
                            <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $seller, 'full', 'restly_nft_seller_img' ); ?>
                            <?php if($seller['restly_nft_seller_verify'] == 'yes' ){
                            echo '<span class="check"><i class="fas fa-check"></i></span>';
                            } ?>
                        </div>
                        <<?php echo esc_attr($settings['restly_nft_seller_html']); ?> class="nft-seller-title">
                            <a <?php echo $this->get_render_attribute_string( 'restly_nft_seller_link' ); ?>><?php echo esc_html($seller['restly_nft_seller_title']); ?></a>
                        </<?php echo esc_attr($settings['restly_nft_seller_html']); ?>>
                        <?php if(!empty($seller['restly_nft_seller_items'])){
                            echo '<span class="items">'.esc_html($seller['restly_nft_seller_items']).'</span>';
                        } ?>
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
Plugin::instance()->widgets_manager->register( new restly_nft_seller_Widget );