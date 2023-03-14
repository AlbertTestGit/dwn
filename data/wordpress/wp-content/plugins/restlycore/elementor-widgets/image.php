<?php namespace Elementor;

class restly_image_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_image';
    }

    public function get_title() {
        return esc_html__( 'Restly image', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-image';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_image_options',
            [
                'label' => esc_html__( 'Restly image', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'restly_image_upload',
			[
				'label' => __( 'Choose Image', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'restly_image_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
				'exclude' => [ 'custom' ],
				'include' => [],
				'default' => 'full',
			]
		);
        $this->add_control(
            'restly_image_show_shape',
            [
                'label' => esc_html__( 'Enable Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_CSS',
            [
                'label' => esc_html__( 'Restly image', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_image_CSS_aligment',
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
                    '{{WRAPPER}} .restly-image' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_CSS_shape1',
            [
                'label' => esc_html__( 'Shape 1', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_image_show_shape' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape1_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .image-shape' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape1_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 86,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape1_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape1_left',
            [
                'label' => esc_html__( 'Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -9,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape1_top',
            [
                'label' => esc_html__( 'Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 42,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_image_CSS_shape2',
            [
                'label' => esc_html__( 'Shape 2', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_image_show_shape' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape2_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .image-shape2' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape2_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 76,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape2' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape2_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 10,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => '%',
                    'size' => 97,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape2' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape2_left',
            [
                'label' => esc_html__( 'Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 13,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape2' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_image_CSS_shape2_top',
            [
                'label' => esc_html__( 'Top', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 13,
                ],
                'selectors' => [
                    '{{WRAPPER}} .image-shape2' => 'top: {{SIZE}}{{UNIT}};',
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
        <div class="restly-image-wrapper">
            <?php if($settings['restly_image_show_shape'] == 'yes' ) : ?>
            <div class="shape image-shape2"></div>
            <div class="image-shape"></div>
            <?php endif; ?>
            <div class="restly-image">
                <?php echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'restly_image_size', 'restly_image_upload' ); ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_image_Widget );