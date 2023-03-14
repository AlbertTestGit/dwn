<?php namespace Elementor;

class restly_team_member_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_team_member';
    }

    public function get_title() {
        return esc_html__( 'Restly Team Member', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-theme-builder';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_team_member_options',
            [
                'label' => esc_html__( 'Restly Team Member', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_team_select_style',
            [
                'label' => esc_html__( 'Select Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'One', 'restlycore' ),
                    'two'  => esc_html__( 'Two', 'restlycore' ),
                    'three'  => esc_html__( 'Three', 'restlycore' ),
                    'four'  => esc_html__( 'Four', 'restlycore' )
                ],
            ]
        );
        $this->add_control(
            'restly_team_select_order',
            [
                'label' => esc_html__( 'Menu Order', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'DESC',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'restlycore' ),
                    'DESC'  => esc_html__( 'DESC', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_team_stitle_enable',
            [
                'label' => esc_html__( 'Enable Sub Tilte', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_team_item_show',
            [
                'label' => esc_html__( 'Display Item', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 4
            ]
        );
        $this->add_control(
            'restly_team_social_enable',
            [
                'label' => esc_html__( 'Enable Social icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'restly_team_select_style' => ['three','four'],
                ],
            ]
        );
        $this->add_control(
            'restly_team3_coluam',
            [
                'label' => esc_html__( 'Select Column', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '3',
                'options' => [
                    '6'  => esc_html__( '2 Column', 'restlycore' ),
                    '4' => esc_html__( '3 Column', 'restlycore' ),
                    '3' => esc_html__( '4 Column', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_team3_title_tag',
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
            'restly_team3_stitle_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h4',
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
        
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_team_member_slide_options',
            [
                'label' => esc_html__( 'Slide Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_team_enable_slide',
            [
                'label' => esc_html__( 'Enable Slide', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'restly_team_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_team_enable_slide' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_team_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'restly_team_enable_slide' => 'yes',
                    'restly_team_loop' => 'yes',

                ),
            ]
        );
        $this->add_control(
            'restly_team_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_team_enable_slide' => 'yes',
                    'restly_team_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_team_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'restly_team_aloop'   => 'yes',
                    'restly_team_loop'    => 'yes',
                    'restly_team_enable_slide' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'restly_team_dot',
            [
                'label'        => esc_html__( 'Enable Dots ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_team_enable_slide' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_team_box_CSS_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_team_box_tabs'
        );
        $this->start_controls_tab(
            'restly_team_box_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_team_box_normal_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-team-contents',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_team_box_normal_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-team-contents',
            ]
        );
        $this->add_responsive_control(
            'restly_team_box_normal_radisu',
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
                    '{{WRAPPER}} .restly-team-contents' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_team_box_normal__shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-team-contents',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_team_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_team_box_hover_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-team-item:hover .restly-team-contents',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_team_box_hover_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-team-item:hover .restly-team-contents',
            ]
        );
        $this->add_responsive_control(
            'restly_team_box_hover_radisu',
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
                    '{{WRAPPER}} .restly-team-item:hover .restly-team-contents' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_team_box_hover_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-team-item:hover .restly-team-contents',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_control(
            'restly_team_box_CSS__align',
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
                    '{{WRAPPER}} .restly-team-contents' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_box_CSS__margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_team_select_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_box_CSS__margin4',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_team_select_style' => 'four',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_box_CSS__margin2',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_team_select_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_box_CSS__padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_team_content_CSS_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
       
        $this->start_controls_tabs(
            'restly_team_content_css_tabs'
        );
        $this->start_controls_tab(
            'restly_team_content_css_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents .restly-team-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-team-item:hover .restly-team-contents .restly-team-title a' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_team_select_style!' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_title3_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style-three .restly-team-contents .restly-team-title a:hover' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_team_select_style' => 'three',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_team_content_css_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-team-contents .restly-team-title',
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents .restly-team-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents .restly-team-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_team_content_css_stitle',
            [
                'label' => __( 'Sub Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_stitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents .restly-team-stitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_stitle_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-team-item:hover .restly-team-contents .restly-team-stitle' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_team_select_style!' => 'three',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_team_content_css_stitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-team-contents .restly-team-stitle',
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_stitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents .restly-team-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_stitle_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-contents .restly-team-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_team_content_css_icon',
            [
                'label' => __( 'Social', 'restlycore' ),
                'condition' => [
                    'restly_team_select_style' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_sicon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-team-inner.team-style-three .restly-team-social ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_sicn_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-team-inner.team-style-three .restly-team-social ul li a:hover' => 'color: {{VALUE}}',
                ],
                
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_sicon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-inner.team-style-three .restly-team-social' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_content_css_sicon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-inner.team-style-three .restly-team-social ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_team_social4_css_options',
            [
                'label' => esc_html__( 'Social', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_team_select_style' => 'four',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_css_align',
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
                    '{{WRAPPER}} .team-style-four .restly-team-social' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_css_afcolor',
            [
                'label' => esc_html__( 'After Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-item .restly-team-img:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_css_margin',
            [
                'label' => esc_html__( 'Box Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-inner.team-style-four .restly-team-item:hover .restly-team-social' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_css_padding',
            [
                'label' => esc_html__( 'Box Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-team-inner.team-style-four .restly-team-item:hover .restly-team-social' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_team4_note',
            [
                'label' => __( 'Social Icon CSS', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_c',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_hc',
            [
                'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_bgc',
            [
                'label' => esc_html__( 'Icon Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_hbgc',
            [
                'label' => esc_html__( 'Icon Background Hover', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 70,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 70,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 40,
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px','%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 70,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_lineh',
            [
                'label' => esc_html__( 'Line Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 70,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_team_social4_icon_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team-style-four .restly-team-img .restly-team-social ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dynamic_id = rand(1241, 3256);
        if($settings['restly_team_enable_slide'] == 'yes' ){
            $class_row = 'no-row';
            $restly_team_class = 'team-slide-yes';
            $restly_team_show_item = -1;
            if($settings['restly_team_dot'] == 'yes' ){
				$dots = 'true';
			}else{
				$dots = 'false';
			}
			if($settings['restly_team_aloop'] == 'yes' ){
				$aloop = 'true';
			}else{
				$aloop = 'false';
			}
			if($settings['restly_team_loop'] == 'yes' ){
				$loop = 'true';
			}else{
				$loop = 'false';
			}
            echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
				$(".team-slide-'.esc_attr($dynamic_id).'").slick({
					slidesToShow: 2,
					slidesToScroll: 2,
                    arrows: false,
					dots: '.esc_attr($dots).',
					infinite: '.esc_attr($loop).',
					autoplay: '.esc_attr($aloop).',';
					if($aloop == 'true'){
					echo 'speed: '.esc_attr($settings['restly_team_speed']).',';
					}
					if($aloop == 'true'){
					echo 'autoplaySpeed: '.esc_attr($settings['restly_team_aspeed']).',';
					}
					echo '
					responsive: [
						{
						breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3,
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
				});
			});
			</script>';
        }else{
            $class_row = 'row';
            if($settings['restly_team_select_style'] == 'three'){
            $restly_team_class = 'col-12 col-sm-6 col-md-6 col-lg-'.esc_attr($settings['restly_team3_coluam']).' single-item';
            }else{
                $restly_team_class = 'col-12 col-sm-6 col-md-6 col-lg-3 single-item';
            }
            $restly_team_show_item = $settings['restly_team_item_show'];
        }
        if($settings['restly_team_select_style'] == 'one'){
            $restly_team_style = 'team-style-one';
        }elseif($settings['restly_team_select_style'] == 'two'){
            $restly_team_style = 'team-style-two';
        }elseif($settings['restly_team_select_style'] == 'four'){
            $restly_team_style = 'team-style-four';
        }else{
            $restly_team_style = 'team-style-three';
        }
        global $post;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $p = new \WP_Query(array(
            'posts_per_page' => esc_attr($restly_team_show_item),
            'post_type' => 'restly_team',
            'paged' => $paged,
            'order' => $settings['restly_team_select_order'],
        ));
        ob_start();
        ?>
        <div class="restly-team-member-wrapper">
            <div class="restly-team-inner <?php echo esc_attr($restly_team_style); ?>">
                <div class="<?php echo esc_attr($class_row); ?> team-items team-slide-<?php echo esc_attr($dynamic_id); ?>">
                    <?php 
                        while($p->have_posts()) : $p->the_post();
                        $restly_idd = get_the_ID();
                        $restly_team_meta = get_post_meta($restly_idd, 'restly_teammeta', true);
                    ?>
                    <div class="<?php echo esc_attr($restly_team_class); ?>">
                        <div class="restly-team-item">
                            <div class="restly-team-img">
                                <?php the_post_thumbnail('full',array('class' => 'restly-team-image')); ?> 
                                <?php if($settings['restly_team_social_enable'] == 'yes' && !empty($restly_team_meta['restly_team_socials']) && $settings['restly_team_select_style'] == 'four' ) : ?>
                                <div class="restly-team-social">
                                    <ul>
                                        <?php foreach($restly_team_meta['restly_team_socials'] as $restly_tsocial){
                                            echo '<li><a href="'.esc_url($restly_tsocial['restly_team_social_link']).'" title="'.esc_attr($restly_tsocial['restly_team_social_label']).'"><i class="'.esc_attr($restly_tsocial['restly_teams_socials_icon']).'"></i></a></li>';
                                        } ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="restly-team-contents">
                                <<?php echo esc_attr($settings['restly_team3_title_tag']); ?> class="restly-team-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></<?php echo esc_attr($settings['restly_team3_title_tag']); ?>>
                                <?php if($settings['restly_team_stitle_enable'] == 'yes'){
                                    echo '<'.esc_attr($settings['restly_team3_stitle_tag']).' class="restly-team-stitle">'.esc_html($restly_team_meta['restly_team_stitle']).'</'.esc_attr($settings['restly_team3_stitle_tag']).'>';
                                } ?>
                                <?php if($settings['restly_team_social_enable'] == 'yes' && !empty($restly_team_meta['restly_team_socials']) && $settings['restly_team_select_style'] != 'four' ) : ?>
                                <div class="restly-team-social">
                                    <ul>
                                        <?php foreach($restly_team_meta['restly_team_socials'] as $restly_tsocial){
                                            echo '<li><a href="'.esc_url($restly_tsocial['restly_team_social_link']).'" title="'.esc_attr($restly_tsocial['restly_team_social_label']).'"><i class="'.esc_attr($restly_tsocial['restly_teams_socials_icon']).'"></i></a></li>';
                                        } ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); wp_reset_query();?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_team_member_Widget );