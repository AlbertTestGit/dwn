<?php
use Elementor\Controls_Manager;
use Elementor\Core\Breakpoints\Manager;
use Elementor\Repeater;

/**
 *
 * Multiple images backend controls.
 *
 */
function themepul_section_image_controls( $widget ) {

    $widget->start_controls_section( 'tp_multiple_section_images', array(
        'label' => __( 'Restly Section Images', 'restlycore' ),
        'tab'   => Controls_Manager::TAB_STYLE,
    ) );

    $repeater = new Repeater();

    $repeater->add_responsive_control( 'image', [
        'label'     => __( 'Image', 'restlycore' ),
        'type'      => Controls_Manager::MEDIA,
        'selectors' => [
            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-image: url("{{URL}}");',
        ],
    ] );

    $repeater->add_responsive_control( 'position', [
        'label'     => 'Position',
        'type'      => Controls_Manager::SELECT,
        'options'   => [
            ''              => __( 'Default', 'restlycore' ),
            'center center' => __( 'Center Center', 'restlycore' ),
            'center left'   => __( 'Center Left', 'restlycore' ),
            'center right'  => __( 'Center Right', 'restlycore' ),
            'top center'    => __( 'Top Center', 'restlycore' ),
            'top left'      => __( 'Top Left', 'restlycore' ),
            'top right'     => __( 'Top Right', 'restlycore' ),
            'bottom center' => __( 'Bottom Center', 'restlycore' ),
            'bottom left'   => __( 'Bottom Left', 'restlycore' ),
            'bottom right'  => __( 'Bottom Right', 'restlycore' ),
            'initial'       => __( 'Custom', 'restlycore' ),
        ],
        'selectors' => [
            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{VALUE}};',
        ],
    ] );

    $repeater->add_responsive_control( 'xpos', [
        'label'          => __( 'X Position', 'restlycore' ),
        'type'           => Controls_Manager::SLIDER,
        'size_units'     => ['px', 'em', '%', 'vw'],
        'default'        => [
            'unit' => 'px',
            'size' => 0,
        ],
        'tablet_default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'mobile_default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'range'          => [
            'px' => [
                'min' => -2000,
                'max' => 2000,
            ],
            'em' => [
                'min' => -100,
                'max' => 100,
            ],
            '%'  => [
                'min' => -100,
                'max' => 100,
            ],
            'vw' => [
                'min' => -100,
                'max' => 100,
            ],
        ],
        'selectors'      => [
            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{SIZE}}{{UNIT}} {{ypos.SIZE}}{{ypos.UNIT}}',
        ],
        'condition'      => [
            'position' => ['initial'],
        ],
        'required'       => true,
        'device_args'    => [
            Manager::BREAKPOINT_KEY_TABLET => [
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{SIZE}}{{UNIT}} {{ypos_tablet.SIZE}}{{ypos_tablet.UNIT}}',
                ],
                'condition' => [
                    'position_tablet' => ['initial'],
                ],
            ],
            Manager::BREAKPOINT_KEY_MOBILE => [
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{SIZE}}{{UNIT}} {{ypos_mobile.SIZE}}{{ypos_mobile.UNIT}}',
                ],
                'condition' => [
                    'position_mobile' => ['initial'],
                ],
            ],
        ],
    ] );

    $repeater->add_responsive_control( 'ypos', [
        'label'          => __( 'Y Position', 'restlycore' ),
        'type'           => Controls_Manager::SLIDER,
        'size_units'     => ['px', 'em', '%', 'vh'],
        'default'        => [
            'unit' => 'px',
            'size' => 0,
        ],
        'tablet_default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'mobile_default' => [
            'unit' => 'px',
            'size' => 0,
        ],
        'range'          => [
            'px' => [
                'min' => -800,
                'max' => 800,
            ],
            'em' => [
                'min' => -100,
                'max' => 100,
            ],
            '%'  => [
                'min' => -100,
                'max' => 100,
            ],
            'vh' => [
                'min' => -100,
                'max' => 100,
            ],
        ],
        'selectors'      => [
            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{xpos.SIZE}}{{xpos.UNIT}} {{SIZE}}{{UNIT}}',
        ],
        'condition'      => [
            'position' => ['initial'],
        ],
        'required'       => true,
        'device_args'    => [
            Manager::BREAKPOINT_KEY_TABLET => [
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{xpos_tablet.SIZE}}{{xpos_tablet.UNIT}} {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    'position_tablet' => ['initial'],
                ],
            ],
            Manager::BREAKPOINT_KEY_MOBILE => [
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-position: {{xpos_mobile.SIZE}}{{xpos_mobile.UNIT}} {{SIZE}}{{UNIT}}',
                ],
                'condition' => [
                    'position_mobile' => ['initial'],
                ],
            ],
        ],
    ] );

    $repeater->add_responsive_control( 'size', [
        'label'     => 'Size',
        'type'      => Controls_Manager::SELECT,
        'default'   => '',
        'options'   => [
            ''        => __( 'Default', 'restlycore' ),
            'auto'    => __( 'Auto', 'restlycore' ),
            'cover'   => __( 'Cover', 'restlycore' ),
            'contain' => __( 'Contain', 'restlycore' ),
            'initial' => __( 'Custom', 'restlycore' ),
        ],
        'selectors' => [
            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-size: {{VALUE}};',
        ],
    ] );

    $repeater->add_responsive_control( 'bg_width', [
        'label'       => __( 'Width', 'restlycore' ),
        'type'        => Controls_Manager::SLIDER,
        'size_units'  => ['px', 'em', '%', 'vw'],
        'range'       => [
            'px' => [
                'min' => 0,
                'max' => 1000,
            ],
            '%'  => [
                'min' => 0,
                'max' => 100,
            ],
            'vw' => [
                'min' => 0,
                'max' => 100,
            ],
        ],
        'default'     => [
            'size' => 100,
            'unit' => '%',
        ],
        'required'    => true,
        'selectors'   => [
            '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-size: {{SIZE}}{{UNIT}} auto',
        ],
        'condition'   => [
            'size' => ['initial'],
        ],
        'device_args' => [
            Manager::BREAKPOINT_KEY_TABLET => [
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-size: {{SIZE}}{{UNIT}} auto',
                ],
                'condition' => [
                    'size_tablet' => ['initial'],
                ],
            ],
            Manager::BREAKPOINT_KEY_MOBILE => [
                'selectors' => [
                    '{{WRAPPER}} {{CURRENT_ITEM}}' => 'background-size: {{SIZE}}{{UNIT}} auto',
                ],
                'condition' => [
                    'size_mobile' => ['initial'],
                ],
            ],
        ],
    ] );
    $repeater->add_responsive_control(
        'zindex',
        [
            'label' => esc_html__( 'Z index', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::NUMBER,
            'min' => -1,
            'max' => 999999,
            'step' => 1,
            'selectors'   => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'z-index: {{VALUE}}',
            ],
        ]
    );
    $repeater->add_responsive_control(
        'dispaly',
        [
            'label' => esc_html__( 'Dispaly', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::SELECT,
            'default' => 'block',
            'options' => [
                'none'  => esc_html__( 'None', 'restlycore' ),
                'block' => esc_html__( 'Block', 'restlycore' ),
            ],
            'selectors'   => [
                '{{WRAPPER}} {{CURRENT_ITEM}}' => 'display: {{VALUE}}',
            ],
        ]
    );

    $repeater->add_control(
        'enable_animation',
        [
            'label'        => esc_html__( 'Enable Animation', 'restlycore' ),
            'type'         => \Elementor\Controls_Manager::SWITCHER,
            'label_on'     => esc_html__( 'Show', 'restlycore' ),
            'label_off'    => esc_html__( 'Hide', 'restlycore' ),
            'return_value' => 'yes',
            'default'      => 'yes',
        ]
    );
    $repeater->add_responsive_control( 'animation', [
        'label'     => esc_html__( 'Select Animation', 'restlycore' ),
        'type'      => \Elementor\Controls_Manager::SELECT,
        'default'   => 'bounce',
        'options'   => [
            'unset'              => esc_html__( 'None', 'restlycore' ),
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
        'condition' => [
            'enable_animation' => 'yes',
        ],
    ] );
    $repeater->add_control(
        'animation_time',
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
            'condition' => [
                'enable_animation' => 'yes',
            ],
        ]
    );
    $widget->add_control( 'tp_section_images', [
        'label'         => __( 'Images', 'restlycore' ),
        'type'          => Controls_Manager::REPEATER,
        'fields'        => $repeater->get_controls(),
        'render_type'   => 'template',
        'prevent_empty' => false,
    ] );

    $widget->end_controls_section();

}

add_action( 'elementor/element/section/section_typo/after_section_end', 'themepul_section_image_controls', 100 );

/**
 *
 * Multiple background frontend render
 *
 */
function themepul_before_render_section_images( $widget ) {

    $settings = $widget->get_settings_for_display();

    if ( !empty( $settings['tp_section_images'] ) ) {

        $widget->add_render_attribute( '_wrapper', 'data-tp-section-image', 'yes' );

        foreach ( $settings['tp_section_images'] as $index => $item ) {
            if ( $item['enable_animation'] === 'yes' ) {
                $animation = 'shapeanimation';
            } else {
                $animation = '';
            }
            echo '<div class="' . esc_attr( $animation ) . ' tp-section-image tp-section-image-' . $widget->get_id() . ' elementor-repeater-item-' . esc_attr( $item['_id'] ) . '"></div>';
        }

    }

}

add_action( 'elementor/frontend/section/before_render', 'themepul_before_render_section_images' );

/**
 *
 * Section Image frontend js
 *
 */
function themepul_frontend_enqueue_scripts() {
    wp_enqueue_script( 'tp-shape', plugins_url( 'shape.js', __FILE__ ), array( 'jquery' ), '1.0.0', true );
}

add_action( 'elementor/frontend/after_enqueue_scripts', 'themepul_frontend_enqueue_scripts' );