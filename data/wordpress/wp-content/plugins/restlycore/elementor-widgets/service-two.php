<?php namespace Elementor;

class restly_service_v_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_service_v';
    }

    public function get_title() {
        return esc_html__( 'Restly Service Two', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-site-identity';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_service_v2_options',
            [
                'label' => esc_html__( 'Restly Service Two', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_service_v2_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'restly_service_v2_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Project manage', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_v2_title_tag',
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
            'restly_service_v2_textarea',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Integer molestie magna in augue euismod', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
			'restly_service_v2_select_btn',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'restly_service_v2_btn_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_service_v2_select_btn' => 'extranal',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_service_v2_btn_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_service_v2_select_btn' => 'page',
				],
				'label_block' => true,
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
			'restly_service_v2_box_css',
			[
				'label' => esc_html__( 'Box CSS', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_responsive_control(
            'restly_service_v2_box_css_align',
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
                    '{{WRAPPER}} .restly-service-v2-inner' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_v2_box_css_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-v2-inner',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_v2_box_css_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v2-inner',
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_box_css_border_radius',
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
                    '{{WRAPPER}} .restly-service-v2-inner' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_v2_box_css_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v2-inner',
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_box_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v2-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_box_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v2-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
			'restly_service_v2_icon_css',
			[
				'label' => esc_html__( 'Icon CSS', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_responsive_control(
            'restly_service_v2_icon_css_width',
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
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_font',
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
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_radius',
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
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_v2_icon_css_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-v2-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v2-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_icon_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-v2-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
			'restly_service_v2_line_css',
			[
				'label' => esc_html__( 'Line CSS', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
        $this->add_responsive_control(
            'restly_service_v2_line_css_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 400,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_bg',
            [
                'label' => esc_html__( 'Line Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_radius',
            [
                'label' => esc_html__( 'Radius', 'restlycore' ),
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
                    '{{WRAPPER}} span.bar.bar-ani' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'line_after',
            [
                'label' => __( 'After CSS', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_after_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 20,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani:after' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_after_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani:after' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_after_bg',
            [
                'label' => esc_html__( 'Line Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani:after' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_after_radius',
            [
                'label' => esc_html__( 'Radius', 'restlycore' ),
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
                    '{{WRAPPER}} span.bar.bar-ani:after' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_v2_line_css_align',
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
                'selectors_dictionary' => [
                    'left' => 'margin-left:0',
                    'center' => 'margin-left:auto;margin-right:auto',
                    'right' => 'margin-left: auto;margin-right:0',
                ],
                'selectors' => [
                    '{{WRAPPER}} span.bar.bar-ani' => '{{VALUE}}',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
			'restly_service_vtwo_CSS_title',
			[
				'label' => esc_html__( 'Title', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_service_vtwo_CSS_title_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-title a' => 'color: {{VALUE}}',
				],
			]
		);
        $this->add_responsive_control(
			'restly_service_vtwo_CSS_title_hcolor',
			[
				'label' => esc_html__( 'Hover Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-title a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_service_vtwo_CSS_title_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-service-v2-title',
			]
		);
		$this->add_responsive_control(
			'restly_service_vtwo_CSS_title_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_service_vtwo_CSS_title_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
			'restly_service_vtwo_CSS_dec',
			[
				'label' => esc_html__( 'Content', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_service_vtwo_CSS_dec_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-content p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_service_vtwo_CSS_dec_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-service-v2-content p',
			]
		);
		$this->add_responsive_control(
			'restly_service_vtwo_CSS_dec_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-content p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_service_vtwo_CSS_dec_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-service-v2-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if($settings['restly_service_v2_select_btn'] == 'page'){
            $link = get_page_link($settings['restly_service_v2_btn_link']);
        }else{
            $link = $settings['restly_service_v2_btn_extra'];
        }
        ob_start();
        ?>
        <div class="restly-service-v2-wrapper">
            <div class="restly-service-v2-inner">
                <div class="restly-service-v2-icon">
                    <i class="<?php echo esc_attr($settings['restly_service_v2_icon']['value']); ?>"></i>
                </div>
                <div class="service-line">
					<span class="bar bar-ani"></span>
				</div>
                <<?php echo esc_attr($settings['restly_service_v2_title_tag']) ?> class="restly-service-v2-title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($settings['restly_service_v2_title']); ?></a></<?php echo esc_attr($settings['restly_service_v2_title_tag']) ?>>
                <div class="restly-service-v2-content">
                    <p><?php echo esc_attr($settings['restly_service_v2_textarea']); ?></p>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_service_v_Widget );