<?php namespace Elementor;

class  restly_testimonial_two_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_testimonial_two';
    }

    public function get_title() {
        return esc_html__( 'Restly Testinomial V2', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-testimonial-carousel';
    }

    public function get_categories() {
        return ['restly'];
    }
    
    protected function register_controls() {
        $this->start_controls_section(
            'restly_testimonial_two_options',
            [
                'label' => esc_html__( 'Restly Testimonial', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
       
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_testimonial_two_imgbig',
            [
                'label' => __( 'Big Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'restly_testimonial_two_img',
            [
                'label' => __( 'Small Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'restly_testimonial_two_stitle',
            [
                'label' => esc_html__( 'Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Our Testimonial', 'restlycore' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'restly_testimonial_two_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'What our client’s say about us', 'restlycore' ),
                'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'restly_testimonial_two_name',
            [
                'label' => esc_html__( 'Name', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Michael M. Yates', 'restlycore' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'restly_testimonial_two_designation',
            [
                'label' => esc_html__( 'Designation', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Senior Manager', 'restlycore' ),
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'restly_testimonial_two_description',
            [
                'label' => esc_html__( 'Description', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Sed ut perspiciatis unde omnis istenatus error sit voluptatem accusant doloremque laudantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et','restlycore')
            ]
        );
        $this->add_control(
            'restly_testimonials_two',
            [
                'label'   => esc_html__( 'Testimonial Lists', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_testimonial_two_title' => __('What our client’s say about us','restlycore'),
                        'restly_testimonial_two_stitle' => __('Our Testimonial','restlycore'),
                        'restly_testimonial_two_name' => __('Michael M. Yates','restlycore'),
                        'restly_testimonial_two_designation' => __('Senior Manager','restlycore'),
                        'restly_testimonial_description' => __('Sed ut perspiciatis unde omnis istenatus error sit voluptatem accusant doloremque laudantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et','restlycore')
                    ],
                ],
            ]
        );
        $this->add_control(
            'restly_testimonials_two_title_tag',
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
            'restly_testimonials_two_stitle_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Sub Title', 'restlycore' ),
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
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_two_slide_options',
            [
                'label' => esc_html__( 'Testimonial Slide Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        
        $this->add_control(
            'restly_testimonial_two_slide_enable',
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
            'restly_testimonial_two_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_testimonial_two_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_two_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'restly_testimonial_two_slide_enable' => 'yes',
                    'restly_testimonial_two_loop' => 'yes',

                ),
            ]
        );
        $this->add_control(
            'restly_testimonial_two_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_testimonial_two_slide_enable' => 'yes',
                    'restly_testimonial_two_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_two_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'restly_testimonial_two_aloop'               => 'yes',
                    'restly_testimonial_two_loop'                => 'yes',
                    'restly_testimonial_two_slide_enable' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'restly_testimonial_two_dot',
            [
                'label'        => esc_html__( 'Enable Dots ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'restly_testimonial_two_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_two_nav',
            [
                'label'        => esc_html__( 'Enable Nav', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'yes',
                'condition'    => [
                    'restly_testimonial_two_slide_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_CSS_box',
            [
                'label' => esc_html__( 'Style Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_testimonial_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .test-card .card',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_testimonial_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .test-card .card',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_box_radius',
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
                    '{{WRAPPER}} .test-card .card' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_testimonial_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .test-card .card',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .test-card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .test-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_CSS_contact',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_testimonial_CSS_contact_align',
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
                    'justify' => [
                        'title' => __( 'justify', 'restlycore' ),
                        'icon' => ' eicon-v-align-middle',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_contact_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_contact_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_testimonial_CSS_content_tabs'
        );
            $this->start_controls_tab(
                'restly_testimonial_CSS_content_tabs_smtitle',
                [
                    'label' => __( 'Title', 'restlycore' ),
                ]
            );
            $this->add_control(
                'restly_testimonial_note_stitle',
                [
                    'label' => __( 'Small Title', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'restly_testimonial_CSS_stitle_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testimonial-content .test-two-stitle',
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_stitle__color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .test-two-stitle' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_stitle_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .test-two-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_stitle_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .test-two-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_testimonial_note_title',
                [
                    'label' => __( 'Title', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'restly_testimonial_CSS_btitle_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testimonial-content .testi-two-title',
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_btitle__color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .testi-two-title' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_btitle_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .testi-two-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_btitle_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .testi-two-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'restly_testimonial_CSS_content_tabs_hover',
                [
                    'label' => __( 'Content', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'restly_testimonial_CSS_dec_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testimonial-content .dec,.testimonial-content .dec p',
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_dec__color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .dec,.testimonial-content .dec p' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_dec_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_dec_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-content .dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'restly_testimonial_CSS_ainfo_tab',
                [
                    'label' => __( 'Author info', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_testimonial_CSS_ainfo_note',
                [
                    'label' => __( 'Author Title', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'restly_testimonial_CSS_aname_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testi-adec h6',
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_aname__color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testi-adec h6' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_aname_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-adec h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_aname_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-adec h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_testimonial_CSS_dinfo_note',
                [
                    'label' => __( 'Author Degnation', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'restly_testimonial_CSS_dname_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testi-adec span',
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_dname__color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testi-adec span' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_dname_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-adec span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_dname_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-adec span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_testimonial_CSS_aimage_note',
                [
                    'label' => __( 'Author Image', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_iwidht',
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
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info img' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_iheight',
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
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info img' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_iradius',
                [
                    'label' => esc_html__( 'Border Radius', 'restlycore' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                        ]
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info img' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_imargin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_testimonial_CSS_ainfo_ipadding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testi-author-info img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_CSS_arrow',
            [
                'label' => esc_html__( 'Arrow Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_testimonial_CSS_arrow_nav',
            [
                'label' => __( 'Nav Arrow', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_nav_size',
            [
                'label' => esc_html__( 'Font Size', 'restlycore' ),
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
                    '{{WRAPPER}} button.slick-prev.slick-arrow:before,button.slick-next.slick-arrow:before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_nav_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-testmonial-two-items button.slick-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_nav_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-testmonial-two-items button.slick-arrow:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_nav_cbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-testmonial-two-items button.slick-arrow' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_nav_hbg',
            [
                'label' => esc_html__( 'Hover Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-testmonial-two-items button.slick-arrow:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_nav_radius',
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
                    '{{WRAPPER}} .restly-testmonial-two-items button.slick-arrow' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_testimonial_CSS_arrow_dot',
            [
                'label' => __( 'Dot Arrow', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_dot_cbg',
            [
                'label' => esc_html__( 'Normal Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testimonial_CSS_arrow_dot_hbg',
            [
                'label' => esc_html__( 'Active color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} ul.slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dynamic_id = rand(1241, 3256);
        if($settings['restly_testimonial_two_slide_enable'] == 'yes'){
            if($settings['restly_testimonial_two_dot'] == 'yes' ){
				$dots = 'true';
			}else{
				$dots = 'false';
			}
			if($settings['restly_testimonial_two_aloop'] == 'yes' ){
				$aloop = 'true';
			}else{
				$aloop = 'false';
			}
			if($settings['restly_testimonial_two_loop'] == 'yes' ){
				$loop = 'true';
			}else{
				$loop = 'false';
			}
            if($settings['restly_testimonial_two_nav'] == 'yes' ){
				$nav = 'true';
			}else{
				$nav = 'false';
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
				$("#testimonial-two-slide-'.esc_attr($dynamic_id).'").slick({
					slidesToShow: 1,
					slidesToScroll: 1,
                    rtl: '.esc_attr($rtl).',
                    arrows: '.esc_attr($nav).',
					dots: '.esc_attr($dots).',
					infinite: '.esc_attr($loop).',
					autoplay: '.esc_attr($aloop).',';
					if($aloop == 'true'){
					echo 'speed: '.esc_attr($settings['restly_testimonial_two_speed']).',';
					}
					if($aloop == 'true'){
					echo 'autoplaySpeed: '.esc_attr($settings['restly_testimonial_two_aspeed']).',';
					}
					echo '
				});
			});
			</script>';
        }
        ob_start();
        ?>
        <div class="restly-testimonial-two-wrapper">
            <div class="restly-testmonial-two-items" id="testimonial-two-slide-<?php echo esc_attr($dynamic_id); ?>">
                <?php foreach($settings['restly_testimonials_two'] as $item ) : ?>
                <div class="test-card">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-5">
                            <?php echo wp_get_attachment_image( $item['restly_testimonial_two_imgbig']['id'], 'full' ); ?>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body testimonial-content">
                                    <<?php echo esc_attr($settings['restly_testimonials_two_stitle_tag']); ?> class="test-two-stitle"><?php echo esc_html($item['restly_testimonial_two_stitle']); ?></<?php echo esc_attr($settings['restly_testimonials_two_stitle_tag']); ?>>
                                    <<?php echo esc_attr($settings['restly_testimonials_two_title_tag']); ?> class="testi-two-title"><?php echo esc_html($item['restly_testimonial_two_title']); ?></<?php echo esc_attr($settings['restly_testimonials_two_title_tag']); ?>>
                                    <div class="dec">
                                        <?php echo wp_kses_post($item['restly_testimonial_two_description']); ?>
                                    </div>
                                    <div class="testi-author-info">
                                    <?php echo wp_get_attachment_image( $item['restly_testimonial_two_img']['id'], 'thumbnail' ); ?>
                                        <div class="testi-adec">
                                            <h6><?php echo esc_html($item['restly_testimonial_two_name']) ?></h6>
                                            <span><?php echo esc_html($item['restly_testimonial_two_designation']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_testimonial_two_Widget );