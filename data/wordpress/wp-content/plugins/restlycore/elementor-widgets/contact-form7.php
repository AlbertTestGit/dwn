<?php namespace Elementor;

class  restly_ctf7_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_ctf7';
    }

    public function get_title() {
        return esc_html__( 'Restly Contact Form 7', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['restly'];
    }
    public function restly_ctf7_forms(){
        $formlist = array();
        $forms_args = array( 'posts_per_page' => -1, 'post_type'=> 'wpcf7_contact_form' );
        $forms = get_posts( $forms_args );
        if( $forms ){
            foreach ( $forms as $form ){
                $formlist[$form->ID] = $form->post_title;
            }
        }else{
            $formlist['0'] = __('Form not found','restlycore');
        }
        return $formlist;
    }
    protected function register_controls() {
        $this->start_controls_section(
            'restly_ctf7_options',
            [
                'label' => esc_html__( 'Restly Contact Form 7', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_ctf7_id',
            [
            'label'       => __( 'Select Form', 'restlycore' ),
            'type'        => Controls_Manager::SELECT,
            'label_block' => true,
            'options'     => $this->restly_ctf7_forms(),
            'default'     => '0',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_ctf7_box',
            [
                'label'     => __( 'Box CSS', 'restlycore' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_box_padding',
            [
                'label' => __( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_box_margin',
            [
                'label' => __( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'restly_ctf7_box_bg',
                'label' => __( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .restly-ctf7s-wrapper',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_box_align',
            [
                'label' => __( 'Alignment', 'restlycore' ),
                'type' => Controls_Manager::CHOOSE,
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
                    'justify' => [
                        'title' => __( 'Justified', 'restlycore' ),
                        'icon' => 'eicon-text-align-justify',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper' => 'text-align: {{VALUE}};',
                ],
                'default' => 'left',
                'separator' =>'before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_ctf7_input',
            [
                'label'     => __( 'Input CSS', 'restlycore' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_ctf7_input_height',
            [
                'label' => __( 'Height', 'restlycore' ),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 150,
                    ],
                ],
                'default' => [
                    'size' => 55,
                ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'height: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_ctf7_input_width',
            [
                'label' => __( 'Width', 'restlycore' ),
                'type'  => Controls_Manager::SLIDER,
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
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'width: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_control(
            'restly_ctf7_input_bg',
            [
                'label'     => __( 'Background Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'restly_ctf7_input_typography',
                'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select',
            ]
        );
        $this->add_control(
            'restly_ctf7_input_text_color',
            [
                'label'     => __( 'Text Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]'   => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]'    => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]'    => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]'   => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'         => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'restly_ctf7_input_placeholder_color',
            [
                'label'     => __( 'Placeholder Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]:-ms-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select'      => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'restly_ctf7_input_border',
                'label' => __( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"], {{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_input_border_radius',
            [
                'label' => __( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_input_padding',
            [
                'label' => __( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_input_margin',
            [
                'label' => __( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="text"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="email"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="url"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="number"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="tel"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap input[type*="date"]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap .wpcf7-select' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_input_icons',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-input:after' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_ctf7_textarea',
            [
                'label'     => __( 'Textarea CSS', 'restlycore' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_ctf7_textarea_height',
            [
                'label' => __( 'Height', 'restlycore' ),
                'type'  => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_ctf7_textarea_width',
            [
                'label' => __( 'Width', 'restlycore' ),
                'type'  => Controls_Manager::SLIDER,
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
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_ctf7_textarea_background',
            [
                'label'     => __( 'Background Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'restly_ctf7_textarea_typography',
                'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea',
            ]
        );
        $this->add_control(
            'restly_ctf7_textarea_text_color',
            [
                'label'     => __( 'Text Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'restly_ctf7_textarea_placeholder_color',
            [
                'label'     => __( 'Placeholder Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea::-webkit-input-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea::-moz-placeholder'  => 'color: {{VALUE}};',
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea:-ms-input-placeholder'  => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'restly_ctf7_textarea_border',
                'label' => __( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_textarea_border_radius',
            [
                'label' => __( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_textarea_padding',
            [
                'label' => __( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_textarea_margin',
            [
                'label' => __( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .wpcf7-form .wpcf7-form-control-wrap textarea' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_ctf7_label_css',
            [
                'label'     => __( 'Label CSS', 'restlycore' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_ctf7_label_bg',
            [
                'label'     => __( 'Background Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label'   => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'restly_ctf7_label_text_color',
            [
                'label'     => __( 'Text Color', 'restlycore' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'restly_ctf7_label_typography',
                'selector' => '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'restly_ctf7_label_border',
                'label' => __( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_label_border_radius',
            [
                'label' => __( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_label_padding',
            [
                'label' => __( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->add_responsive_control(
            'restly_ctf7_label_margin',
            [
                'label' => __( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-ctf7s-wrapper form.wpcf7-form label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator' =>'before',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_ctf7_label',
            [
                'label'     => __( 'Button CSS', 'restlycore' ),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('restly_ctf7_btn_tabs');
            $this->start_controls_tab(
                'restly_ctf7_btn_normal_tab',
                [
                    'label' => __( 'Normal', 'restlycore' ),
                ]
            );
            $this->add_control(
                'restly_ctf7_btn_height',
                [
                    'label' => __( 'Height', 'restlycore' ),
                    'type'  => Controls_Manager::SLIDER,
                    'range' => [
                        'px' => [
                            'max' => 170,
                        ],
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit' => 'height: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_ctf7_btn_width',
                [
                    'label' => __( 'Width', 'restlycore' ),
                    'type'  => Controls_Manager::SLIDER,
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
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit' => 'width: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'restly_ctf7_btn_typography',
                    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-submit',
                ]
            );
            $this->add_control(
                'restly_ctf7_btn_text_color',
                [
                    'label'     => __( 'Text Color', 'restlycore' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit'  => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_ctf7_btn_bg_color',
                [
                    'label'     => __( 'Background Color', 'restlycore' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit'  => 'background-color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_responsive_control(
                'restly_ctf7_btn_padding',
                [
                    'label' => __( 'Padding', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );
            $this->add_responsive_control(
                'restly_ctf7_btn_margin',
                [
                    'label' => __( 'Margin', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%', 'em' ],
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'separator' =>'before',
                ]
            );
            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'restly_ctf7_btn_border',
                    'label' => __( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-submit',
                ]
            );
            $this->add_responsive_control(
                'restly_ctf7_btn_border_radius',
                [
                    'label' => __( 'Border Radius', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                    'separator' =>'before',
                ]
            );
            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'restly_ctf7_btn_box_shadow',
                    'label' => __( 'Box Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-submit',
                ]
            );
            $this->end_controls_tab(); 
            $this->start_controls_tab(
                'restly_ctf7_btn_hover_tab',
                [
                    'label' => __( 'Hover', 'restlycore' ),
                ]
            );
            $this->add_control(
                'restly_ctf7_btnhover_text_color',
                [
                    'label'     => __( 'Text Color', 'restlycore' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit:hover'  => 'color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_control(
                'restly_ctf7_btnhover_background_color',
                [
                    'label'     => __( 'Background Color', 'restlycore' ),
                    'type'      => Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit:hover'  => 'background-color: {{VALUE}};',
                    ],
                ]
            );
            $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'restly_ctf7_btnhover_border',
                    'label' => __( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-submit:hover',
                ]
            );
            $this->add_responsive_control(
                'restly_ctf7_btn_border_hradius',
                [
                    'label' => __( 'Border Radius', 'restlycore' ),
                    'type' => Controls_Manager::DIMENSIONS,
                    'selectors' => [
                        '{{WRAPPER}} .wpcf7-form .wpcf7-submit:hover' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
                    ],
                    'separator' =>'before',
                ]
            );
            $this->add_group_control(
                Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'restly_ctf7_btn_box_hshadow',
                    'label' => __( 'Box Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .wpcf7-form .wpcf7-submit:hover',
                ]
            );
            $this->end_controls_tab(); 
            $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $id = $this->get_id();
        $this->add_render_attribute( 'shortcode', 'id', $settings['restly_ctf7_id'] );
        $shortcode = sprintf( '[contact-form-7 %s]', $this->get_render_attribute_string( 'shortcode' ) );
        ob_start();
        ?>
        <div class="restly-ctf7s-wrapper">
        <?php
            if( !empty( $settings['restly_ctf7_id'] ) ){
                echo do_shortcode( $shortcode ); 
            }else{
                echo '<div class="form_no_select">' .__('Please Select contact form.','restlycore'). '</div>';
            }
        ?>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_ctf7_Widget );