<?php namespace Elementor;

class restly_testimonial_three_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_testimonial_three';
    }

    public function get_title() {
        return esc_html__( 'Restly Testimonial V3', 'restlycore' );
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
            'restly_testimonial_three_sections',
            [
                'label' => esc_html__( 'Restly Testimonial Section', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_testimonial3_stitle',
            [
                'label'   => esc_html__( 'Title', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Testimonial', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_testimonial3_sdec',
            [
                'label'      => esc_html__( 'Content', 'restlycore' ),
                'type'       => \Elementor\Controls_Manager::TEXTAREA,
                'default'    => esc_html__( '2356+ client say about us', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_testimonial_three_sec_title_tag',
            [
                'label'       => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'h2',
                'options'     => [
                    'h1' => esc_html__( 'H1', 'restlycore' ),
                    'h2' => esc_html__( 'H2', 'restlycore' ),
                    'h3' => esc_html__( 'H3', 'restlycore' ),
                    'h4' => esc_html__( 'H4', 'restlycore' ),
                    'h5' => esc_html__( 'H5', 'restlycore' ),
                    'h6' => esc_html__( 'H6', 'restlycore' ),
                    'p'  => esc_html__( 'P', 'restlycore' ),
                    'span'  => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_three_sec_stitle_tag',
            [
                'label'       => esc_html__( 'Small Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'h4',
                'options'     => [
                    'h1' => esc_html__( 'H1', 'restlycore' ),
                    'h2' => esc_html__( 'H2', 'restlycore' ),
                    'h3' => esc_html__( 'H3', 'restlycore' ),
                    'h4' => esc_html__( 'H4', 'restlycore' ),
                    'h5' => esc_html__( 'H5', 'restlycore' ),
                    'h6' => esc_html__( 'H6', 'restlycore' ),
                    'p'  => esc_html__( 'P', 'restlycore' ),
                    'span'  => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_three_options',
            [
                'label' => esc_html__( 'Restly testimonial', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_testimonial_three_title_tag',
            [
                'label'       => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'h3',
                'options'     => [
                    'h1' => esc_html__( 'H1', 'restlycore' ),
                    'h2' => esc_html__( 'H2', 'restlycore' ),
                    'h3' => esc_html__( 'H3', 'restlycore' ),
                    'h4' => esc_html__( 'H4', 'restlycore' ),
                    'h5' => esc_html__( 'H5', 'restlycore' ),
                    'h6' => esc_html__( 'H6', 'restlycore' ),
                    'p'  => esc_html__( 'P', 'restlycore' ),
                    'span'  => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_three_stitle_tag',
            [
                'label'       => esc_html__( 'Small Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'h6',
                'options'     => [
                    'h1' => esc_html__( 'H1', 'restlycore' ),
                    'h2' => esc_html__( 'H2', 'restlycore' ),
                    'h3' => esc_html__( 'H3', 'restlycore' ),
                    'h4' => esc_html__( 'H4', 'restlycore' ),
                    'h5' => esc_html__( 'H5', 'restlycore' ),
                    'h6' => esc_html__( 'H6', 'restlycore' ),
                    'p'  => esc_html__( 'P', 'restlycore' ),
                    'span'  => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_testimonial_three_img',
            [
                'label'   => __( 'Choose Image', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'restly_testimonial_three_title',
            [
                'label'       => esc_html__( 'Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'Rodney J. Sabo', 'restlycore' ),
                'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
            ]
        );
        $repeater->add_control(
            'restly_testimonial_three_stitle',
            [
                'label'       => esc_html__( 'Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'Design Lead', 'restlycore' ),
                'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
            ]
        );
        $repeater->add_control(
            'restly_testimonial_three_description',
            [
                'label'   => esc_html__( 'Description', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Proin imperdiet commodo diam ac tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam tristique, augue et blandit consequat,', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_testimonial_threes',
            [
                'label'   => esc_html__( 'Testimonial Lists', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_testimonial_three_title'       => __( 'michele morrone', 'restlycore' ),
                        'restly_testimonial_three_stitle'      => __( 'Senior Developer', 'restlycore' ),
                        'restly_testimonial_three_description' => __( 'Proin imperdiet commodo diam ac tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam tristique, augue et blandit consequat', 'restlycore' ),
                    ],
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_three_slide_enable',
            [
                'label'        => esc_html__( 'Enable Slide', 'restlycore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'restlycore' ),
                'label_off'    => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial3_css_box',
            [
                'label' => esc_html__( 'Box CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_testimonial3_css_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-testimonial-three-wrapper',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_testimonial3_css_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-testimonial-three-wrapper',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_testimonial3_css_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-testimonial-three-wrapper',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_box_radius',
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
                    '{{WRAPPER}} .restly-testimonial-three-wrapper' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testimonial-three-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testimonial-three-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial3_css_section',
            [
                'label' => esc_html__( 'Section CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_aligment',
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
                    '{{WRAPPER}} .restly-testimonial-three-top' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testimonial-three-top' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testimonial-three-top' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_testimonial3_css_section_tabs'
        );
        $this->start_controls_tab(
            'restly_testimonial3_css_section_tabs_stitle',
            [
                'label' => __( 'Small Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_stitle_c',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-testi3-section-stitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_testimonial3_css_section_stitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-testi3-section-stitle',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_stitle_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testi3-section-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_stitle_cpadding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testi3-section-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_testimonial3_css_section_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_title_c',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-testi3-section-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_testimonial3_css_section_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-testi3-section-title',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_title_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testi3-section-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_section_title_cpadding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-testi3-section-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial3_css_content',
            [
                'label' => esc_html__( 'Content CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_content_align',
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
                    '{{WRAPPER}} .testi3-contents' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_content_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-contents' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial3_css_content_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-contents' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_testi3_content_css_tabs'
        );
        $this->start_controls_tab(
            'restly_testi3_content_css_tabs_ainfo',
            [
                'label' => __( 'Author Info', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_a_name_c',
            [
                'label' => esc_html__( 'Name Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial3-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_testi3_a_name_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial3-title',
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_a_name_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial3-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_a_name_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial3-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_testi3_anoe',
            [
                'label' => __( 'Author Designation', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_a_sname_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial3-stitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_testi3_a_sname_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial3-stitle',
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_a_sname_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial3-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_a_sname_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial3-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_testi3_content_css_dec',
            [
                'label' => __( 'Description', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_dec_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testi3-dec' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_testi3_dec_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testi3-dec',
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_dec_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_dec_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_testi3_content_css_img',
            [
                'label' => __( 'image', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_width',
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
                    'size' => 70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-img' => 'width: {{SIZE}}{{UNIT}}!important;',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_height',
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
                    'size' => 70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_testi3_css_img_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testi3-img img',
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_radius',
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
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-img img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_bcolr',
            [
                'label' => esc_html__( 'Border Active Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slick-slide.slick-current .testi3-img img' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_margin',
            [
                'label' => esc_html__( 'image Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-nav.slick-initialized.slick-slider .slick-slide' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_padding',
            [
                'label' => esc_html__( 'image Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-nav.slick-initialized.slick-slider .slick-slide' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_bmargin',
            [
                'label' => esc_html__( 'image Box Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-navs' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_bpadding',
            [
                'label' => esc_html__( 'image Box Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-navs' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi3_css_img_bottom',
            [
                'label' => esc_html__( 'Image Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 170,
                ],
                'selectors' => [
                    '{{WRAPPER}} .testi3-navs' => 'bottom: {{SIZE}}{{UNIT}};',
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
        $dynamic_id = rand(1241, 3256);
        if($settings['restly_testimonial_three_slide_enable'] == 'yes'){
            if(is_rtl()){
                $rtl = 'true';
            }else{
                $rtl = 'false';
            }
            echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
                $(".testi3-slider").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    asNavFor: ".testi3-nav"
                });
                $(".testi3-nav").slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    asNavFor: ".testi3-slider",
                    dots: true,
                    arrows: false,
                    rtl: '.esc_attr($rtl).',
                    focusOnSelect: true,
                    centerMode: true,
                });
			});
			</script>';
        }
        ob_start();
        ?>
        <div class="restly-testimonial-three-wrapper">
            <div class="restly-testimonial-three-inner">
                <div class="restly-testimonial-three-top">
                    <<?php echo esc_attr($settings['restly_testimonial_three_sec_stitle_tag']); ?> class="restly-testi3-section-stitle"><?php echo esc_html($settings['restly_testimonial3_stitle']); ?></<?php echo esc_attr($settings['restly_testimonial_three_sec_stitle_tag']); ?>>
                    <<?php echo esc_attr($settings['restly_testimonial_three_sec_title_tag']); ?> class="restly-testi3-section-title"><?php echo wp_kses($settings['restly_testimonial3_sdec'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_testimonial_three_sec_title_tag']); ?>>
                </div>
                <div class="testi3-contents">
                    <div class="testi3-items testi3-slider">
                        <?php foreach($settings['restly_testimonial_threes'] as $restly_testi ) : ?>
                        <div class="testi3-single">
                            <div class="testi3-dec">
                            <?php echo wp_kses($restly_testi['restly_testimonial_three_description'],'restly_allowed_html'); ?>
                            </div>
                            <div class="testi3-author">
                            <<?php echo esc_attr($settings['restly_testimonial_three_title_tag']); ?> class="testimonial3-title"><?php echo wp_kses($restly_testi['restly_testimonial_three_title'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_testimonial_three_title_tag']); ?>>
                            <<?php echo esc_attr($settings['restly_testimonial_three_stitle_tag']); ?> class="testimonial3-stitle"><?php echo wp_kses($restly_testi['restly_testimonial_three_stitle'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_testimonial_three_stitle_tag']); ?>>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="testi3-navs">
                        <div class="testi3-nav">
                            <?php foreach($settings['restly_testimonial_threes'] as $restly_testi3 ) : ?>
                            <div class="testi3-img">
                                <?php echo wp_get_attachment_image( $restly_testi3['restly_testimonial_three_img']['id'], 'thumbnail' ); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_testimonial_three_Widget );