<?php
namespace Elementor;

class restly_dot_shape_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_dot_shape';
    }

    public function get_title() {
        return esc_html__( 'Restly Dot Shape', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-apps';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_dots_shape_options',
            [
                'label' => esc_html__( 'Animation', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_dots_animation_enable',
            [
                'label'     => esc_html__( 'Enable Animation', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::SWITCHER,
                'label_on'  => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_dots_shape_select',
            [
                'label'     => esc_html__( 'Select Animation', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::SELECT,
                'default'   => 'shapeMover',
                'options'   => [
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
                    '{{WRAPPER}} .shapeanimation' => 'animation-name: {{VALUE}};',
                ],
                'condition' => [
                    'restly_dots_animation_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_dots_shape_duration',
            [
                'label'      => esc_html__( 'Animation Duration', 'restlycore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['s'],
                'range'      => [
                    's' => [
                        'min'  => 0.1,
                        'max'  => 100,
                        'step' => 0.1,
                    ],
                ],
                'default'    => [
                    'unit' => 's',
                    'size' => 9,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation' => '-webkit-animation-duration: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .shapeanimation' => 'animation-duration: {{SIZE}}{{UNIT}};',
                ],
                'condition'  => [
                    'restly_dots_animation_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_dot_shape_CSS',
            [
                'label' => esc_html__( 'Dot Shape', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_dot_shape_width',
            [
                'label'      => esc_html__( 'Width', 'restlycore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['em', 'px'],
                'range'      => [
                    'em' => [
                        'min'  => 2,
                        'max'  => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min'  => 10,
                        'max'  => 800,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'em',
                    'size' => 20,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_dot_shape_height',
            [
                'label'      => esc_html__( 'Height', 'restlycore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['em', 'px'],
                'range'      => [
                    'em' => [
                        'min'  => 2,
                        'max'  => 200,
                        'step' => 1,
                    ],
                    'px' => [
                        'min'  => 10,
                        'max'  => 800,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'em',
                    'size' => 20,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_dot_shape_top',
            [
                'label'      => esc_html__( 'Position Top To Bottom', 'restlycore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -1000,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_dot_shape_left',
            [
                'label'      => esc_html__( 'Position Left To Right', 'restlycore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -1000,
                        'max'  => 1000,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'restly_dot_shape_size',
            [
                'label'      => esc_html__( 'Dot Size', 'restlycore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 10,
                        'max'  => 40,
                        'step' => 1,
                    ],
                ],
                'default'    => [
                    'unit' => 'px',
                    'size' => 18,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => '-webkit-mask-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_dot_shape_color',
            [
                'label'     => esc_html__( 'Color', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .dot-shapes.shape_dots' => 'background: {{VALUE}}',
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
        <div class="dot-shapes shape_dots dot-animate shapeanimation"></div>
        <?php
echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_dot_shape_Widget );