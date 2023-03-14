<?php namespace Elementor;

class restly_image_data_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_image_data';
    }

    public function get_title() {
        return esc_html__( 'Restly Image with Deta', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-spinner';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_image_data_options',
            [
                'label' => esc_html__( 'Restly Image with Deta', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_image_data_img',
            [
                'label'   => __( 'Upload Image', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'restly_image_data_title_tag',
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
        $repeater = new \Elementor\Repeater();
            $repeater->add_control(
            'restly_image_data_icon_select',
            [
                'label' => esc_html__( 'Select Icon Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'icon',
                'options' => [
                    'img'  => esc_html__( 'Image Icon', 'restlycore' ),
                    'icon' => esc_html__( 'Font Icon', 'restlycore' ),
                ],
            ]
        );
        $repeater->add_control(
            'restly_image_data_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type'  => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_image_data_icon_select' => 'icon',
                ],
            ]
        );
        $repeater->add_control(
            'restly_image_data_icon_img',
            [
                'label'   => __( 'Upload Icon', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_image_data_icon_select' => 'img',
                ],
            ]
        );
        $repeater->add_control(
            'restly_image_data_title', [
                'label'       => esc_html__( 'Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'Title', 'restlycore' ),
                'label_block' => true,
            ]
        );
        
        $repeater->add_control(
            'restly_image_data_number', [
                'label'       => esc_html__( 'Number', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'default'     => esc_html__( 'Number', 'restlycore' ),
                'label_block' => true,
            ]
        );
        $repeater->add_responsive_control(
            'restly_image_data_pl',
            [
                'label' => esc_html__( 'Position Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 300,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 15,
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'restly_image_data_pt',
            [
                'label' => esc_html__( 'Position Top', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 300,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_control(
            'restly_image_data_animation',
            [
                'label'   => esc_html__( 'Select Animation', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
                'options'   => [
                    'none'        => esc_html__( 'none', 'restlycore' ),
                    'shapeMover'        => esc_html__( 'Shape Mover', 'restlycore' ),
                    'bubbleMover'       => esc_html__( 'Bubble Mover', 'restlycore' ),
                    'bounce'            => esc_html__( 'Bounce', 'restlycore' ),
                    'flash'            => esc_html__( 'flash', 'restlycore' ),
                    'pulse'             => esc_html__( 'pulse', 'restlycore' ),
                    'rubberBand'         => esc_html__( 'rubberBand', 'restlycore' ),
                    'shakeX'        => esc_html__( 'shakeX', 'restlycore' ),
                    'shakeY'             => esc_html__( 'shakeY', 'restlycore' ),
                    'headShake'            => esc_html__( 'headShake', 'restlycore' ),
                    'swing'        => esc_html__( 'swing', 'restlycore' ),
                    'tada'        => esc_html__( 'tada', 'restlycore' ),
                    'wobble'       => esc_html__( 'wobble', 'restlycore' ),
                    'jello'          => esc_html__( 'jello', 'restlycore' ),
                    'heartBeat'           => esc_html__( 'heartBeat', 'restlycore' ),
                    'backInDown'           => esc_html__( 'backInDown', 'restlycore' ),
                    'backInLeft'          => esc_html__( 'backInLeft', 'restlycore' ),
                    'backInRight'  => esc_html__( 'backInRight', 'restlycore' ),
                    'backInUp' => esc_html__( 'backInUp', 'restlycore' ),
                    'backOutDown'    => esc_html__( 'backOutDown', 'restlycore' ),
                    'backOutLeft'   => esc_html__( 'backOutLeft', 'restlycore' ),
                    'backOutRight'       => esc_html__( 'backOutRight', 'restlycore' ),
                    'backOutUp'       => esc_html__( 'backOutUp', 'restlycore' ),
                    'bounceIn'=> esc_html__( 'bounceIn', 'restlycore' ),
                    'bounceInDown'=> esc_html__( 'bounceInDown', 'restlycore' ),
                    'bounceInLeft'=> esc_html__( 'bounceInLeft', 'restlycore' ),
                    'bounceInRight'=> esc_html__( 'bounceInRight', 'restlycore' ),
                    'bounceInUp'=> esc_html__( 'bounceInUp', 'restlycore' ),
                    'bounceOut'=> esc_html__( 'bounceOut', 'restlycore' ),
                    'bounceOutDown'=> esc_html__( 'bounceOutDown', 'restlycore' ),
                    'bounceOutLeft'=> esc_html__( 'bounceOutLeft', 'restlycore' ),
                    'bounceOutRight'=> esc_html__( 'bounceOutRight', 'restlycore' ),
                    'bounceOutUp'=> esc_html__( 'bounceOutUp', 'restlycore' ),
                    'fadeIn'=> esc_html__( 'fadeIn', 'restlycore' ),
                    'fadeInDown'=> esc_html__( 'fadeInDown', 'restlycore' ),
                    'fadeInDownBig'=> esc_html__( 'fadeInDownBig', 'restlycore' ),
                    'fadeInLeft'=> esc_html__( 'fadeInLeft', 'restlycore' ),
                    'fadeInLeftBig'=> esc_html__( 'fadeInLeftBig', 'restlycore' ),
                    'fadeInRight'=> esc_html__( 'fadeInRight', 'restlycore' ),
                    'fadeInRightBig'=> esc_html__( 'fadeInRightBig', 'restlycore' ),
                    'fadeInUpBig'=> esc_html__( 'fadeInUpBig', 'restlycore' ),
                    'fadeInTopLeft'=> esc_html__( 'fadeInTopLeft', 'restlycore' ),
                    'fadeInTopRight'=> esc_html__( 'fadeInTopRight', 'restlycore' ),
                    'fadeInBottomLeft'=> esc_html__( 'fadeInBottomLeft', 'restlycore' ),
                    'fadeInBottomRight'=> esc_html__( 'fadeInBottomRight', 'restlycore' ),
                    'fadeOut'=> esc_html__( 'fadeOut', 'restlycore' ),
                    'fadeOutDown'=> esc_html__( 'fadeOutDown', 'restlycore' ),
                    'fadeOutDownBig'=> esc_html__( 'fadeOutDownBig', 'restlycore' ),
                    'fadeOutLeft'=> esc_html__( 'fadeOutLeft', 'restlycore' ),
                    'fadeOutLeftBig'=> esc_html__( 'fadeOutLeftBig', 'restlycore' ),
                    'fadeOutRight'=> esc_html__( 'fadeOutRight', 'restlycore' ),
                    'fadeOutRightBig'=> esc_html__( 'fadeOutRightBig', 'restlycore' ),
                    'fadeOutUp'=> esc_html__( 'fadeOutUp', 'restlycore' ),
                    'fadeOutUpBig'=> esc_html__( 'fadeOutUpBig', 'restlycore' ),
                    'fadeOutTopLeft'=> esc_html__( 'fadeOutTopLeft', 'restlycore' ),
                    'fadeOutTopRight'=> esc_html__( 'fadeOutTopRight', 'restlycore' ),
                    'fadeOutBottomRight'=> esc_html__( 'fadeOutBottomRight', 'restlycore' ),
                    'fadeOutBottomLeft'=> esc_html__( 'fadeOutBottomLeft', 'restlycore' ),
                    'flip'=> esc_html__( 'flip', 'restlycore' ),
                    'flipInX'=> esc_html__( 'flipInX', 'restlycore' ),
                    'flipInY'=> esc_html__( 'flipInY', 'restlycore' ),
                    'flipOutX'=> esc_html__( 'flipOutX', 'restlycore' ),
                    'flipOutY'=> esc_html__( 'flipOutY', 'restlycore' ),
                    'lightSpeedInRight'=> esc_html__( 'lightSpeedInRight', 'restlycore' ),
                    'lightSpeedInLeft'=> esc_html__( 'lightSpeedInLeft', 'restlycore' ),
                    'lightSpeedOutRight'=> esc_html__( 'lightSpeedOutRight', 'restlycore' ),
                    'lightSpeedOutLeft'=> esc_html__( 'lightSpeedOutLeft', 'restlycore' ),
                    'rotateIn'=> esc_html__( 'rotateIn', 'restlycore' ),
                    'rotateInDownLeft'=> esc_html__( 'rotateInDownLeft', 'restlycore' ),
                    'rotateInDownRight'=> esc_html__( 'rotateInDownRight', 'restlycore' ),
                    'rotateInUpLeft'=> esc_html__( 'rotateInUpLeft', 'restlycore' ),
                    'rotateInUpRight'=> esc_html__( 'rotateInUpRight', 'restlycore' ),
                    'rotateOut'=> esc_html__( 'rotateOut', 'restlycore' ),
                    'rotateOutDownLeft'=> esc_html__( 'rotateOutDownLeft', 'restlycore' ),
                    'rotateOutDownRight'=> esc_html__( 'rotateOutDownRight', 'restlycore' ),
                    'rotateOutUpLeft'=> esc_html__( 'rotateOutUpLeft', 'restlycore' ),
                    'rotateOutUpRight'=> esc_html__( 'rotateOutUpRight', 'restlycore' ),
                    'hinge'=> esc_html__( 'hinge', 'restlycore' ),
                    'jackInTheBox'=> esc_html__( 'jackInTheBox', 'restlycore' ),
                    'rollIn'=> esc_html__( 'rollIn', 'restlycore' ),
                    'rollOut'=> esc_html__( 'rollOut', 'restlycore' ),
                    'zoomIn'=> esc_html__( 'zoomIn', 'restlycore' ),
                    'zoomInDown'=> esc_html__( 'zoomInDown', 'restlycore' ),
                    'zoomInLeft'=> esc_html__( 'zoomInLeft', 'restlycore' ),
                    'zoomInRight'=> esc_html__( 'zoomInRight', 'restlycore' ),
                    'zoomOut'=> esc_html__( 'zoomOut', 'restlycore' ),
                    'zoomOutDown'=> esc_html__( 'zoomOutDown', 'restlycore' ),
                    'zoomOutLeft'=> esc_html__( 'zoomOutLeft', 'restlycore' ),
                    'zoomOutRight'=> esc_html__( 'zoomOutRight', 'restlycore' ),
                    'zoomOutUp'=> esc_html__( 'zoomOutUp', 'restlycore' ),
                    'slideInDown'=> esc_html__( 'slideInDown', 'restlycore' ),
                    'slideInLeft'=> esc_html__( 'slideInLeft', 'restlycore' ),
                    'slideInRight'=> esc_html__( 'slideInRight', 'restlycore' ),
                    'slideInUp'=> esc_html__( 'slideInUp', 'restlycore' ),
                    'slideOutDown'=> esc_html__( 'slideOutDown', 'restlycore' ),
                    'slideOutLeft'=> esc_html__( 'slideOutLeft', 'restlycore' ),
                    'slideOutRight'=> esc_html__( 'slideOutRight', 'restlycore' ),
                    'slideOutUp'=> esc_html__( 'slideOutUp', 'restlycore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => '-webkit-animation-name: {{VALUE}};',
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'animation-name: {{VALUE}};',
                    
                ],
                
            ]
        );
        $repeater->add_control(
            'restly_shape_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 50,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'animation-duration: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => '-webkit-animation-duration: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_image_data_animation!' => 'none',
                ],
            ]
        );
        $this->add_control(
            'restly_image_datas',
            [
                'label'       => esc_html__( 'Item List', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::REPEATER,
                'fields'      => $repeater->get_controls(),
                'default'     => [
                    [
                        'restly_image_data_title'  => esc_html__( 'Data Scientist', 'restlycore' ),
                        'restly_image_data_number' => '',
                        'restly_image_data_icon'   => '',
                    ],
                    [
                        'restly_image_data_title'  => esc_html__( 'Machine Scientist', 'restlycore' ),
                        'restly_image_data_number' => '',
                        'restly_image_data_icon'   => esc_html__( '254+', 'restlycore' ),
                    ],
                    [
                        'restly_image_data_title'  => esc_html__( 'Data Visualization', 'restlycore' ),
                        'restly_image_data_number' => '',
                        'restly_image_data_icon'   => '',
                    ],
                ],
                'title_field' => '{{{ restly_image_data_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_data_css',
            [
                'label' => esc_html__( 'Css Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_box_align',
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
                    '{{WRAPPER}} .hero-right-part .data-item' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_image_data_css_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .hero-right-part .data-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_image_data_css_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .hero-right-part .data-item',
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_box_radius',
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
                    'size' => 10,
                ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_image_data_css_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .hero-right-part .data-item',
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_box_awidth',
            [
                'label' => esc_html__( 'Max Width', 'restlycore' ),
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
                    '{{WRAPPER}} .hero-right-part .data-item' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_data_css_icon',
            [
                'label' => esc_html__( 'Icon Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_icon_c',
            [
                'label' => esc_html__( 'Font Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_icon_size',
            [
                'label' => esc_html__( 'Font Icon Size', 'restlycore' ),
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
                    '{{WRAPPER}} .hero-right-part .data-item i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_icon_iwidth',
            [
                'label' => esc_html__( 'Image icon Width', 'restlycore' ),
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
                    '{{WRAPPER}} .hero-right-part .data-item img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .hero-right-part .data-item i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .hero-right-part .data-item i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_data_css_title',
            [
                'label' => esc_html__( 'Title Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item .data-item-title' => 'color: {{VALUE}}',
                ],
            ]
        );
       $this->add_group_control(
           \Elementor\Group_Control_Typography::get_type(),
           [
               'name' => 'restly_image_data_css_title_typo',
               'label' => esc_html__( 'Typography', 'restlycore' ),
               'selector' => '{{WRAPPER}} .hero-right-part .data-item .data-item-title',
           ]
       );
        $this->add_responsive_control(
            'restly_image_data_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item .data-item-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-right-part .data-item .data-item-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_data_css_number',
            [
                'label' => esc_html__( 'Number Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_number_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .data-item-content span' => 'color: {{VALUE}}',
                ],
            ]
        );
       $this->add_group_control(
           \Elementor\Group_Control_Typography::get_type(),
           [
               'name' => 'restly_image_data_css_number_typo',
               'label' => esc_html__( 'Typography', 'restlycore' ),
               'selector' => '{{WRAPPER}} .data-item-content span',
           ]
       );
        $this->add_responsive_control(
            'restly_image_data_css_number_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .data-item-content span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_data_css_number_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .data-item-content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        ob_start();
        ?>
        <div class="restly-image-with-wrapper">
            <div class="hero-right-part">
                <?php echo wp_get_attachment_image( $settings['restly_image_data_img']['id'], 'full' ); ?>
                <?php foreach( $settings['restly_image_datas'] as $item ) : ?>
                <div class="bubbleMover animated shapeanimation data-item elementor-repeater-item-<?php echo esc_attr( $item['_id'] ); ?>">
                    <?php if($item['restly_image_data_icon_select'] == 'img' && !empty($item['restly_image_data_icon_img'])) : ?>
                        <?php echo wp_get_attachment_image( $item['restly_image_data_icon_img']['id'], 'full' ); ?>
                    <?php elseif($item['restly_image_data_icon_select'] == 'icon' && !empty($item['restly_image_data_icon'])) : ?>
                        <?php \Elementor\Icons_Manager::render_icon( $item['restly_image_data_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php endif; ?>
                    <div class="data-item-content">
                        <?php if($item['restly_image_data_title']) : ?>
                        <<?php echo esc_attr($settings['restly_image_data_title_tag']); ?> class="data-item-title"><?php echo esc_html($item['restly_image_data_title']); ?></<?php echo esc_attr($settings['restly_image_data_title_tag']); ?>>
                        <?php endif; ?>
                        <?php if($item['restly_image_data_title']){
                            echo '<span>'.esc_html($item['restly_image_data_number']).'</span>';
                        } ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_image_data_Widget );