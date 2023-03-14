<?php namespace Elementor;

class restly_newsletter_section_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_newsletter_section';
    }

    public function get_title() {
        return esc_html__( 'Restly Newsletter', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-section';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_newsletter_section_options',
            [
                'label' => esc_html__( 'Newsletter', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'stitle',
            [
                'label' => esc_html__( 'Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Newsletters', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'stitle_image',
            [
                'label' => __( 'Upload Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Get Every Single Update Subscribe Newsletter', 'restlycore' ),
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
            'note',
            [
                'label' => esc_html__( 'Note', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We are available on store download our Apps', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'shotcode',
            [
                'label' => esc_html__( 'Shotcode', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => esc_html__( 'Add your Shotcode Here', 'restlycore' ),
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'shape_settings',
            [
                'label' => esc_html__( 'Image & Shape', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'enable_image_shape',
            [
                'label' => esc_html__( 'Enable Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'shapes2',
            [
                'label' => __( 'Choose Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic'    => [
                    'active' => true,
                ],
            ]
        );
        $repeater->add_responsive_control( 
        'animation2', 
        [
            'label'     => esc_html__( 'Select Animation', 'restlycore' ),
            'type'      => \Elementor\Controls_Manager::SELECT,
            'default'   => 'bounce',
            'options'   => [
                'unset'              => esc_html__( 'None', 'restlycore' ),
                'moveLeftRight'        => esc_html__( 'moveLeftRight', 'restlycore' ),
                'down-up-two'        => esc_html__( 'down-up-two', 'restlycore' ),
                'down-up-one'        => esc_html__( 'down-up-one', 'restlycore' ),
                'shapeMover'        => esc_html__( 'Shape Mover', 'restlycore' ),
                'bubbleMover'       => esc_html__( 'Bubble Mover', 'restlycore' ),
                'bounce'            => esc_html__( 'Bounce', 'restlycore' ),
                'zoomIn'            => esc_html__( 'ZoomIn', 'restlycore' ),
                'flash'             => esc_html__( 'Flash', 'restlycore' ),
                'pulse'             => esc_html__( 'Pulse', 'restlycore' ),
                'rubberBand'        => esc_html__( 'Rubber Band', 'restlycore' ),
                'shake'             => esc_html__( 'ShakeX', 'restlycore' ),
                'fadeIn'            => esc_html__( 'FadeIn', 'restlycore' ),
                'fadeInDown'        => esc_html__( 'FadeIn Down', 'restlycore' ),
                'fadeInLeft'        => esc_html__( 'FadeIn Left', 'restlycore' ),
                'fadeInRight'       => esc_html__( 'FadeIn Right', 'restlycore' ),
                'fadeInUp'          => esc_html__( 'FadeIn Up', 'restlycore' ),
                'fadeOut'           => esc_html__( 'FadeOut', 'restlycore' ),
                'fadeOutDown'       => esc_html__( 'FadeOut Down', 'restlycore' ),
                'fadeOutLeft'       => esc_html__( 'FadeOut Left', 'restlycore' ),
                'fadeOutRight'      => esc_html__( 'FadeOut Right', 'restlycore' ),
                'fadeOutUp'         => esc_html__( 'FadeOut Up', 'restlycore' ),
                'flip'              => esc_html__( 'Flip', 'restlycore' ),
                'flipInX'           => esc_html__( 'FlipInX', 'restlycore' ),
                'flipInY'           => esc_html__( 'FlipInY', 'restlycore' ),
                'rotateIn'          => esc_html__( 'RotateIn', 'restlycore' ),
                'rotateInDownLeft'  => esc_html__( 'RotateIn Down Left', 'restlycore' ),
                'rotateInDownRight' => esc_html__( 'RotateIn Down Right', 'restlycore' ),
                'rotateInUpLeft'    => esc_html__( 'RotateIn Up Left', 'restlycore' ),
                'rotateInUpRight'   => esc_html__( 'RotateIn Up Right', 'restlycore' ),
                'rotateOut'         => esc_html__( 'Rotate Out', 'restlycore' ),
                'hinge'             => esc_html__( 'Hinge', 'restlycore' ),
                'slideInDown'       => esc_html__( 'SlideIn Down', 'restlycore' ),
                'slideInLeft'       => esc_html__( 'SlideIn Left', 'restlycore' ),
                'slideInRight'      => esc_html__( 'SlideIn Right', 'restlycore' ),
            ],
            'selectors' => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'animation-name: {{VALUE}};-webkit-animation-name: {{VALUE}}',
            ],
        ] );
        $repeater->add_control(
            'animation_time2',
            [
                'label' => esc_html__( 'Duration Time', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0.1,
                        'max' => 30,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'animation-duration: {{SIZE}}s;-webkit-animation-duration: {{SIZE}}s',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_width2',
            [
                'label' => esc_html__( 'Shape Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 600,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_left2',
            [
                'label' => esc_html__( 'Shape Left To Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1920,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_top2',
            [
                'label' => esc_html__( 'Shape Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1920,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_zindex2',
            [
                'label' => esc_html__( 'Z index', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' =>0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'z-index: {{SIZE}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_oparicy2',
            [
                'label' => esc_html__( 'Opacity', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $repeater->add_responsive_control(
            'shape_display2',
            [
                'label' => esc_html__( 'Dispaly', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'block'  => esc_html__( 'Block', 'restlycore' ),
                    'none'  => esc_html__( 'None', 'restlycore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'display: {{VALUE}};',
                ],
                
            ]
        );
        $this->add_control(
            '_shape_image',
            [
                'label'   => esc_html__( 'Shape List', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'shapes2' => '',
                    ],
                ],
                'condition' => [
                    'enable_image_shape' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'box_css_options',
            [
                'label' => esc_html__( 'Box Options', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .newsletter-inner',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .newsletter-inner',
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
                    '{{WRAPPER}} .newsletter-inner' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .newsletter-inner',
            ]
        );
        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .newsletter-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'contnt_css_options',
            [
                'label' => esc_html__( 'Content Options', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'content_align',
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
                    '{{WRAPPER}} .newsletter-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'content_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .newsletter-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'content_tabs'
        );
            $this->start_controls_tab(
                'tab_stitle',
                [
                    'label' => __( 'Small Title', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'stitle_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .section-title .sub-title-two',
                ]
            );
            $this->add_responsive_control(
                'stitle_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-title .sub-title-two' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'stitle_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .section-title .sub-title-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'stitle_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .section-title .sub-title-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'tab_title',
                [
                    'label' => __( 'Title', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'title_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .section-title .section-h2',
                ]
            );
            $this->add_responsive_control(
                'title_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .section-title .section-h2' => 'color: {{VALUE}}',
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
                        '{{WRAPPER}} .section-title .section-h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .section-title .section-h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->start_controls_tab(
                'tab_node',
                [
                    'label' => __( 'Node', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'node_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content p',
                ]
            );
            $this->add_responsive_control(
                'node_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content p' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'node_bg',
                [
                    'label' => esc_html__( 'Background Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content p' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'node_radius',
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
                        '{{WRAPPER}} .newsletter-content p' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'node_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'node_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'mail_css_options',
            [
                'label' => esc_html__( 'Email Options', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'mail_tabs'
            );
            $this->start_controls_tab(
                'input_tab',
                [
                    'label' => __( 'Input', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'input_type',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'input_border',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text',
                ]
            );
            $this->add_responsive_control(
                'input_radius',
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
                        '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'input_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'input_bg',
                [
                    'label' => esc_html__( 'Background Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'input_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'input_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.wpcf7-text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'Radio_tab',
                [
                    'label' => __( 'Radio Button', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'radio_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content .wpcf7-list-item',
                ]
            );
            $this->add_responsive_control(
                'radio_color',
                [
                    'label' => esc_html__( 'Title Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content .wpcf7-list-item' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'radio_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content .wpcf7-list-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'radio_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content .wpcf7-list-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->start_controls_tab(
                'button_tab',
                [
                    'label' => __( 'Button', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'btn_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns',
                ]
            );
            $this->add_responsive_control(
                'btn_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'btn_bg',
                [
                    'label' => esc_html__( 'Background Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'btn_border',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns',
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
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'btn_shadow',
                    'label' => esc_html__( 'Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns',
                ]
            );
            $this->add_responsive_control(
                'btn_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'note_btn',
                [
                    'label' => __( 'Hover Options', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::HEADING,
                    'separator' => 'before',
                ]
            );
            $this->add_responsive_control(
                'btn_hcolor',
                [
                    'label' => esc_html__( 'Hover Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns:hover' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'btn_hbg',
                [
                    'label' => esc_html__( 'Hover Background', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns:hover' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'btn_hborder',
                    'label' => esc_html__( 'Hover Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns:hover',
                ]
            );
            $this->add_responsive_control(
                'btn_hradius',
                [
                    'label' => esc_html__( 'Hover Radius', 'restlycore' ),
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
                        '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'btn_hshadow',
                    'label' => esc_html__( 'Hover Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .newsletter-content form .form-group input.theme-btns:hover',
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'banner_image_css_settings',
            [
                'label' => esc_html__( 'Image', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'image_tabs'
            );
                $this->start_controls_tab(
                    'image_tab',
                    [
                        'label' => __( 'Image', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'image_width',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 1000,
                                'step' => 1,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes > img' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_radius',
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
                            '{{WRAPPER}} .images-with-shapes > img' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'image_shadow',
                        'label' => esc_html__( 'Image Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .images-with-shapes > img',
                    ]
                );
                $this->add_responsive_control(
                    'image_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes > img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes > img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'shape_tab',
                    [
                        'label' => __( 'Shape', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'shape_image_color',
                    [
                        'label' => esc_html__( 'background', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                
                $this->add_responsive_control(
                    'shape_width',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 1000,
                                'step' => 1,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'shape_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap .circle-shape',
                    ]
                );
                $this->add_responsive_control(
                    'image_shape_radius',
                    [
                        'label' => esc_html__( 'Radius', 'restlycore' ),
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
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_shape_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_shape_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        ob_start();
        ?>
        <div class="newsletter-section pt-100 rpt-70 pb-130 rpb-100">
            <div class="container container-1250">
                <div class="newsletter-inner">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="newsletter-images mt-35 images-with-shapes">
                                <?php if( $settings['image']['url'] ) : ?>
                                    <img src="<?php echo esc_url( $settings['image']['url']); ?>" alt ="<?php echo esc_attr($settings['image']['alt']); ?>" >
                                <?php endif; ?>
                                <?php 
                                if($settings['enable_image_shape'] === 'yes' ) :
                                $count = 0; foreach($settings['_shape_image'] as $shape ) :   $count++; 
                                ?>
                                    <div class="shape list-<?php echo esc_attr($count); ?> elementor-repeater-item-<?php echo esc_attr( $shape['_id'] ) ?>">
                                        <?php echo wp_get_attachment_image( $shape['shapes2']['id'], 'full' ); ?>
                                    </div>
                                <?php endforeach; ?>
                                <div class="circle-shapes-wrap">
                                    <div class="circle-shape"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="newsletter-content">
                                <div class="section-title mb-15">
                                    <?php if($settings['stitle']) : ?>
                                        <span class="sub-title-two"><?php echo esc_html($settings['stitle']); ?></span>
                                    <?php endif; ?>
                                    <<?php echo esc_attr($settings['title_tag']); ?> class="section-h2"><?php echo wp_kses_post($settings['title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
                                </div>
                                <?php if($settings['note']){
                                    echo '<p>'. wp_kses_post($settings['note']) .'</p>';
                                } ?>
                                <?php echo do_shortcode( $settings['shotcode'] ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if($settings['stitle_image']['url']) : ?>
        <style>
            .section-title .sub-title-two{
                background-image: url(<?php echo esc_url($settings['stitle_image']['url']); ?>);
            }
        </style>
        <?php endif; ?>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_newsletter_section_Widget );