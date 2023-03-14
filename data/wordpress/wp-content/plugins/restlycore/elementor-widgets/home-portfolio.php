<?php namespace Elementor;

class  restly_portfolio_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_portfolio';
    }

    public function get_title() {
        return esc_html__( 'Restly Portfolio', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-archive-posts';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {
        //Content tab start
        $this->start_controls_section(
            'restly_portfolio_options',
            [
                'label' => esc_html__( 'Restly Portfolio', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_portfolio_style',
            [
                'label' => esc_html__( 'Select Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'    =>   esc_html__( 'Style One', 'restlycore' ),
                    'two'    =>   esc_html__( 'Style Two', 'restlycore' ),
                    'three'  => esc_html__( 'Style Three', 'restlycore' ),
                    'four'   =>  esc_html__( 'Style Four', 'restlycore' ),
                    'five'   =>  esc_html__( 'Style Five', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_protfilio_by_cat_enable',
            [
                'label' => esc_html__( 'Show By Category', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'restly_portfolio_by_cat',
            [
                'label' => esc_html__( 'Select Category', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => restly_portfolio_cat_id(),
                'condition' => [
                    'restly_protfilio_by_cat_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
        'restly_protfolio_order_by',
        [
            'label' => esc_html__( 'Order By', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'ASC',
            'options' => [
                'ASC'  => esc_html__( 'ASC', 'restlycore' ),
                'DESC'  => esc_html__( 'DESC', 'restlycore' ),
            ],
        ]
        );
        $this->add_control(
            'restly_portfolo_one_spacing',
            [
                'label' => esc_html__( 'Select Item Spacing', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '2',
                'options' => [
                    '1'  => esc_html__( '1', 'restlycore' ),
                    '2'  => esc_html__( '2', 'restlycore' ),
                    '3'  => esc_html__( '3', 'restlycore' ),
                    '4'  => esc_html__( '4', 'restlycore' ),
                    '5'  => esc_html__( '5', 'restlycore' ),
                ],
                'condition' => [
                    'restly_portfolio_style' => ['one','four'],
                ],
            ]
        );
        $this->add_control(
            'restly_portfolo_one_column',
            [
                'label' => esc_html__( 'Select Item Column', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '12'  => esc_html__( '1', 'restlycore' ),
                    '6'  => esc_html__( '2', 'restlycore' ),
                    '4'  => esc_html__( '3', 'restlycore' ),
                    '3'  => esc_html__( '4', 'restlycore' ),
                ],
                'condition' => [
                    'restly_portfolio_style!' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolo_one_show_item',
            [
                'label' => esc_html__( 'Show Items', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 4,
                
            ]
        );
        $this->add_control(
            'restly_portfolo_one_show_nav',
            [
                'label' => esc_html__( 'Enable Pagination', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
                'condition' => [
                    'restly_portfolio_style!' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolo_two_show_readmore',
            [
                'label' => esc_html__( 'Enable Read More', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'restly_portfolio_style' => 'two',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolo_two_btn_text',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'restlycore' ),
                'condition' => [
                    'restly_portfolo_two_show_readmore' => 'yes',
                    'restly_portfolio_style' => 'two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_three_slide_options',
            [
                'label' => esc_html__( 'Slide Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolio_three_slide_enable',
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
            'restly_portfolio_three_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_portfolio_three_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolio_three_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'restly_portfolio_three_slide_enable' => 'yes',

                ),
            ]
        );
        $this->add_control(
            'restly_portfolio_three_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_portfolio_three_slide_enable' => 'yes',
                    'restly_portfolio_three_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolio_three_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'restly_portfolio_three_slide_enable' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'restly_portfolio_three_nav',
            [
                'label'        => esc_html__( 'Enable Nav ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_portfolio_three_slide_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_three_options',
            [
                'label' => esc_html__( 'Static Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolio_three_stitle',
            [
                'label' => esc_html__( 'Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Our Gallery', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_portfolio_three_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Explore our recent projects', 'restlycore' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolo_CSS_box_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => ['one','four'],
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolo_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolo_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-item',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolo_CSS_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolo_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolo_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_CSS_dec_options',
            [
                'label' => esc_html__( ' Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => ['one','four'],
                ],
            ]
        );
        $this->add_control(
            'restly_portfolio_CSS_dec_align',
            [
                'label' => __( 'Alignment', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'restlycore' ),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_portfolio_CSS_dec_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-portfolio-dec',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_CSS_dec_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-dec',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_CSS_dec_radius',
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
                    '{{WRAPPER}} .restly-portfolio-dec' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly__CSS__margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly__CSS__padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_dec_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_dec_cat',
            [
                'label' => __( 'Category', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_cat_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec>a' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .restly-portfolio-dec a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_cat_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec>a:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .restly-portfolio-dec a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_dec_cat_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-dec>a',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_cat_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec>a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_cat_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec>a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_dec_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_title_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec h6 a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_dec_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-dec h6 a',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec h6 a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec h6 a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_portfolio_dec_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
                'condition' => [
                    'restly_portfolio_style' => 'four',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.portfolio-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_icon_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.portfolio-btn:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_dec_icon_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} a.portfolio-btn' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_poftfolo_two_CSS_box_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'two',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_poftfolio_two_tabs'
        );
        $this->start_controls_tab(
            'restly_poftfolio_two_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_poftfolio_two_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .portfolio-style-two .restly-portfolio-item:after',
                'exclude' => [ 'image' ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_poftfolio_two_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_poftfolio_two_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item',
            ]
        );
        $this->add_responsive_control(
            'restly_poftfolio_two_CSS_box_radius',
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
                    '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_poftfolio_two_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_poftfolio_two_CSS_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .portfolio-style-two .restly-portfolio-item:hover:after',
                'exclude' => [ 'image' ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_poftfolio_two_CSS_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_poftfolio_two_CSS_box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_poftfolio_two_CSS_box_hradius',
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
                    '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        
        $this->add_responsive_control(
            'restly_postfolio_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-items.portfolio-style-two .restly-portfolio-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_two_CSS_content_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'two',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_two_content_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_two_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_title_c',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec2 h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_title_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec2 h6 a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_two_css_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-dec2 h6',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_two_css_title_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-dec2 h6',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec2 h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-dec2 h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_two_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_btn_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-btn a.theme-btns2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_btn_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-btn a.theme-btns2:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_two_css_btn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-btn a.theme-btns2',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_two_cssbtne_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-btn a.theme-btns2',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-btn a.theme-btns2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_two_css_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-btn a.theme-btns2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_three_CSS_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_items_cass_left',
            [
                'label' => esc_html__( 'Left To Right', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-portfolio-three-slides' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_items_mbottom',
            [
                'label' => esc_html__( 'Top to Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 500,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-slides' => 'margin-top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_three_box_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_three_box_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_three_box_CSS__shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} img.img-responsive.portfolio-three-image.wp-post-image',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_three_box_CSS__border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} img.img-responsive.portfolio-three-image.wp-post-image',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_box_CSS__radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
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
                    '{{WRAPPER}} img.img-responsive.portfolio-three-image.wp-post-image' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_three_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_three_box_CSS_h_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-item:hover img.img-responsive.portfolio-three-image.wp-post-image',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_three_box_CSS_h_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-item:hover  img.img-responsive.portfolio-three-image.wp-post-image',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_box_CSS_h_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-item:hover  img.img-responsive.portfolio-three-image.wp-post-image' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'restly_portfolio_three_box_CSS__margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_box_CSS__padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_three_CSS_title_options',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_hcolor',
            [
                'label' => esc_html__( 'Title Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec:hover h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_hbg',
            [
                'label' => esc_html__( 'Background Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_three_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec h6',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
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
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three-content .restly-portfolio-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_portfolio_three_CSS_static_title_options',
            [
                'label' => esc_html__( 'Static Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'three',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolo_three_static_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_three_static_tabs_normal',
            [
                'label' => __( 'Sub Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_static_stitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-static-contents h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_three_CSS_static_stitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-static-contents h3',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_static_stitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-static-contents h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_static_stitle_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-static-contents h3' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_three_static_tabs_hover',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_static_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-static-contents h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_three_CSS_static_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-static-contents h2',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_static_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-static-contents h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_static_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-static-contents h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_three_CSS_arrow_options',
            [
                'label' => esc_html__( 'Arow CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'three',
                    'restly_portfolio_three_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_arrow_top',
            [
                'label' => esc_html__( 'Top', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => -500,
                        'max' => 600,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_three_CSS_arrow_left',
            [
                'label' => esc_html__( 'Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['%' ],
                'range' => [
                    '%' => [
                        'min' => -500,
                        'max' => 600,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_size',
            [
                'label' => esc_html__( 'Font Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav .owl-prev:before, .restly-portfolio-three .owl-nav .owl-next:before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 45,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav>div' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 45,
                ],
                'selectors' => [
                    '{{WRAPPER}}.restly-portfolio-three .owl-nav>div' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfoio_three_arrwo_tabs'
        );
        $this->start_controls_tab(
            'restly_portfoio_three_arrwo_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_color',
            [
                'label' => esc_html__( 'icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav .owl-prev:before, .restly-portfolio-three .owl-nav .owl-next:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav>div' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav>div' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfoio_three_arrwo_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_hcolor',
            [
                'label' => esc_html__( 'icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav .owl-prev:hover:before, .restly-portfolio-three .owl-nav .owl-next:hover:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_hbg',
            [
                'label' => esc_html__( 'Background Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav>div:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfoio_three_arrwo_hradius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-three .owl-nav>div:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_five_css_box',
            [
                'label' => esc_html__( 'Box CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item-five' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_box-padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item-five' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_five_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_five_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_portfolio_five_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-portfolio-item-five:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_five_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-item-five',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item-five' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_five_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-item-five',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_five_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_portfolio_five_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-portfolio-item-five:hover:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_five_box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-item-five:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_box_hradius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-item-five:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_five_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-item-five:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_portfolio_five_css_content',
            [
                'label' => esc_html__( 'Content CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_portfolio_style' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_content_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_content_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_portfolio_five_css_content__aligment',
            [
                'label' => __( 'Alignment', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'eicon-h-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'restlycore' ),
                        'icon' => 'eicon-h-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'eicon-h-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-decs' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_five_css_content_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_five_css_content_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_five_css_title_typography',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-content h6',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-content h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_htitle_color',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-content h6 a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-content h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-content h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_five_css_content_tabs_cate',
            [
                'label' => __( 'Category', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_five_css_cat_typography',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-cats a',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_cat_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-cats a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_hcat_color',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-cats a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_cat_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-cats a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_cat_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-cats a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_portfolio_five_css_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
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
                    '{{WRAPPER}} .portfolio-btn a' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_bgc',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_hc',
            [
                'label' => esc_html__( 'hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_hbgc',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_hradius',
            [
                'label' => esc_html__( 'Hover Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_five_css_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .portfolio-btn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        if($settings['restly_portfolio_three_slide_enable'] == 'yes'){
            $restly_pitem_show = -1;
        }else{
            $restly_pitem_show = $settings['restly_portfolo_one_show_item'];
        }
        global $post;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        if($settings['restly_protfilio_by_cat_enable'] == 'yes' && !empty($settings['restly_portfolio_by_cat'])){
            $p = new \WP_Query(array(
                'posts_per_page' => esc_attr($restly_pitem_show),
                'post_type' => 'restly_portfolio',
                'order' => esc_attr($settings['restly_protfolio_order_by']),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'restly_portfolio_cat',
                        'terms' => $settings['restly_portfolio_by_cat'],
                    )
                ),
                'paged' => $paged
            ));
       }else{
            $p = new \WP_Query(array(
                 'posts_per_page' => esc_attr($restly_pitem_show),
                'post_type' => 'restly_portfolio',
                'order' => esc_attr($settings['restly_protfolio_order_by']),
                 'paged' => $paged
            ));
        } 
        ob_start();
        ?>
        <div class="restly-portfolios-wrapper">
            <div class="restly-portfolio-inner">
                <?php if($settings['restly_portfolio_style'] == 'one') : ?>
                    <div class="restly-portfolio-items">
                        <div class="row g-<?php echo esc_attr($settings['restly_portfolo_one_spacing']); ?>">
                            <?php 
                            while($p->have_posts()) : $p->the_post();
                            ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo esc_attr($settings['restly_portfolo_one_column']); ?>">
                                <div class="restly-portfolio-item">
                                    <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?> 
                                    <div class="restly-portfolio-dec">
                                        <div class="restly-portfolio-cats">
                                        <?php  $portfolio_catagorys = get_the_terms( get_the_ID(), 'restly_portfolio_cat' ); if ( $portfolio_catagorys && ! is_wp_error( $portfolio_catagorys ) ){
                                            foreach($portfolio_catagorys as $portfolio_catagory ){
                                                echo '<a href="'.esc_url(get_term_link($portfolio_catagory->slug, 'restly_portfolio_cat')).'">'.esc_html($portfolio_catagory->name).'</a>';
                                            }
                                        } ?>
                                        </div>
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
                        </div>
                        <?php if($settings['restly_portfolo_one_show_nav'] == 'yes' ) { ?>
                        <div class="restly-portfolo-nav">
                            <?php restly_paginate_nav($p); ?>
                        </div>
                        <?php } ?>
                    </div>    
                <?php elseif($settings['restly_portfolio_style'] == 'two') : ?>
                    <div class="restly-portfolio-items portfolio-style-two">
                        <div class="row">
                            <?php 
                            while($p->have_posts()) : $p->the_post();
                            ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo esc_attr($settings['restly_portfolo_one_column']); ?>">
                                <div class="restly-portfolio-item">
                                    <?php the_post_thumbnail('restly-portfolio-medium', array('class' => 'img-responsive')); ?> 
                                    <div class="restly-portfolio-dec2">
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                        <?php if($settings['restly_portfolo_two_show_readmore'] == 'yes') { ?>
                                        <div class="restly-portfolio-btn">
                                            <a href="<?php the_permalink(); ?>" class="theme-btns2"><?php echo esc_html($settings['restly_portfolo_two_btn_text']); ?> <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile;  wp_reset_query(); ?>
                            <?php if($settings['restly_portfolo_one_show_nav'] == 'yes' ) { ?>
                            <div class="restly-portfolo-nav">
                                <?php restly_paginate_nav($p); ?>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php elseif($settings['restly_portfolio_style'] == 'three') :
                    $dynamic_id = rand(1241, 3256);
                    if($settings['restly_portfolio_three_slide_enable'] == 'yes'){
                        $restly_prow = 'active-slide';
                        $restly_pClass = 'slide-item';
                        if($settings['restly_portfolio_three_nav'] == 'yes' ){
                            $arrow = 'true';
                        }else{
                            $arrow = 'false';
                        }
                        if($settings['restly_portfolio_three_aloop'] == 'yes' ){
                            $aloop = 'true';
                        }else{
                            $aloop = 'false';
                        }
                        if($settings['restly_portfolio_three_loop'] == 'yes' ){
                            $loop = 'true';
                        }else{
                            $loop = 'false';
                        }
                        if(is_rtl()){
                            $rtl = 'true';
                        }else{
                            $rtl = 'false';
                        }
                        echo '
                            <script>
                            jQuery(document).ready(function($) {
                                "use strict";
                                $("#portfolio-slide-'.esc_attr($dynamic_id).'").owlCarousel({
                                    loop:'.esc_attr($loop).',
                                    margin:30,
                                    rtl: '.esc_attr($rtl).',
                                    nav:'.esc_attr($arrow).',
                                    smartSpeed: '.$settings['restly_portfolio_three_speed'].',
                                    autoplay: '.$settings['restly_portfolio_three_aspeed'].',
                                    responsive:{
                                        0:{
                                            items:1
                                        },
                                        600:{
                                            items:2
                                        },
                                        800:{
                                            items:2
                                        },
                                        1024:{
                                            items:3
                                        },
                                        1200:{
                                            items:3
                                        }
                                    }
                                }); 
                            });
                            </script>';
                    }else{
                        $restly_prow = 'row';
                        $restly_pClass = 'col-12 col-sm-6 col-md-4 col-lg-4';
                    }
                    
                    ?>
                    <div class="restly-portfolio-three">
                        <div class="restly-portfolio-static-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="restly-portfolio-static-contents">
                                            <h3><?php echo esc_html($settings['restly_portfolio_three_stitle']); ?></h3>
                                            <h2><?php echo esc_html($settings['restly_portfolio_three_title']); ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="restly-portfolio-three-slides">
                            <div class="container">
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div class="restly-portfolio-three-content">
                                            <div class="<?php echo esc_attr($restly_prow); ?> owl-carousel owl-theme owl-loaded owl-drag" id="portfolio-slide-<?php echo esc_attr($dynamic_id); ?>">
                                            <?php 
                                            while($p->have_posts()) : $p->the_post();
                                            ?>
                                            <div class="item <?php echo esc_attr($restly_pClass); ?>">
                                                <div class="restly-portfolio-item">
                                                    <?php the_post_thumbnail('restly-portfolio-medium', array('class' => 'img-responsive portfolio-three-image'), true); ?> 
                                                    <div class="restly-portfolio-dec">
                                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <?php elseif($settings['restly_portfolio_style'] == 'four') : ?>
                    <div class="restly-portfolio-items portfolio-style-four">
                        <div class="row g-<?php echo esc_attr($settings['restly_portfolo_one_spacing']); ?>">
                            <?php 
                            while($p->have_posts()) : $p->the_post();
                            ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo esc_attr($settings['restly_portfolo_one_column']); ?>">
                                <div class="restly-portfolio-item">
                                    <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?> 
                                    <div class="restly-portfolio-dec">
                                        <div class="portfolio-hover">
                                            <div class="restly-portfolio-cats">
                                            <?php  $portfolio_catagorys = get_the_terms( get_the_ID(), 'restly_portfolio_cat' ); if ( $portfolio_catagorys && ! is_wp_error( $portfolio_catagorys ) ){
                                                foreach($portfolio_catagorys as $portfolio_catagory ){
                                                    echo '<a href="'.esc_url(get_term_link($portfolio_catagory->slug, 'restly_portfolio_cat')).'">'.esc_html($portfolio_catagory->name).'</a>';
                                                }
                                            } ?>
                                            </div>
                                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                            <a href="<?php the_permalink(); ?>" class="portfolio-btn"><i class="bi bi-arrow-right-short"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
                        </div>
                        <?php if($settings['restly_portfolo_one_show_nav'] == 'yes' ) { ?>
                        <div class="restly-portfolo-nav">
                            <?php restly_paginate_nav($p); ?>
                        </div>
                        <?php } ?>
                    </div>  
                <?php else : ?>
                    <div class="portfolio-style-five">
                        <div class="row">
                            <?php 
                            while($p->have_posts()) : $p->the_post();
                            $portfoliobg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'restly-portfolio-medium' );
                            ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-<?php echo esc_attr($settings['restly_portfolo_one_column']); ?>">
                                <div class="restly-portfolio-item-five tran-04" style="background:url(<?php echo esc_url($portfoliobg[0]); ?>)">
                                    <div class="portfolio-btn ">
                                    <a href="<?php the_permalink(); ?>" class="portfolio-btn tran-04"><i class="bi bi-arrow-right-short"></i></a>
                                    </div>
                                    <div class="restly-portfolio-decs">
                                        <div class="restly-portfolio-content">
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                        <div class="restly-portfolio-cats">
                                            <?php  $portfolio_catagorys = get_the_terms( get_the_ID(), 'restly_portfolio_cat' ); if ( $portfolio_catagorys && ! is_wp_error( $portfolio_catagorys ) ){
                                                foreach($portfolio_catagorys as $portfolio_catagory ){
                                                    echo '<a href="'.esc_url(get_term_link($portfolio_catagory->slug, 'restly_portfolio_cat')).'">'.esc_html($portfolio_catagory->name).'</a>';
                                                }
                                            } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); wp_reset_query(); ?>
                        </div>
                        <?php if($settings['restly_portfolo_one_show_nav'] == 'yes' ) { ?>
                        <div class="restly-portfolo-nav">
                            <?php restly_paginate_nav($p); ?>
                        </div>
                        <?php } ?>
                    </div>  
                <?php endif; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_portfolio_Widget );