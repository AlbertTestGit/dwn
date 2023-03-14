<?php
namespace Elementor;

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor progress widget.
 *
 * Elementor widget that displays an escalating progress bar.
 *
 * @since 1.0.0
 */
class restly_image_with_shape_v2_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve progress widget name.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'restly_image_Shape2';
    }

    /**
     * Get widget title.
     *
     * Retrieve progress widget title.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Restly image With Shape V2', 'restlycore' );
    }

    public function get_categories() {
        return ['restly'];
    }

    /**
     * Get widget icon.
     *
     * Retrieve progress widget icon.
     *
     * @since 1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-image';
    }
    /**
     * Get widget keywords.
     *
     * Retrieve the list of keywords the widget belongs to.
     *
     * @since 2.1.0
     * @access public
     *
     * @return array Widget keywords.
     */
    public function get_keywords() {
        return ['restly', 'image shape', 'shape'];
    }

    /**
     * Register progress widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {
       
        $this->start_controls_section(
            'shape_settings',
            [
                'label' => esc_html__( 'Image & Shape', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'enable_image_shape',
            [
                'label' => esc_html__( 'Enable Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'shapes2',
            [
                'label' => __( 'Choose Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic'    => [
                    'active' => true,
                ],
            ]
        );
        $repeater->add_responsive_control( 
        'animation2', 
        [
            'label'     => esc_html__( 'Select Animation', 'restlycore' ),
            'type'      => \Elementor\Controls_Manager::SELECT,
            'default'   => 'bounce',
            'options'   => [
                'unset'              => esc_html__( 'None', 'restlycore' ),
                'moveLeftRight'        => esc_html__( 'moveLeftRight', 'restlycore' ),
                'down-up-two'        => esc_html__( 'down-up-two', 'restlycore' ),
                'down-up-one'        => esc_html__( 'down-up-one', 'restlycore' ),
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
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'animation-name: {{VALUE}};-webkit-animation-name: {{VALUE}}',
            ],
        ] );
        $repeater->add_control(
            'animation_time2',
            [
                'label' => esc_html__( 'Duration Time', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0.1,
                        'max' => 30,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'animation-duration: {{SIZE}}s;-webkit-animation-duration: {{SIZE}}s',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_width2',
            [
                'label' => esc_html__( 'Shape Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 600,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_left2',
            [
                'label' => esc_html__( 'Shape Left To Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1920,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_top2',
            [
                'label' => esc_html__( 'Shape Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1920,
                        'max' => 1920,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_zindex2',
            [
                'label' => esc_html__( 'Z index', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' =>0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'z-index: {{SIZE}};',
                ],
            ]
        );
        $repeater->add_responsive_control(
            'shape1_oparicy2',
            [
                'label' => esc_html__( 'Opacity', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1,
                        'step' => 0.1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $repeater->add_responsive_control(
            'shape_display2',
            [
                'label' => esc_html__( 'Dispaly', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'block'  => esc_html__( 'Block', 'restlycore' ),
                    'none'  => esc_html__( 'None', 'restlycore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'display: {{VALUE}};',
                ],
                
            ]
        );
        $this->add_control(
            '_shape_image',
            [
                'label'   => esc_html__( 'Shape List', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'shapes2' => '',
                    ],
                ],
                'condition' => [
                    'enable_image_shape' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'banner_image_css_settings',
            [
                'label' => esc_html__( 'Image', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'image_tabs'
            );
                $this->start_controls_tab(
                    'image_tab',
                    [
                        'label' => __( 'Image', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'image_width',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 1000,
                                'step' => 1,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .mobile' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_radius',
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
                            '{{WRAPPER}} .images-with-shapes .mobile' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'image_shadow',
                        'label' => esc_html__( 'Image Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .images-with-shapes .mobile',
                    ]
                );
                $this->add_responsive_control(
                    'image_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .mobile' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .mobile' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'shape_tab',
                    [
                        'label' => __( 'Shape', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'shape_image_color',
                    [
                        'label' => esc_html__( 'background', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                
                $this->add_responsive_control(
                    'shape_width',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 1000,
                                'step' => 1,
                            ],
                            '%' => [
                                'min' => 0,
                                'max' => 100,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'shape_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap .circle-shape',
                    ]
                );
                $this->add_responsive_control(
                    'image_shape_radius',
                    [
                        'label' => esc_html__( 'Radius', 'restlycore' ),
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
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'border-radius: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_shape_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'image_shape_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .images-with-shapes .circle-shapes-wrap' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }

    /**
     * Render progress widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
		<div class="image-shape-v2-wrapper">
            <div class="why-choose-images images-with-shapes">
                <?php if( $settings['image']['url'] ) : ?>
                    <img class="mobile" src="<?php echo esc_url( $settings['image']['url']); ?>" alt ="<?php echo esc_attr($settings['image']['alt']); ?>" >
                <?php endif; ?>
                <?php 
                if($settings['enable_image_shape'] === 'yes' ) :
                $count = 0; foreach($settings['_shape_image'] as $shape ) :   $count++; 
                ?>
                    <div class="shape list-<?php echo esc_attr($count); ?> elementor-repeater-item-<?php echo esc_attr( $shape['_id'] ) ?>">
                        <?php echo wp_get_attachment_image( $shape['shapes2']['id'], 'full' ); ?>
                    </div>
                <?php endforeach; ?>
                <div class="circle-shapes-wrap">
                    <div class="circle-shape"></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
		<?php
    }
}
Plugin::instance()->widgets_manager->register( new restly_image_with_shape_v2_Widget );