<?php namespace Elementor;

class restly_testimonial_five_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_testimonial_five';
    }

    public function get_title() {
        return esc_html__( 'Restly Testimonial V5', 'restlycore' );
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
            'restly_testimonial_five_sections',
            [
                'label' => esc_html__( 'Restly Testimonial Section', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_testi5_title_tag',
            [
                'label' => esc_html__( 'Title HTML Tag', 'restlycore' ),
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
			'restly_test_v5_title', [
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'David Jon' , 'restlycore' ),
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'restly_test_v5_stitle', [
				'label' => esc_html__( 'Sub Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Founder & CEO' , 'restlycore' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'restly_test_v5_dec', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'restlycore' ),
				'show_label' => false,
			]
		);
        $repeater->add_control(
            'restly_test_v5_img',
            [
                'label' => __( 'Upload Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
		$this->add_control(
			'restly_testi5',
			[
				'label' => esc_html__( 'Items List', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'restly_test_v5_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v5_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v5_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
                    [
						'restly_test_v5_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v5_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v5_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
                    [
						'restly_test_v5_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v5_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v5_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
                    [
						'restly_test_v5_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v5_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v5_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
				],
				'title_field' => '{{{ restly_test_v5_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_five_settings',
            [
                'label' => esc_html__( 'Settings', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_testi5_enable_dot',
            [
                'label' => esc_html__( 'Show Nav', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_testi5_enable_aply',
            [
                'label' => esc_html__( 'Auto Play', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_testi5_auto_speed',
            [
                'label' => esc_html__( 'Auto Play Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1000,
                'max' => 10000,
                'step' => 50,
                'default' => 5000,
            ]
        );
        $this->add_control(
            'restly_testi5_speed',
            [
                'label' => esc_html__( 'Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 5000,
                'step' => 50,
                'default' => 1000,
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'restly_testi5_CSS_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_testi5_CSS_box_align',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-five-wrap' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_testi5_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .testimonial-five-wrap',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_testi5_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-five-wrap',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_testi5_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-five-wrap',
            ]
        );
        $this->add_responsive_control(
            'restly_testi5_CSS_box_radius',
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
                    '{{WRAPPER}} .testimonial-five-wrap' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi5_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-five-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi5_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                
                'selectors' => [
                    '{{WRAPPER}} .testimonial-five-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testi5_CSS_content',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_testi5_tabs'
            );
                $this->start_controls_tab(
                    'restly_testi5_tabs_title',
                    [
                        'label' => __( 'Title', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_title_c',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testi5_title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_testi5_title_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .testi5_title',
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testi5_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testi5_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_testi5_tabs_stitle',
                    [
                        'label' => __( 'Sub Title', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_stitle_c',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .name-designation span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_testi5_stitle_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .name-designation span',
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_stitle_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .name-designation span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_stitle_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .name-designation span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'restly_testi5_tabs_dec',
                    [
                        'label' => __( 'Dec', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_dec_c',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-item p' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_testi5_dec_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .testimonial-five-item p',
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_dec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-item p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_dec_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-item p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_icon_size',
                    [
                        'label' => esc_html__( 'Icon Size', 'restlycore' ),
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
                            '{{WRAPPER}} .testimonial-five-wrap:before' => 'font-size: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_icon_color',
                    [
                        'label' => esc_html__( 'Icon Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap:before' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'restly_testi5_tabs_icon',
                    [
                        'label' => __( 'Nav', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_c',
                    [
                        'label' => esc_html__( 'Icon Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_hc',
                    [
                        'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_bg',
                    [
                        'label' => esc_html__( 'BG Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_hbg',
                    [
                        'label' => esc_html__( 'Hover BG Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow:hover' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_size',
                    [
                        'label' => esc_html__( 'icon Size', 'restlycore' ),
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
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'font-size: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_width',
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
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_height',
                    [
                        'label' => esc_html__( 'Height', 'restlycore' ),
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
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi5_nav_radius',
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
                            '{{WRAPPER}} .testimonial-five-wrap .slick-arrow' => 'border-radius: {{SIZE}}{{UNIT}};',
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
        $unique = rand(1241, 3256);
        if(is_rtl()){
            $rtl = 'true';
        }else{
            $rtl = 'false';
        }
        ob_start();
        ?>
        <script>
			jQuery(document).ready(function($) {
				"use strict";
                if ($('#testimonial5-<?php echo esc_attr($unique); ?>').length) {
                    $('#testimonial5-<?php echo esc_attr($unique); ?>').slick({
                        infinite: true,
                        autoplay: <?php echo json_encode($settings['restly_testi5_enable_aply'] == 'yes' ? true : false) ?>,
                        arrows: <?php echo json_encode($settings['restly_testi5_enable_dot'] == 'yes' ? true : false); ?>,
                        pauseOnHover: false,
                        rtl: <?php echo esc_attr($rtl); ?>,
                        autoplaySpeed: <?php echo json_encode($settings['restly_testi5_auto_speed']); ?>,
                        prevArrow: '<button class="prev"><i class="fas fa-chevron-left"></i></button>',
                        nextArrow: '<button class="next"><i class="fas fa-chevron-right"></i></button>',
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        cssEase: 'linear',
                    });
                }
			});
		</script>
        <div class="restly-testimonial-v5-wrapper">
            <!-- Testimonial Section Start -->
            <div class="testimonial-five">
                <div class="testimonial-five-wrap" id="testimonial5-<?php echo esc_attr($unique); ?>">
                    <?php foreach($settings['restly_testi5'] as $testi ) : ?>
                    <div class="testimonial-five-item">
                        <p><?php echo wp_kses_post($testi['restly_test_v5_dec']); ?></p>
                        <div class="author-description">
                        <img src="<?php echo esc_url($testi['restly_test_v5_img']['url']); ?>" alt="<?php echo esc_attr($testi['restly_test_v5_title']); ?>">
                            <div class="name-designation">
                                <<?php echo esc_attr($settings['restly_testi5_title_tag']); ?> class="testi5_title"><?php echo esc_html($testi['restly_test_v5_title']); ?></<?php echo esc_attr($settings['restly_testi5_title_tag']); ?>>
                                <span><?php echo esc_html($testi['restly_test_v5_stitle']); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_testimonial_five_Widget );