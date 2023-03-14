<?php 
namespace Elementor;

class restly_slider_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_slider';
    }

    public function get_title() {
        return esc_html__( 'Restly Slider', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-slider-album';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {
        //Content tab start
        $this->start_controls_section(
            'restly_slider_options',
            [
                'label' => esc_html__( 'Restly Slider', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
			'restly_slider_image',
			[
				'label' => esc_html__( 'Upload Image', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_control(
			'restly_slider_title', [
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'We secure the World from cyber Threats' , 'restlycore' ),
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'restly_slider_stitle', [
				'label' => esc_html__( 'Sub Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Were the best Protect' , 'restlycore' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'restly_slider_dec', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Phasellus nisl velit, interdum lobortis elit quis, placerat bibendum lorem. Maecenas eget mi quis enim' , 'restlycore' ),
				'show_label' => true,
			]
		);
        $repeater->add_control(
            'restly_slider_btn1_show',
            [
                'label' => esc_html__( 'Enabel Button One', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'restly_slider_btn1_text',
            [
                'label' => esc_html__( 'Button One Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Discover More', 'restlycore' ),
                'condition' => [
                    'restly_slider_btn1_show' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
			'restly_slider_btn1_link',
			[
				'label' => esc_html__( 'Link', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'restlycore' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
                'condition' => [
                    'restly_slider_btn1_show' => 'yes',
                ],
			]
		);
        $repeater->add_control(
            'restly_slider_btn2_show',
            [
                'label' => esc_html__( 'Enabel Button Two', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater->add_control(
            'restly_slider_btn2_text',
            [
                'label' => esc_html__( 'Button Two Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Get Started', 'restlycore' ),
                'condition' => [
                    'restly_slider_btn2_show' => 'yes',
                ],
            ]
        );
        $repeater->add_control(
			'restly_slider_btn2_link',
			[
				'label' => esc_html__( 'Link', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'restlycore' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
				'label_block' => true,
                'condition' => [
                    'restly_slider_btn2_show' => 'yes',
                ],
			]
		);

		$this->add_control(
			'restly_sliders',
			[
				'label' => esc_html__( 'Slider Items', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'restly_slider_title' => esc_html__( 'We secure the World from cyber Threats', 'restlycore' ),
						'restly_slider_stitle' => esc_html__( 'Were the best Protect', 'restlycore' ),
						'restly_slider_dec' => esc_html__( 'Phasellus nisl velit, interdum lobortis elit quis, placerat bibendum lorem. Maecenas eget mi quis enim', 'restlycore' ),
					],
				],
				'title_field' => '{{{ restly_slider_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_slider_settings',
            [
                'label' => esc_html__( 'Slider Settings', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_btn_icon',
            [
                'label' => esc_html__( 'Button one Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'restly_btn_icon2',
            [
                'label' => esc_html__( 'Button Two Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'restly_slider_arrow',
            [
                'label' => esc_html__( 'Enable Arrow Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_slider_speed',
            [
                'label' => esc_html__( 'Slider Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 500,
                'max' => 10000,
                'step' => 100,
                'default' => 5000,
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_slider_animations',
            [
                'label' => esc_html__( 'Slider Animation', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_slider_animation',
            [
                'label'   => esc_html__( 'Select Animation', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'fadeInUp',
                'options'   => [
                    'none'        => esc_html__( 'none', 'restlycore' ),
                    'bounce'            => esc_html__( 'Bounce', 'restlycore' ),
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
                    'lightSpeedInRight'=> esc_html__( 'lightSpeedInRight', 'restlycore' ),
                    'lightSpeedInLeft'=> esc_html__( 'lightSpeedInLeft', 'restlycore' ),
                    'lightSpeedOutRight'=> esc_html__( 'lightSpeedOutRight', 'restlycore' ),
                    'lightSpeedOutLeft'=> esc_html__( 'lightSpeedOutLeft', 'restlycore' ),
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
                    '{{WRAPPER}} .slick-active *' => '-webkit-animation-name: {{VALUE}};',
                    '{{WRAPPER}} .slick-active *' => 'animation-name: {{VALUE}};',
                    
                ],
                
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_slider_content_box_css',
            [
                'label' => esc_html__( 'Content Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cbox_mwidth',
            [
                'label' => esc_html__( 'Max Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 400,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_content_alingment',
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
                    '{{WRAPPER}} .main-slider-content' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cbox_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cbox_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_slider_content_css',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_slider_content_css_tabs'
        );
        $this->start_controls_tab(
            'restly_slider_content_css_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_slider_ctitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .main-slider-content .slider-title',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_ctitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content .slider-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_ctitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content .slider-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_ctitle_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content .slider-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_slider_content_css_stitle',
            [
                'label' => __( 'Sub Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_slider_cstitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .main-slider-content .sub-title',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cstitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content .sub-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cstitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content .sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cstitle_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .main-slider-content .sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_slider_content_css_dec',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_slider_cdec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .slider-dec',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cdec_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .slider-dec' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cdec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .slider-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_cdec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .slider-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_slider_button_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_slider_button_CSS_aligment',
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
                    '{{WRAPPER}} .slider-btns.button .theme-btns' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .slider-btns.button .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .slider-btns.button .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_slider_buttons_tabs'
        );
        $this->start_controls_tab(
            'restly_slider_buttons_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_slider_buttons_Css_typos',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .slider-btns.button .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns.slider-btn1' => 'color: {{VALUE}}',
                    '{{WRAPPER}} a.theme-btns.slider-btn2:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_buttons_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns.slider-btn1' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} a.theme-btns.slider-btn2:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_slider_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .slider-btns.button .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_buttons_Css_nradisu',
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
                    '{{WRAPPER}} .slider-btns.button .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_slider_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .slider-btns.button .theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_slider_buttons_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_slider_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns.slider-btn2' => 'color: {{VALUE}}',
                    '{{WRAPPER}} a.theme-btns.slider-btn1:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_buttons_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns.slider-btn2' => 'background-color: {{VALUE}}',
                    '{{WRAPPER}} a.theme-btns.slider-btn1:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_slider_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .slider-btns.button .theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_buttons_Css_hradisu',
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
                    '{{WRAPPER}} .slider-btns.button .theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_slider_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .slider-btns.button .theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_slider_arrow_CSS_options',
            [
                'label' => esc_html__( 'Arrow Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_icon_c',
            [
                'label' => esc_html__( 'icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_icon_hc',
            [
                'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow:hover' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_icon_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_icon_hbg',
            [
                'label' => esc_html__( 'Hover Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_slider_arrow_size',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .main-slider-wrap .slick-arrow',
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
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
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_height',
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
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_slider_arrow_radius',
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
                    '{{WRAPPER}} .main-slider-wrap .slick-arrow' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $unique = rand(1241, 3256);
        ob_start();
        ?>
        <script>
			jQuery(document).ready(function($) {
				"use strict";
				$('#main-slider-<?php echo esc_attr($unique); ?>').slick({
                    infinite: true,
                    autoplay: true,
                    arrows: <?php echo json_encode( $settings['restly_slider_arrow'] == 'yes' ? true : false ); ?>,
                    pauseOnHover: false,
                    autoplaySpeed: <?php echo json_encode($settings['restly_slider_speed']); ?>,
                    prevArrow: '<button class="prev"><i class="fas fa-angle-left"></i></button>',
                    nextArrow: '<button class="next"><i class="fas fa-angle-right"></i></button>',
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: true,
                    cssEase: 'linear',
                });
			});
		</script>
        <div class="main-slider">
            <div class="main-slider-wrap" id="main-slider-<?php echo esc_attr($unique); ?>">
                <?php foreach($settings['restly_sliders'] as $slider ) : 
                if ( ! empty( $slider['restly_slider_btn1_link']['url'] ) ) {
                    $this->add_link_attributes( 'restly_slider_btn1_link', $slider['restly_slider_btn1_link'] );
                } 
                if ( ! empty( $slider['restly_slider_btn2_link']['url'] ) ) {
                    $this->add_link_attributes( 'restly_slider_btn2_link', $slider['restly_slider_btn2_link'] );
                } 
                ?>
                <div class="main-slider-item">
                    <?php if(!empty($slider['restly_slider_image'])) : ?>
                   <div class="image">
                       <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slider, 'full', 'restly_slider_image' ); ?>
                   </div>
                   <?php endif; ?>
                   <div class="slider-caption">
                       <div class="container">
                            <div class="main-slider-content">
                                <?php if(!empty($slider['restly_slider_stitle'] )) : ?>
                                <span class="sub-title"><?php echo wp_kses_post( $slider['restly_slider_stitle'] ); ?></span>
                                <?php endif; ?>
                                <?php if(!empty($slider['restly_slider_title'] )){
                                    echo '<h2 class="slider-title">'.wp_kses_post( $slider['restly_slider_title'] ).'</h2>';
                                } ?>
                                <?php if(!empty($slider['restly_slider_dec'] )){
                                    echo '<div class="slider-dec">'.wp_kses_post( $slider['restly_slider_dec'] ).'</div>';
                                } ?>
                                <div class="slider-btns button">
                                    <?php if($slider['restly_slider_btn1_show'] == true ) : ?>
                                    <a <?php echo $this->get_render_attribute_string('restly_slider_btn1_link'); ?> class="theme-btns slider-btn1"><?php echo esc_html($slider['restly_slider_btn1_text']); ?> <?php \Elementor\Icons_Manager::render_icon( $settings['restly_btn_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                    <?php endif; ?>
                                    <?php if($slider['restly_slider_btn2_show'] == true ) : ?>
                                    <a <?php echo $this->get_render_attribute_string('restly_slider_btn2_link'); ?> class="theme-btns slider-btn2"><?php echo esc_html($slider['restly_slider_btn2_text']); ?> <?php \Elementor\Icons_Manager::render_icon( $settings['restly_btn_icon2'], [ 'aria-hidden' => 'true' ] ); ?></a>
                                    <?php endif; ?>
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
Plugin::instance()->widgets_manager->register( new restly_slider_Widget );