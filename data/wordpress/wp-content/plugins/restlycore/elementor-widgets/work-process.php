<?php namespace Elementor;

class restly_work_process_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_work_process';
    }

    public function get_title() {
        return esc_html__( 'Restly Work Process', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-cogs';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_work_process_style_options',
            [
                'label' => esc_html__( 'Restly Work Process Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_style',
            [
                'label' => esc_html__( 'Border Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'Style One', 'restlycore' ),
                    'two' => esc_html__( 'Style Two', 'restlycore' ),
                    'three' => esc_html__( 'Style Three', 'restlycore' ),
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_work_process_options',
            [
                'label' => esc_html__( 'Restly Work Process', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_work_process_style' => 'one',
                ],
            ]
        );
        $this->add_control(
			'restly_work_process_icon_type',
			[
			    'label' => esc_html__('Icon Type','restlycore'),
			    'type' =>Controls_Manager::CHOOSE,
			    'options' =>[
				  'img' =>[
					'title' =>esc_html__('Image','restlycore'),
					'icon' =>'fa fa-picture-o',
				  ],
				  'icon' =>[
					'title' =>esc_html__('Icon','restlycore'),
					'icon' =>'fa fa-info',
				  ]
			    ],
			    'default' => 'icon',
			]
		);
        $this->add_control(
			'restly_work_process_icon_image',
			[
			    'label' => esc_html__('Image icon','restlycore'),
			    'type'=>Controls_Manager::MEDIA,
			    'default' => [
				  'url' => Utils::get_placeholder_image_src(),
			    ],
                'label_block' => true,
			    'condition' => [
				  'restly_work_process_icon_type' => 'img',
			    ]
			]
		);
        $this->add_control(
            'restly_work_process_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_work_process_icon_type' => 'icon',
                  ]
            ]
        );
        $this->add_control(
            'restly_work_process_icon_label',
            [
                'label' => esc_html__( 'Icon label', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '1', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_work_process_text',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Advertising and Marketing', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_work_process_tag1',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
        $this->end_controls_section();
        /*=========================
        == Work progress End One ==
        ==========================*/ 
        $this->start_controls_section(
            'restly_work_process_two_options',
            [
                'label' => esc_html__( 'Restly Work Process', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                ],
            ]
        );
        $this->add_control(
			'restly_work_process_icon_type2',
			[
			    'label' => esc_html__('Icon Type','restlycore'),
			    'type' =>Controls_Manager::CHOOSE,
			    'options' =>[
				  'img' =>[
					'title' =>esc_html__('Image','restlycore'),
					'icon' =>'fa fa-picture-o',
				  ],
				  'icon' =>[
					'title' =>esc_html__('Icon','restlycore'),
					'icon' =>'fa fa-info',
				  ]
			    ],
			    'default' => 'icon',
			]
		);
        $this->add_control(
			'restly_work_process_icon_image2',
			[
			    'label' => esc_html__('Image icon','restlycore'),
			    'type'=>Controls_Manager::MEDIA,
			    'default' => [
				  'url' => Utils::get_placeholder_image_src(),
			    ],
                'label_block' => true,
			    'condition' => [
				  'restly_work_process_icon_type2' => 'img',
			    ]
			]
		);
        $this->add_control(
            'restly_work_process_two_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_work_process_icon_type2' => 'icon',
                  ]
            ]
        );
        $this->add_control(
            'restly_work_process_icon_two_label',
            [
                'label' => esc_html__( 'Icon label', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '01', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_work_process_two_text',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Advertising and Marketing', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_work_process_tag2',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
            'restly_work_process_two_dec',
            [
                'label' => esc_html__( 'Description', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_work_p_two_enable_btn',
            [
                'label' => esc_html__( 'Enable Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_workp_two_url',
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
                'condition' => [
                    'restly_work_p_two_enable_btn' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_workp_two_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Read More', 'restlycore' ),
                'condition' => [
                    'restly_work_p_two_enable_btn' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_work_process_CSS_options_one',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style' => 'one',
                ],
            ]
        );
        $this->add_control(
            'restly_work_process_CSS_box_aligmnet',
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
                    '{{WRAPPER}} .restly-work-process' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_work_process_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-process',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_box_border_radius',
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
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_work_process_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-process',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_CSS_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style' => 'one',
                    'restly_work_process_icon_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_size',
            [
                'label' => esc_html__( 'icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 65,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_work_process_CSS_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-process-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
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
                    '{{WRAPPER}} .restly-work-process-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_CSS_img_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style' => 'one',
                    'restly_work_process_icon_type' => 'img',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_img_icon_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_img_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_img_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_work_process_CSS_img_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-process-icon.with-img img',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_img_icon_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
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
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_img_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
       
        $this->end_controls_section();

        
        $this->start_controls_section(
            'restly_work_process_CSS_icon_label',
            [
                'label' => esc_html__( 'Icon Label', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_size',
            [
                'label' => esc_html__( 'icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
       
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
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
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_lineght',
            [
                'label' => esc_html__( 'Line Height', 'restlycore' ),
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
                    'size' => 34,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label,.restly-work-process-icon.with-img span label' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 17,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_work_process_icon_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_iicon_label_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -40,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img span label' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_work_process_icon_type' => 'img',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_icon_label_right',
            [
                'label' => esc_html__( 'Right To Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i label' => 'right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_work_process_icon_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_iicon_label_right',
            [
                'label' => esc_html__( 'Right To Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -3,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img span label' => 'right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_work_process_icon_type' => 'img',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_CSS_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .work-process-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_work_process_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .work-process-title',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .work-process-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .work-process-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_workp_two_CSS_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                ],
            ]
        );
        $this->add_control(
            'restly_workp_two_CSS_box_align',
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
                    '{{WRAPPER}} .restly-work-progress-two' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_workp_two_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-work-progress-two',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_workp_two_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-progress-two',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_workp_two_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-progress-two',
            ]
        );
        $this->add_responsive_control(
            'restly_workp_two_CSS_box_radius',
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
                    '{{WRAPPER}} .restly-work-progress-two' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_workp_two_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_workp_two_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();




        $this->start_controls_section(
            'restly_work_process_two_CSS_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                    'restly_work_process_icon_type2' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_size',
            [
                'label' => esc_html__( 'icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 65,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_work_process_two_CSS_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-process-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
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
                    '{{WRAPPER}} .restly-work-process-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_two_CSS_img_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                    'restly_work_process_icon_type2' => 'img',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_img_icon_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_img_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_img_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 130,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_work_process_two_CSS_img_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-process-icon.with-img img',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_img_icon_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
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
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_img_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-process-icon.with-img img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_two_CSS_icon_label',
            [
                'label' => esc_html__( 'Icon Label', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_label_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two label' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_work_process_two_CSS_icon_label_size',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-progress-two label',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_label_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 28,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two label' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_work_process_style' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_three_CSS_icon_label_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two label' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_work_process_style' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_icon_label_right',
            [
                'label' => esc_html__( 'Right To Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -200,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two label' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_two_CSS_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two .work-process-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_work_process_two_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-progress-two .work-process-title',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two .work-process-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two .work-process-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_two_CSS_dec',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style!' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_dec_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-workp_two_dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_work_process_two_CSS_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-workp_two_dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-workp_two_dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-workp_two_dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_work_process_two_CSS_btn',
            [
                'label' => esc_html__( 'Button', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_work_process_style' => 'two',
                    'restly_work_process_style' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_btn_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two a.theme-btns2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_btn_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two a.theme-btns2:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_work_process_two_CSS_btn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-work-progress-two a.theme-btns2',
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two a.theme-btns2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_work_process_two_CSS_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-work-progress-two a.theme-btns2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="restly-workprocess-wrapper">
            <?php if($settings['restly_work_process_style'] == 'one' ) : ?>
            <div class="restly-work-process">
                    <?php if($settings['restly_work_process_icon_type'] == 'img' ) : ?>
                        <div class="restly-work-process-icon with-img">
                           <span><?php echo wp_get_attachment_image( $settings['restly_work_process_icon_image']['id'], 'thumbnail' ); ?><label><?php echo esc_html($settings['restly_work_process_icon_label']); ?></label></span>
                        </div>
                    <?php else : ?>
                        <div class="restly-work-process-icon">
                        <i class="<?php echo esc_attr($settings['restly_work_process_icon']['value']); ?>"><label><?php echo esc_html($settings['restly_work_process_icon_label']); ?></label></i>
                        </div>
                    <?php endif; ?>
                <<?php echo esc_attr($settings['restly_work_process_tag1']); ?> class="work-process-title"><?php echo esc_html($settings['restly_work_process_text']); ?></<?php echo esc_attr($settings['restly_work_process_tag1']); ?>>
            </div>
            <?php elseif($settings['restly_work_process_style'] != 'one') :
                if($settings['restly_work_p_two_enable_btn'] == 'yes' ){
                    $target = $settings['restly_workp_two_url']['is_external'] ? ' target="_blank"' : '';
                    $nofollow = $settings['restly_workp_two_url']['nofollow'] ? ' rel="nofollow"' : ''; 
                }
            ?>
                <div class="restly-work-progress-two <?php if($settings['restly_work_process_style'] == 'three') : ?>restly-workp-three<?php endif; ?>">
                    <?php if($settings['restly_work_process_icon_type2'] == 'img' ) : ?>
                        <div class="restly-work-process-icon with-img">
                           <span><?php echo wp_get_attachment_image( $settings['restly_work_process_icon_image2']['id'], 'thumbnail' ); ?></span>
                        </div>
                    <?php else : ?>
                        <div class="restly-work-process-icon">
                        <i class="<?php echo esc_attr($settings['restly_work_process_two_icon']['value']); ?>"></i>
                        </div>
                    <?php endif; ?>
                    <<?php echo esc_attr($settings['restly_work_process_tag2']); ?> class="work-process-title"><?php echo esc_html($settings['restly_work_process_two_text']); ?></<?php echo esc_attr($settings['restly_work_process_tag2']); ?>>
                    <?php if(!empty($settings['restly_work_process_two_dec'])){
                        echo '<div class="restly-workp_two_dec"><p>'.esc_html($settings['restly_work_process_two_dec']).'</p></div>';
                    } 
                    if($settings['restly_work_p_two_enable_btn'] == 'yes'){
                        echo '<a class="theme-btns2" href="' . esc_url($settings['restly_workp_two_url']['url']) . '"' . $target . $nofollow . '>'.esc_html($settings['restly_workp_two_btn_text']).' <i class="fas fa-arrow-right"></i></a>';
                    }
                    if(!empty($settings['restly_work_process_icon_two_label'])){
                        echo '<label>'.esc_html($settings['restly_work_process_icon_two_label']).'</label>';
                    }
                    ?>

                </div>
            <?php endif; ?>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_work_process_Widget );