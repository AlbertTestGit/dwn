<?php
namespace Elementor;

class restly_Animation_shape_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_Animation_shape';
    }

    public function get_title() {
        return esc_html__( 'Restly Shape Animation', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-handle';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_Animation_shape_options',
            [
                'label' => esc_html__( 'Restly Animation Shape 1', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_shape1_enable',
            [
                'label' => esc_html__( 'Enable Shape', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_shape_select',
            [
                'label'   => esc_html__( 'Select Animation', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
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
                'condition' => [
                    'restly_shape1_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_shape_img',
            [
                'label'   => __( 'Choose Image', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_shape1_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_Animation_shape2_options',
            [
                'label' => esc_html__( 'Restly Animation Shape 2', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                
            ]
        );
        $this->add_control(
            'restly_shape2_enable',
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
            'restly_shape2_select',
            [
                'label'   => esc_html__( 'Select Animation', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
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
                'condition' => [
                    'restly_shape2_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_shape_img2',
            [
                'label'   => __( 'Choose Image', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_shape2_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_Animation_shape3_options',
            [
                'label' => esc_html__( 'Restly Animation Shape 3', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                
            ]
        );
        $this->add_control(
            'restly_shape3_enable',
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
            'restly_shape3_select',
            [
                'label'   => esc_html__( 'Select Animation', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'shapeMover',
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
                'condition' => [
                    'restly_shape3_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_shape_img3',
            [
                'label'   => __( 'Choose Image', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_shape3_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'restly_Animation_shape_css_options',
            [
                'label' => esc_html__( 'CSS Shape 1', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_shape1_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape1' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape_left',
            [
                'label' => esc_html__( 'Left To Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape1' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 100,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_Animation_shape2_css_options',
            [
                'label' => esc_html__( 'CSS Shape 2', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_shape2_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape2_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape2' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape2_left',
            [
                'label' => esc_html__( 'Left To Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape2' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape2_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 100,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'restly_Animation_shape3_css_options',
            [
                'label' => esc_html__( 'CSS Shape 3', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_shape3_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape3_top',
            [
                'label' => esc_html__( 'Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape3' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape3_left',
            [
                'label' => esc_html__( 'Left To Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => -1000,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => -100,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 100,
                ],
                'selectors'  => [
                    '{{WRAPPER}} .shapeanimation.shape3' => 'left: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_shape3_duration',
            [
                'label' => esc_html__( 'Animation Duration', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 's' ],
                'range' => [
                    's' => [
                        'min' => 0.1,
                        'max' => 100,
                        'step' => 0.1,
                    ]
                ],
                'default' => [
                    'unit' => 's',
                    'size' => 9,
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <?php 
        ob_start();
        if($settings['restly_shape1_enable'] == 'yes'){
            echo '<img src="'.esc_url($settings['restly_shape_img']['url']).'" alt="'.esc_attr('Restly Shape','restlycore').'" class="bubbleMover shapeanimation shape1" style="-webkit-animation-name:'.esc_attr($settings['restly_shape_select']).';
            animation-name: '.esc_attr($settings['restly_shape_select']).'; animation-duration:'.esc_attr($settings['restly_shape_duration']['size']).'s;-webkit-animation-duration:'.esc_attr($settings['restly_shape_duration']['size']).'s">';
        }
        if($settings['restly_shape2_enable'] == 'yes'){
            echo '<img src="'.esc_url($settings['restly_shape_img2']['url']).'" alt="'.esc_attr('Restly Shape','restlycore').'" class="bubbleMover shapeanimation shape2" style="-webkit-animation-name:'.esc_attr($settings['restly_shape2_select']).';
            animation-name: '.esc_attr($settings['restly_shape2_select']).'; animation-duration:'.esc_attr($settings['restly_shape2_duration']['size']).'s;-webkit-animation-duration:'.esc_attr($settings['restly_shape2_duration']['size']).'s">';
        }
        if($settings['restly_shape3_enable'] == 'yes'){
            echo '<img src="'.esc_url($settings['restly_shape_img3']['url']).'" alt="'.esc_attr('Restly Shape','restlycore').'" class="bubbleMover shapeanimation shape3" style="-webkit-animation-name:'.esc_attr($settings['restly_shape3_select']).';
            animation-name: '.esc_attr($settings['restly_shape3_select']).'; animation-duration:'.esc_attr($settings['restly_shape3_duration']['size']).'s;-webkit-animation-duration:'.esc_attr($settings['restly_shape3_duration']['size']).'s">';
        }
       
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_Animation_shape_Widget );