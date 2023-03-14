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
class restly_home_banner_three_Widget extends \Elementor\Widget_Base {

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
        return 'restly_home_banner3';
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
        return esc_html__( 'Restly Home Banner V3', 'restlycore' );
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
        return 'eicon-banner';
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
        return ['restly', 'home banner', 'banner'];
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
            'banner_settings',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'small_title',
            [
                'label'   => esc_html__( 'Small Title', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Empower your business', 'restlycore' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label'      => esc_html__( 'Title', 'restlycore' ),
                'type'       => \Elementor\Controls_Manager::TEXTAREA,
                'default'    => esc_html__( 'Powerfull Digital Mobile Apps', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_responsive_control(
            'title_tag',
            [
                'label'   => esc_html__( 'Title HTML Tag', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'h2',
                'options' => [
                    'h1'   => esc_html__( 'H1', 'restlycore' ),
                    'h2'   => esc_html__( 'H2', 'restlycore' ),
                    'h3'   => esc_html__( 'H3', 'restlycore' ),
                    'h4'   => esc_html__( 'H4', 'restlycore' ),
                    'h5'   => esc_html__( 'H5', 'restlycore' ),
                    'h6'   => esc_html__( 'H6', 'restlycore' ),
                    'p'    => esc_html__( 'P', 'restlycore' ),
                    'span' => esc_html__( 'span', 'restlycore' ),
                    'div'  => esc_html__( 'Div', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'decription',
            [
                'label'   => esc_html__( 'Description', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::TEXTAREA,
                'rows'    => 10,
                'default' => esc_html__( 'Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', 'restlycore' ),
            ]
        );
        $this->add_control(
            'enable_button1',
            [
                'label'        => esc_html__( 'Enable Button One', 'restlycore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'restlycore' ),
                'label_off'    => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );
        $this->add_control(
            'button_link',
            [
                'label'         => __( 'Link', 'restlycore' ),
                'type'          => \Elementor\Controls_Manager::URL,
                'placeholder'   => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default'       => [
                    'url'         => '',
                    'is_external' => true,
                    'nofollow'    => true,
                ],
                'condition'     => [
                    'enable_button1' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'button_text',
            [
                'label'     => esc_html__( 'Button Text', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => esc_html__( 'Google Play', 'restlycore' ),
                'dynamic'   => [
                    'active' => true,
                ],
                'condition' => [
                    'enable_button1' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'button_icon',
            [
                'label'     => esc_html__( 'Icon', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::ICONS,
                'default'   => [
                    'value'   => 'fab fa-google-play',
                    'library' => 'brands',
                ],
                'condition' => [
                    'enable_button1' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'enable_button2',
            [
                'label'        => esc_html__( 'Enable Button Two', 'restlycore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'restlycore' ),
                'label_off'    => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );
        $this->add_control(
            'website_link2',
            [
                'label'         => __( 'Link', 'restlycore' ),
                'type'          => \Elementor\Controls_Manager::URL,
                'placeholder'   => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default'       => [
                    'url'         => '',
                    'is_external' => true,
                    'nofollow'    => true,
                ],
                'condition'     => [
                    'enable_button2' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'button_text2',
            [
                'label'     => esc_html__( 'Button Text', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => esc_html__( 'Apply Store', 'restlycore' ),
                'dynamic'   => [
                    'active' => true,
                ],
                'condition' => [
                    'enable_button2' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'button_icon2',
            [
                'label'     => esc_html__( 'Icon', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::ICONS,
                'default'   => [
                    'value'   => 'fab fa-google-play',
                    'library' => 'brands',
                ],
                'condition' => [
                    'enable_button2' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'note4',
            [
                'label'     => __( 'Shape Image', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'enable_shape1',
            [
                'label' => esc_html__( 'Enable Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $this->add_control(
            'shape',
            [
                'label' => __( 'Choose Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'dynamic'    => [
                    'active' => true,
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control( 'animation', [
            'label'     => esc_html__( 'Select Animation', 'restlycore' ),
            'type'      => \Elementor\Controls_Manager::SELECT,
            'default'   => 'bounce',
            'options'   => [
                'unset'              => esc_html__( 'None', 'restlycore' ),
                'moveLeftRight'        => esc_html__( 'moveLeftRight', 'restlycore' ),
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
                '{{WRAPPER}} .shape1' => 'animation-name: {{VALUE}};-webkit-animation-name: {{VALUE}}',
            ],
            'condition' => [
                'enable_shape1' => 'yes',
            ],
        ] );
        $this->add_control(
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
                    '{{WRAPPER}} .shape1' => 'animation-duration: {{SIZE}}s;-webkit-animation-duration: {{SIZE}}s',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'shape1_width',
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
                    '{{WRAPPER}} .shape1' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'shape1_left',
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
                    '{{WRAPPER}} .shape1' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'shape1_top',
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
                    '{{WRAPPER}} .shape1' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'shape1_zindex',
            [
                'label' => esc_html__( 'Z index', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 999,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .shape1' => 'z-index: {{SIZE}};',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'shape1_oparicy',
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
                    '{{WRAPPER}} .shape1' => 'opacity: {{SIZE}};',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );

        $this->add_responsive_control(
            'shape_display1',
            [
                'label' => esc_html__( 'Dispaly', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'block'  => esc_html__( 'Block', 'restlycore' ),
                    'none'  => esc_html__( 'None', 'restlycore' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .shape1' => 'display: {{VALUE}};',
                ],
                'condition' => [
                    'enable_shape1' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'container',
            [
                'label' => esc_html__( 'Enable Container', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'banner_image_setting',
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
            'banner_shape_image',
            [
                'label'   => esc_html__( 'Shape List', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'shapes2' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'banner_box_css_settings',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .hero-section-ten',
            ]
        );
        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-section-ten' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .hero-section-ten' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'banner_content_css_settings',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'alignment',
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
                    '{{WRAPPER}} .hero-content-ten' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'content_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .hero-content-ten' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .hero-content-ten' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'content_tabs'
            );
                $this->start_controls_tab(
                    'content_stitle_tab',
                    [
                        'label' => __( 'Small Title', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'stitle_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-content-ten .sub-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'stitle_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-content-ten .sub-title',
                    ]
                );
                $this->add_responsive_control(
                    'stitle_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-content-ten .sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                            '{{WRAPPER}} .hero-content-ten .sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'content_title_tab',
                    [
                        'label' => __( 'Title', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'title_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-content-ten .banner-title' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'title_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-content-ten .banner-title',
                    ]
                );
                $this->add_responsive_control(
                    'title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-content-ten .banner-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                            '{{WRAPPER}} .hero-content-ten .banner-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();

                $this->start_controls_tab(
                    'content_dec_tab',
                    [
                        'label' => __( 'Dec', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'dec_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-content-ten p' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'dec_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-content-ten p',
                    ]
                );
                $this->add_responsive_control(
                    'dec_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-content-ten p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                            '{{WRAPPER}} .hero-content-ten p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'max_width',
                    [
                        'label' => esc_html__( 'Max Width', 'restlycore' ),
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
                            '{{WRAPPER}} .hero-content-ten p' => 'max-width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'banner_button_css_settings',
            [
                'label' => esc_html__( 'Button', 'restlycore' ),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'button_tabs'
            );
                $this->start_controls_tab(
                    'button_one_tab',
                    [
                        'label' => __( 'Button One', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'button_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns',
                    ]
                );
                $this->add_responsive_control(
                    'button_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button_bg',
                    [
                        'label' => esc_html__( 'Background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'button_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns',
                    ]
                );
                $this->add_responsive_control(
                    'button_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'button_shadow',
                        'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns',
                    ]
                );
                $this->add_control(
                    'button_note',
                    [
                        'label' => __( 'Hover Options', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'button_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button_hbg',
                    [
                        'label' => esc_html__( 'Hover Background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns:hover' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'button_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns:hover',
                    ]
                );
                $this->add_responsive_control(
                    'button_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'button_hshadow',
                        'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns:hover',
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'button_two_tab',
                    [
                        'label' => __( 'Button Two', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'button2_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns.style-six',
                    ]
                );
                $this->add_responsive_control(
                    'button2_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                
                $this->add_responsive_control(
                    'button2_bg',
                    [
                        'label' => esc_html__( 'Background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button2_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button2_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'button2_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns.style-six',
                    ]
                );
                $this->add_responsive_control(
                    'button2_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'button2_shadow',
                        'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns.style-six',
                    ]
                );
                $this->add_control(
                    'button2_note',
                    [
                        'label' => __( 'Hover Options', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'button2_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'button2_hbg',
                    [
                        'label' => esc_html__( 'Hover Background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six:hover' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'button2_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns.style-six:hover',
                    ]
                );
                $this->add_responsive_control(
                    'button2_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .hero-btns .theme-btns.style-six:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'button2_hshadow',
                        'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .hero-btns .theme-btns.style-six:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
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
		<div class="hero-section-ten">
            <div class="<?php echo esc_html($settings['container'] == 'yes' ? 'container container-1250' : 'no-container'); ?>">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="hero-content-ten">
                            <?php 
                                if ( !empty( $settings['small_title'] ) ) {
                                    echo '<span class="sub-title">' . esc_html( $settings['small_title'] ) . '</span>';
                                }
                            ?>
                            <?php if(!empty($settings['title'])) : ?>
                                <<?php echo esc_attr($settings['title_tag']); ?> class="banner-title"><?php echo wp_kses_post($settings['title']); ?></<?php echo esc_attr($settings['title_tag']); ?>>
                            <?php endif; ?>
                            <?php if(!empty($settings['decription'])){
                                echo '<p>'.wp_kses_post($settings['decription']).'</p>';
                            } ?>
                            <?php if( $settings['enable_button1'] == 'yes' || $settings['enable_button2'] == 'yes') : ?>
                            <div class="hero-btns">
                                <?php if( $settings['enable_button1'] === 'yes' ) :
                                    if ( ! empty( $settings['button_link']['url'] ) ) {
                                        $this->add_link_attributes( 'button_link', $settings['button_link'] );
                                    }
                                ?>
                                <a <?php echo $this->get_render_attribute_string( 'button_link' ); ?> class="theme-btns prev-icon tran-04"> <?php \Elementor\Icons_Manager::render_icon( $settings['button_icon'], [ 'aria-hidden' => 'true' ] ); echo esc_html( $settings['button_text']);?></a>
                                <?php endif;
                                 if( $settings['enable_button2'] === 'yes' ) :
                                    if ( ! empty( $settings['website_link2']['url'] ) ) {
                                        $this->add_link_attributes( 'website_link2', $settings['website_link2'] );
                                    }
                                ?>
                                <a <?php echo $this->get_render_attribute_string( 'website_link2' ); ?> class="theme-btns prev-icon style-six tran-04"><?php \Elementor\Icons_Manager::render_icon( $settings['button_icon2'], [ 'aria-hidden' => 'true' ] ); echo esc_html( $settings['button_text2']);?></a>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-ten-images images-with-shapes">
                            <img class="mobile" src="<?php echo esc_url( $settings['image']['url']); ?>" alt ="<?php echo esc_attr($settings['image']['alt']); ?>" >
                            <?php $count = 0; foreach($settings['banner_shape_image'] as $shape ) :   $count++; 
                            ?>
                                <div class="shape list-<?php echo esc_attr($count); ?> elementor-repeater-item-<?php echo esc_attr( $shape['_id'] ) ?>">
                                   <?php echo wp_get_attachment_image( $shape['shapes2']['id'], 'full' ); ?>
                                </div>
                            <?php endforeach;?>
                            <div class="circle-shapes-wrap">
                                <div class="circle-shape"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($settings['enable_shape1'] == 'yes') : ?>
            <div class="hero-ten-shapes shape1">
                <?php echo wp_get_attachment_image( $settings['shape']['id'], 'full' ); ?>
            </div>
            <?php endif; ?>
            </div>
		<?php
}
}
Plugin::instance()->widgets_manager->register( new restly_home_banner_three_Widget );