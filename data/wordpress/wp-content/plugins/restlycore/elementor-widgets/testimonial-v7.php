<?php
namespace Elementor;

class restly_testimonial_v7_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_testimonial_v7';
    }

    public function get_title() {
        return esc_html__( 'Restly Testimonial V7', 'restlycore' );
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
            'testimonial_section_options',
            [
                'label' => esc_html__( 'Section Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'section_stitle',
            [
                'label' => esc_html__( 'Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Testimonials', 'restlycore' ),
            ]
        );
        $this->add_control(
            'section_image',
            [
                'label' => __( 'Sub Title Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'section_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'What Our Clients Say About Our Mobile Apps', 'restlycore' ),
            ]
        );
        $this->add_control(
            'section_title_tag',
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
        $this->start_controls_section(
            'testmonial_item_options',
            [
                'label' => esc_html__( 'Testimonial Items', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'left_image',
            [
                'label' => __( 'Left Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Ebony K. Hedrick' , 'restlycore' ),
				'label_block' => true,
			]
		);
        $repeater->add_control(
			'stitle', [
				'label' => esc_html__( 'Sub Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Designer' , 'restlycore' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'dec', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit volupta tem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed' , 'restlycore' ),
				'show_label' => false,
			]
		);
        $repeater->add_control(
            'img',
            [
                'label' => __( 'Author Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
			'items',
			[
				'label' => esc_html__( 'Items List', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => esc_html__( 'Ebony K. Hedrick', 'restlycore' ),
						'stitle' => esc_html__( 'Web Designer', 'restlycore' ),
						'dec' => esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit volupta tem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed', 'restlycore' ),
					],
                    [
						'title' => esc_html__( 'Ebony K. Hedrick', 'restlycore' ),
						'stitle' => esc_html__( 'Web Designer', 'restlycore' ),
						'dec' => esc_html__( 'Sed ut perspiciatis unde omnis iste natus error sit volupta tem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed', 'restlycore' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);
        $this->add_control(
            'quote',
            [
                'label' => esc_html__( 'Quote Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-quote-right',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'setting_note',
            [
                'label' => __( 'Slide Options Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'loop',
            [
                'label' => esc_html__( 'loop', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'aplay',
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
            'dots',
            [
                'label' => esc_html__( 'Dots', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'nav',
            [
                'label' => esc_html__( 'Nav', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'speed',
            [
                'label' => esc_html__( 'Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 500,
                'max' => 9000,
                'step' => 100,
                'default' => 1000,
            ]
        );
        $this->add_control(
            'aspeed',
            [
                'label' => esc_html__( 'Auto Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 500,
                'max' => 10000,
                'step' => 100,
                'default' => 5000,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testmonial_shape_options',
            [
                'label' => esc_html__( 'Shape image', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'shape1',
            [
                'label' => __( 'Shape Image 1', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_responsive_control(
            'shape1_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonials-shapes .shape.one' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'shape2',
            [
                'label' => __( 'Shape Image 2', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_responsive_control(
            'shape2_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonials-shapes .shape.two' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'shape3',
            [
                'label' => __( 'Shape Image 3', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_responsive_control(
            'shape3_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonials-shapes .shape.three' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'shape4',
            [
                'label' => __( 'Shape Image 4', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_responsive_control(
            'shape4_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonials-shapes .shape.four' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'testmonial_box_css',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .testimonials-area-seven',
            ]
        );
        $this->add_responsive_control(
            'box_after_color',
            [
                'label' => esc_html__( 'After Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonials-area-seven::before' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonials-area-seven' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonials-area-seven' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_title_css_options',
            [
                'label' => esc_html__( 'Section Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .testimonials-area-seven .section-title' => 'width: {{SIZE}}%;',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_title_align',
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
                    '{{WRAPPER}} .testimonials-area-seven .section-title' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_titles_tabs'
        );
        $this->start_controls_tab(
            'testmonial_small_title_tab',
            [
                'label' => __( 'Small Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_stitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .section-title .sub-title-two',
            ]
        );
        $this->add_responsive_control(
            'section_stitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .sub-title-two' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_stitle_margin',
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
            'section_stitle_padding',
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
            'testmonial_title_tab',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'section_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .section-title .section-h2',
            ]
        );
        $this->add_responsive_control(
            'section_title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .section-title .section-h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'section_title_margin',
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
            'section_title_padding',
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
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial7_css_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'content_alignment',
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
                    '{{WRAPPER}} .testimonial-seven-item' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'content_bbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .testimonial-seven-slider',
            ]
        );
        $this->add_responsive_control(
            'content_radius',
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
                    '{{WRAPPER}} .testimonial-seven-slider' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'content_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-seven-slider',
            ]
        );
        $this->add_responsive_control(
            'conten_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .testimonial-seven-slider' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-seven-slider' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'testimonial_tabs'
        );
        $this->start_controls_tab(
            'testimonial_title_tab',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-seven-item .author .title h4',
            ]
        );
        $this->add_responsive_control(
            'title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-seven-item .author .title h4' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .testimonial-seven-item .author .title h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-seven-item .author .title h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_testi6_tnote',
            [
                'label' => __( 'Sub Title Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'stitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .testimonial-seven-item .author .title span',
            ]
        );
        $this->add_responsive_control(
            'stitle_color',
            [
                'label' => esc_html__( 'Sub Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .testimonial-seven-item .author .title span' => 'color: {{VALUE}}',
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
                    '{{WRAPPER}} .testimonial-seven-item .author .title span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .testimonial-seven-item .author .title span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
            $this->start_controls_tab(
                'dec',
                [
                    'label' => __( 'dec', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'dec_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testimonial-seven-item p',
                ]
            );
            $this->add_responsive_control(
                'dec_color',
                [
                    'label' => esc_html__( 'Title Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item p' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'dec_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'dec_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();

            $this->start_controls_tab(
                'testimonial_img',
                [
                    'label' => __( 'Image', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'img_width',
                [
                    'label' => esc_html__( 'Width', 'restlycore' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px' ],
                    'range' => [
                        'px' => [
                            'min' => 30,
                            'max' => 200,
                            'step' => 1,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .image img' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'img_height',
                [
                    'label' => esc_html__( 'Height', 'restlycore' ),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => [ 'px', '%' ],
                    'range' => [
                        'px' => [
                            'min' => 30,
                            'max' => 200,
                            'step' => 1,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .image img' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'img_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'img_marign',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'img_padidng',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
            $this->start_controls_tab(
                'quite_tab',
                [
                    'label' => __( 'Quote', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'quite_typo',
                    'label' => esc_html__( 'Typography', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .testimonial-seven-item .author .icon',
                ]
            );
            $this->add_responsive_control(
                'quite_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .author .icon' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'quite_margin',
                [
                    'label' => esc_html__( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .author .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'quite_padding',
                [
                    'label' => esc_html__( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .testimonial-seven-item .author .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'testimonial7_arrow_options',
            [
                'label' => esc_html__( 'Arrow', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'arrow_tabs'
            );
                $this->start_controls_tab(
                    'arrow_tab',
                    [
                        'label' => __( 'Arrow Icon', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'arrow_icon_color',
                    [
                        'label' => esc_html__( 'Icon Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-seven-slider .slick-arrow' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'arrow_iconh_color',
                    [
                        'label' => esc_html__( 'Icon Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-seven-slider .slick-arrow:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'arrow_bg',
                    [
                        'label' => esc_html__( 'Background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-seven-slider .slick-arrow' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'arrow_hbg',
                    [
                        'label' => esc_html__( 'Hover Background', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-seven-slider .slick-arrow:hover' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'dots_tab',
                    [
                        'label' => __( 'Dots Icon', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'dots_icon_color',
                    [
                        'label' => esc_html__( 'Icon Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-seven-slider .slick-dots li' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'dots_iconh_color',
                    [
                        'label' => esc_html__( 'border Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .testimonial-seven-slider .slick-dots li:after' => 'border-color: {{VALUE}}',
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
        if(!empty( $settings['left_image']['url'] )){
            $class = 'col-md-7';
        }else{
            $class = 'col-md-12';
        }
        ob_start();
        ?>
        <script>
			jQuery(document).ready(function($) {
				"use strict";
                if ($('#testimonial<?php echo esc_attr($unique); ?>').length) {
                    $('#testimonial<?php echo esc_attr($unique); ?>').slick({
                        dots: <?php echo json_encode($settings['dots'] == 'yes' ? true : false ); ?>,
                        infinite: <?php echo json_encode($settings['loop'] == 'yes' ? true : false ); ?>,
                        autoplay: <?php echo json_encode($settings['aplay'] == 'yes' ? true : false ); ?>,
                        autoplaySpeed: <?php echo json_encode( $settings['aspeed']); ?>,
                        arrows: <?php echo json_encode($settings['nav'] == 'yes' ? true : false ); ?>,
                        speed:  <?php echo json_encode( $settings['speed']); ?>,
                        prevArrow: '<button class="prev"><i class="fas fa-chevron-left"></i></button>',
                        nextArrow: '<button class="next"><i class="fas fa-chevron-right"></i></button>',
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    });
                } 
			});
		</script>
        <div class="testimonial-v7-wrapper">
            <div class="testimonials-area-seven">
                <div class="container container-1000">
                    <div class="row justify-content-center">
                        <div class="col-xl-12">
                            <div class="section-title mb-5">
                                <?php if(!empty( $settings['section_stitle'] )) : ?>
                                    <span class="sub-title-two"
                                    <?php if(!empty($settings['section_image']['url'])) : ?>
                                        style="background-image: url(<?php echo esc_url( $settings['section_image']['url'] ); ?>);"
                                    <?php endif; ?>
                                    ><?php echo esc_html( $settings['section_stitle'] ); ?></span>
                                <?php endif; ?>
                                <<?php echo esc_attr($settings['section_title_tag']); ?> class="section-h2"><?php echo wp_kses_post($settings['section_title']); ?></<?php echo esc_attr($settings['section_title_tag']); ?>>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 justify-content-center">
                        <?php if($settings['left_image']['url']) : ?>
                        <div class="col-md-5">
                            <div class="testi-seven-left" style="background-image: url(<?php echo esc_url($settings['left_image']['url']); ?>);"></div>
                        </div>
                        <?php endif; ?>
                        <div class="<?php echo esc_attr($class); ?>">
                            <div class="testimonial-seven-slider" id="testimonial<?php echo esc_attr($unique); ?>">
                                <?php foreach($settings['items'] as $item ) : ?>
                                <div class="testimonial-seven-item">
                                    <div class="image">
                                        <?php echo wp_get_attachment_image( $item['img']['id'], 'full' ); ?>
                                    </div>
                                    <p><?php echo wp_kses_post($item['dec']); ?></p>
                                    <div class="author">
                                        <div class="icon"><?php \Elementor\Icons_Manager::render_icon( $settings['quote'], [ 'aria-hidden' => 'true' ] ); ?></div>
                                        <div class="title">
                                            <h4><?php echo esc_html($item['title']); ?></h4>
                                            <span><?php echo esc_html($item['stitle']); ?>r</span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonials-shapes rmb-20">
                    <?php if($settings['shape1']['url']) : ?>
                        <img class="shape one" src="<?php echo esc_url($settings['shape1']['url']); ?>" alt="<?php echo esc_url($settings['shape1']['alt']); ?>">
                    <?php endif; ?>
                    
                    <?php if($settings['shape2']['url']) : ?>
                        <img class="shape two" src="<?php echo esc_url($settings['shape2']['url']); ?>" alt="<?php echo esc_url($settings['shape2']['alt']); ?>">
                    <?php endif; ?>

                    <?php if($settings['shape1']['url']) : ?>
                        <img class="shape three" src="<?php echo esc_url($settings['shape3']['url']); ?>" alt="<?php echo esc_url($settings['shape3']['alt']); ?>">
                    <?php endif; ?>

                    <?php if($settings['shape1']['url']) : ?>
                        <img class="shape four" src="<?php echo esc_url($settings['shape4']['url']); ?>" alt="<?php echo esc_url($settings['shape3']['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_testimonial_v7_Widget );