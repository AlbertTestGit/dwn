<?php namespace Elementor;

class restly_testimonial_four_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_testimonial_four';
    }

    public function get_title() {
        return esc_html__( 'Restly Testimonial V4', 'restlycore' );
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
            'restly_testimonial_four_sections',
            [
                'label' => esc_html__( 'Restly Testimonial Section', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_testi4_title_tag',
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
			'restly_test_v4_title', [
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'David Jon' , 'restlycore' ),
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'restly_test_v4_stitle', [
				'label' => esc_html__( 'Sub Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Founder & CEO' , 'restlycore' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'restly_test_v4_dec', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'List Content' , 'restlycore' ),
				'show_label' => false,
			]
		);
        $repeater->add_control(
            'restly_test_v4_img',
            [
                'label' => __( 'Upload Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
		$this->add_control(
			'restly_testi4',
			[
				'label' => esc_html__( 'Items List', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'restly_test_v4_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v4_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v4_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
                    [
						'restly_test_v4_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v4_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v4_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
                    [
						'restly_test_v4_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v4_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v4_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
                    [
						'restly_test_v4_title' => esc_html__( 'David Jon', 'restlycore' ),
						'restly_test_v4_stitle' => esc_html__( 'Founder & CEO', 'restlycore' ),
						'restly_test_v4_dec' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet', 'restlycore' ),
					],
				],
				'title_field' => '{{{ restly_test_v4_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testimonial_four_settings',
            [
                'label' => esc_html__( 'Settings', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_testimonial_four_slide_enable',
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
            'restly_testi4_enable_dot',
            [
                'label' => esc_html__( 'Show DOT', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'restly_testimonial_four_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_testi4_enable_aply',
            [
                'label' => esc_html__( 'Auto Play', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'restly_testimonial_four_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_testi4_auto_speed',
            [
                'label' => esc_html__( 'Auto Play Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1000,
                'max' => 10000,
                'step' => 50,
                'default' => 5000,
                'condition' => [
                    'restly_testimonial_four_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_testi4_speed',
            [
                'label' => esc_html__( 'Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 5000,
                'step' => 50,
                'default' => 1000,
                'condition' => [
                    'restly_testimonial_four_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi4_dot_active_c',
            [
                'label' => esc_html__( 'Active Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-four-active .slick-dots li.slick-active' => 'border-color: {{VALUE}}',
                    '{{WRAPPER}} .testimonial-four-active .slick-dots li:before' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_testimonial_four_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi4_dot_c',
            [
                'label' => esc_html__( 'Normal Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-four-active .slick-dots li' => 'border-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_testimonial_four_slide_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'restly_testi4_CSS_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_testi4_CSS_box_align',
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
                    '{{WRAPPER}} .testimonial-four-item' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_testi4_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .testimonial-four-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_testi4_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-four-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_testi4_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-four-item',
            ]
        );
        $this->add_responsive_control(
            'restly_testi4_CSS_box_radius',
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
                    '{{WRAPPER}} .testimonial-four-item' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi4_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-four-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_testi4_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                
                'selectors' => [
                    '{{WRAPPER}} .testimonial-four-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_testi4_CSS_content',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_testi4_tabs'
            );
                $this->start_controls_tab(
                    'restly_testi4_tabs_title',
                    [
                        'label' => __( 'Title', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_title_c',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testi4_title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_testi4_title_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .testi4_title',
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testi4_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testi4_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_testi4_tabs_stitle',
                    [
                        'label' => __( 'Sub Title', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_stitle_c',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-author span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_testi4_stitle_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .testimonial-four-author span',
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_stitle_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-author span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_stitle_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-author span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'restly_testi4_tabs_dec',
                    [
                        'label' => __( 'Dec', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_dec_c',
                    [
                        'label' => esc_html__( 'Title Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-content' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_testi4_dec_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .testimonial-four-content',
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_dec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_dec_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_icon_size',
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
                            '{{WRAPPER}} .testimonial-four-author:after' => 'font-size: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_testi4_icon_color',
                    [
                        'label' => esc_html__( 'Icon Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-four-author:after' => 'color: {{VALUE}}',
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
        if($settings['restly_testimonial_four_slide_enable'] == 'yes'){
            if(is_rtl()){
                $rtl = 'true';
            }else{
                $rtl = 'false';
            }
            echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
                if ($("#testimonial-'.esc_attr($unique).'").length) {
                    $("#testimonial-'.esc_attr($unique).'").slick({
                        dots: '.json_encode($settings['restly_testi4_enable_dot'] == 'yes' ? true : false).',
                        infinite: true,
                        rtl: '.esc_attr($rtl).',
                        autoplay: '.json_encode($settings['restly_testi4_enable_aply'] == 'yes' ? true : false).',
                        autoplaySpeed: '.json_encode($settings['restly_testi4_auto_speed']).',
                        arrows: false,
                        speed: '.json_encode($settings['restly_testi4_speed']).',
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        responsive: [
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });
                } 
			});
			</script>';
            $testi4class = 'with-slide';
            $trow = 'no-row';
        }else{
            $testi4class = 'col-lg-4 col-sm-6 mb-4';
            $trow = 'row';
        }
        ob_start();
        ?>
        <div class="restly-testimonial-v4-wrapper">
            <div class="testimonial-four-active <?php echo esc_attr($trow); ?>" id="testimonial-<?php echo esc_attr($unique); ?>">
                <?php foreach($settings['restly_testi4'] as $testi ) : ?>
                <div class="<?php echo esc_attr($testi4class); ?>">
                    <div class="testimonial-four-item">
                        <div class="testimonial-four-content">
                            <p><?php echo wp_kses_post($testi['restly_test_v4_dec']); ?></p>
                        </div>
                        <div class="testimonial-four-author">
                            <img src="<?php echo esc_url($testi['restly_test_v4_img']['url']); ?>" alt="<?php echo esc_attr($testi['restly_test_v4_title']); ?>">
                            <div class="testimonial-four-author-designation">
                                <<?php echo esc_attr($settings['restly_testi4_title_tag']); ?> class="testi4_title"><?php echo esc_html($testi['restly_test_v4_title']); ?></<?php echo esc_attr($settings['restly_testi4_title_tag']); ?>>
                                <span><?php echo esc_html($testi['restly_test_v4_stitle']); ?></span>
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
Plugin::instance()->widgets_manager->register( new restly_testimonial_four_Widget );