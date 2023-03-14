<?php namespace Elementor;

class restly_pricing_table_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_pricing_table';
    }

    public function get_title() {
        return esc_html__( 'Restly Pricing Table V1', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-price-table';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'restly_pricing_table_style_options',
            [
                'label' => esc_html__( 'Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
        'restly_pricing_style',
            [
                'label' => esc_html__( 'Select Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'One', 'restlycore' ),
                    'two' => esc_html__( 'Two', 'restlycore' ),
                    'three' => esc_html__( 'Three', 'restlycore' ),
                ],
            ]
        );
        $this->end_controls_section();
        //Content tab start
        $this->start_controls_section(
            'restly_pricing_table_options',
            [
                'label' => esc_html__( 'Pricing Header', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_pricing_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Standard', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_pricing_title_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
            'restly_pricing_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_pricing_style' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_pricing_label',
            [
                'label' => esc_html__( 'Label', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'popular', 'restlycore' ),
                'condition' => [
                    'restly_pricing_style' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_pricing_price',
            [
                'label' => esc_html__( 'Price', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '59.99', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_pricing_curency',
            [
                'label' => esc_html__( 'Currency', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '$', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_pricing_time',
            [
                'label' => esc_html__( 'Time', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Per Month', 'restlycore' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_pricing_feature_options',
            [
                'label' => esc_html__( 'Pricing Feature', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_pricing_feature',
            [
                'label' => esc_html__( 'Pricing Feature', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '<ul>
                    <li>Limited install</li>
                    <li>Unlimited Download</li>
                    <li>Free One Year Support</li>
                    <li>Free 1 5 GB Linux Hosting</li>
                </ul>', 'restlycore' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_pricing_footer_options',
            [
                'label' => esc_html__( 'Pricing Footer', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_prcing_btn_link',
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
            'restly_prcing_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Choose Plan', 'restlycore' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_pricing_CSS_box_options',
            [
                'label' => esc_html__( 'Pricing Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_pricing_CSS_box_align',
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
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-inner' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_box2_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-two .restly-pricing-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_pricing_CSS_box_tabs'
        );
        $this->start_controls_tab(
            'restly_pricing_box_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_pricing_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-pricing-inner',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-inner',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_box_radius',
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
                    '{{WRAPPER}} .restly-pricing-inner' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-inner',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_pricing_CSS_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-pricing-inner:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_CSS_box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-inne:hoverr',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_box_hradius',
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
                    '{{WRAPPER}} .restly-pricing-inner:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_CSS_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-inner:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_pricing_CSS_hbox_options',
            [
                'label' => esc_html__( 'Pricing Header Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_pricing_style!' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox2_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two .restly-pricing-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_pricing_header_tabs'
        );
        $this->start_controls_tab(
            'restly_pricing_hbox_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_pricing_CSS_hbox_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-pricing-header',
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox2_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two .restly-pricing-header:after' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_CSS_hbox_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-header',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox_radius',
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
                    '{{WRAPPER}} .restly-pricing-header' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_CSS_hbox_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-header',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_hbox_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_pricing_CSS_hbox_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-pricing-inner:hover .restly-pricing-header',
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox2_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-two:hover .restly-pricing-header:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_CSS_hbox_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-inner:hover .restly-pricing-header',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_CSS_hbox_hradius',
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
                    '{{WRAPPER}} .restly-pricing-two .restly-pricing-inner:hover .restly-pricing-header' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_CSS_hbox_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-inner:hover .restly-pricing-header',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_pricing_CSS_header_item_options',
            [
                'label' => esc_html__( 'Pricing Header Item', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_pricing_header_itabs'
        );
        $this->start_controls_tab(
            'restly_pricing_header_title_tab',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => ['one','three'],
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_title2_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two .restly-pricing-header .restly-pricing-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_title_hcolor',
            [
                'label' => esc_html__( 'Title Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-inner:hover .restly-pricing-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_title2_hcolor',
            [
                'label' => esc_html__( 'Title Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two:hover .restly-pricing-header .restly-pricing-title' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_header_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-title',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_header_price_tab',
            [
                'label' => __( 'Price', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_price_color',
            [
                'label' => esc_html__( 'Price Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h2.restly-pricing-price' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => ['one','three'],
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_price_hcolor',
            [
                'label' => esc_html__( 'Title Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-inner:hover h2.restly-pricing-price' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_price2_color',
            [
                'label' => esc_html__( 'Price Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}}.restly-pricing-two .restly-pricing-header .restly-pricing-price' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_price2_hcolor',
            [
                'label' => esc_html__( 'Title Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two:hover .restly-pricing-header .restly-pricing-price' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_header_price_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} h2.restly-pricing-price',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_price_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h2.restly-pricing-price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_price_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h2.restly-pricing-price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_pricing_currency_note',
            [
                'label' => __( 'Currency CSS Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_currency_color',
            [
                'label' => esc_html__( 'Price Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h2.restly-pricing-price label' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => ['one','three'],
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_currency2_color',
            [
                'label' => esc_html__( 'Price Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two h2.restly-pricing-price label' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_currency2_hcolor',
            [
                'label' => esc_html__( 'Currency Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two .restly-pricing-inner:hover h2.restly-pricing-price label' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_header_currency_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} h2.restly-pricing-price label',
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'restly_pricing_header_time_tab',
            [
                'label' => __( 'Time', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_time_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h6.restly-pricing-time' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => ['one','three'],
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_time_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-inner:hover h6.restly-pricing-time' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' =>'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_time2_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two .restly-pricing-header .restly-pricing-time' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_time2_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-two:hover .restly-pricing-header .restly-pricing-time' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_pricing_style' => 'two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_header_time_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} h6.restly-pricing-time',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_time_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h6.restly-pricing-time' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_time_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h6.restly-pricing-time' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_pricing_header_icon_tab',
            [
                'label' => __( 'Icon', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three .pricing-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_icon_size',
            [
                'label' => esc_html__( 'Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three .pricing-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_icon_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three .pricing-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three .pricing-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_pricing_header_label_tab',
            [
                'label' => __( 'Label', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_label_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three>span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_header_label_bcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three>span' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_header_label_size',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-warpper.restly-pricing-three>span' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_price_btn_CSS_options',
            [
                'label' => esc_html__( 'Pricing Footer', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_price_btn_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_price_btn_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '20',
                    'right' => '50',
                    'bottom' => '20',
                    'left' => '50',
                    'isLinked' => true
                    ],
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_pricing_btn_tabs'
        );
        $this->start_controls_tab(
            'restly_pricing_btn_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_btn_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_btn_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_btn_Css_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-price-footer a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_btn_Css_nradisu',
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
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_btn_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-price-footer a.theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_btn_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_btn_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_btn_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_btn_Css_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-price-footer a.theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_btn_Css_hradisu',
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
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-price-footer a.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_btn_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-price-footer a.theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $target = $settings['restly_prcing_btn_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['restly_prcing_btn_link']['nofollow'] ? ' rel="nofollow"' : '';
        if($settings['restly_pricing_style'] == 'one'){
            $restly_pricing_style = 'restly-pricing-one';
        }elseif($settings['restly_pricing_style'] == 'two'){
            $restly_pricing_style = 'restly-pricing-two';
        }else{
            $restly_pricing_style = 'restly-pricing-three';
        }
        ob_start();
        ?>
        <div class="restly-pricing-warpper <?php echo esc_attr($restly_pricing_style); ?>">
            <?php if($settings['restly_pricing_style'] == 'three' && !empty($settings['restly_pricing_label'])){
                echo '<span>'.esc_html($settings['restly_pricing_label']).'</span>';
            } ?>
            <div class="restly-pricing-inner">
                <div class="restly-pricing-header">
                    <<?php echo esc_attr($settings['restly_pricing_title_tag']); ?> class="restly-pricing-title"><?php echo esc_html($settings['restly_pricing_title']); ?></<?php echo esc_attr($settings['restly_pricing_title_tag']); ?>>
                    <?php if($settings['restly_pricing_style'] == 'three' ) : ?>
                    <div class="pricing-icon">
                        <i class="<?php echo esc_attr($settings['restly_pricing_icon']['value']); ?>"></i>
                    </div>
                    <?php endif; ?>
                    <h2 class="restly-pricing-price"><label><?php echo esc_html($settings['restly_pricing_curency']); ?></label><?php echo esc_html($settings['restly_pricing_price']); ?></h2>
                    <h6 class="restly-pricing-time"><?php echo esc_html($settings['restly_pricing_time']); ?></h6>
                </div>
                <div class="restly-price-feature">
                    <?php echo wp_kses_post($settings['restly_pricing_feature']); ?>
                </div>
                <div class="restly-price-footer">
                    <?php echo '<a class="theme-btns" href="' . esc_url($settings['restly_prcing_btn_link']['url']) . '"' . $target . $nofollow . '>'.esc_html($settings['restly_prcing_btn_text']).'</a>'; ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_pricing_table_Widget );