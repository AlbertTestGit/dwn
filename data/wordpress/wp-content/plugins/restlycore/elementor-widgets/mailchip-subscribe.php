<?php namespace Elementor;

class restly_subscribe_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_subscribe';
    }

    public function get_title() {
        return esc_html__( 'Restly Subscribe', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-mail';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_subscribe_options',
            [
                'label' => esc_html__( 'Restly Subscribe', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_select',
            [
                'label' => esc_html__( 'Select Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'Mailchip Link', 'restlycore' ),
                    'two' => esc_html__( 'Shortcode', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_subscribe_link',
            [
                'label' => esc_html__( 'Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '#', 'restlycore' ),
                'show_label' => true,
                'condition' => [
                    'restly_subscribe_select' => 'one',
                ],
            ]
        );
        $this->add_control(
            'restly_subscribe_shortcode',
            [
                'label' => esc_html__( 'Plugin Shortcode', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '#', 'restlycore' ),
                'show_label' => true,
                'condition' => [
                    'restly_subscribe_select' => 'two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_subscribe_input_CSS_options',
            [
                'label' => esc_html__( 'Input CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_input_CSS_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields input[type=email],.restly-subscribe-innter .mc4wp-form-fields input[type=email]::placeholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_input_CSS_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields input[type=email]' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_subscribe_CSS_input_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields input[type=email]',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_CSS_input_radius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields input[type=email]' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_CSS_input_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields input[type=email]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_CSS_input_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields input[type=email]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_subscribe_btn_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS_hbg',
            [
                'label' => esc_html__( 'Hover Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_subscribe_btn_CSS_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_subscribe_btn_CSS_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS__radius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_btn_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-subscribe-innter .mc4wp-form-fields button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="restly-subscribe-wrapper">
            <div class="restly-subscribe-innter">
            <?php if($settings['restly_subscribe_select'] == 'one' ){
                echo '<form action="'.esc_url($settings['restly_subscribe_link']).'" method="post">
                        <div class="mc4wp-form-fields">
                            <input type="email" name="EMAIL" placeholder="'.esc_attr('Your email address','restlycore').'" required="">
                            <button value="submit">'.esc_html('Subscribe','restlycore').'</button>
                        </div>
                    </form>';
            }else{
                echo do_shortcode($settings['restly_subscribe_shortcode']);
            } ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_subscribe_Widget );