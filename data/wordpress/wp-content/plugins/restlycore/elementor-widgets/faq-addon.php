<?php namespace Elementor;

class restly_faq_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_faq';
    }

    public function get_title() {
        return esc_html__( 'Restly FAQ', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-accordion';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_faq_options',
            [
                'label' => esc_html__( 'Restly FAQ', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_faq_active',
            [
                'label' => esc_html__( 'Active FAQ', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
		$repeater->add_control(
			'restly_faq_title', [
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'What are the questions for data science?' , 'restlycore' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'restly_faq_content', [
				'label' => esc_html__( 'Content', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet ex eget turpis molestie tincidunt vel a massa.' , 'restlycore' ),
				'show_label' => false,
			]
		);
		$this->add_control(
			'restly_faws',
			[
				'label' => esc_html__( 'FAQ List', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'restly_faq_active' => 'yes',
						'restly_faq_title' => esc_html__( 'What are the questions for data science?', 'restlycore' ),
						'restly_faq_content' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet ex eget turpis molestie tincidunt vel a massa.', 'restlycore' ),
					],
                    [
						'restly_faq_active' => 'no',
						'restly_faq_title' => esc_html__( 'What are the questions for data science?', 'restlycore' ),
						'restly_faq_content' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet ex eget turpis molestie tincidunt vel a massa.', 'restlycore' ),
					],
                    [
						'restly_faq_active' => 'no',
						'restly_faq_title' => esc_html__( 'What are the questions for data science?', 'restlycore' ),
						'restly_faq_content' => esc_html__( 'Nam venenatis vehicula orci, at cursus sapien vestibulum et. Donec suscipit porta turpis non malesuada. In sit amet ex eget turpis molestie tincidunt vel a massa.', 'restlycore' ),
					],
				],
				'restly_faq_title' => '{{{ list_title }}}',
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_faq_css',
            [
                'label' => esc_html__( 'Box CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_box_align',
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
                    '{{WRAPPER}} .faq-accordion .accordion-item' => 'text-align: {{VALUE}}',
                    '{{WRAPPER}} .faq-accordion .accordion-button' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_box_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-item' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_faq_css_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .faq-accordion .accordion-item',
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_box_radius',
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
                    '{{WRAPPER}} .faq-accordion .accordion-item' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_faq_css_box_shoadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .faq-accordion .accordion-item',
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_faq_css_title',
            [
                'label' => esc_html__( 'Title CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_faq_css_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .faq-accordion .accordion-button',
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_title_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_faq_css_title_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .faq-accordion .accordion-button',
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_title_radius',
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
                    '{{WRAPPER}} .faq-accordion .accordion-button' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_faq_css_title_shoadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .faq-accordion .accordion-button',
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_faq_css_dec',
            [
                'label' => esc_html__( 'Content CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_faq_css_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .faq-accordion .accordion-body',
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_dec_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-body' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-body' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-body' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_faq_css_icon',
            [
                'label' => esc_html__( 'Icon CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_icon_acolor',
            [
                'label' => esc_html__( 'Active Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .accordion-button.collapse::after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_icon_color',
            [
                'label' => esc_html__( 'Normal Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button.collapsed::after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_icon_size',
            [
                'label' => esc_html__( 'Icon size', 'restlycore' ),
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
                    '{{WRAPPER}} .faq-accordion .accordion-button::after' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'restly_faq_css_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button::after' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_faq_css_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .faq-accordion .accordion-button::after' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="accordion accordion-flush faq-accordion" id="accordionFlushExample">
            <?php $count =0; foreach($settings['restly_faws'] as $faq ) : $count++;
            
            if($faq['restly_faq_active'] == 'yes' ){
                $active = 'collapse';
                $show = 'show';
            }else{
                $active = 'collapsed';
                $show = '';
            }
            ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-<?php echo esc_attr($count); ?>">
                <button class="accordion-button <?php echo esc_attr($active); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq-item-<?php echo esc_attr($count); ?>" aria-expanded="false" aria-controls="faq-item-<?php echo esc_attr($count); ?>">
                   <?php echo esc_html($faq['restly_faq_title']); ?>
                </button>
                </h2>
                <div id="faq-item-<?php echo esc_attr($count); ?>" class="accordion-collapse collapse <?php echo esc_attr($show); ?>" aria-labelledby="faq-<?php echo esc_attr($count); ?>" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body"><?php echo wp_kses_post($faq['restly_faq_content']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
    echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_faq_Widget );