<?php namespace Elementor;

class restly_subscribe_two_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_subscribe_two';
    }

    public function get_title() {
        return esc_html__( 'Restly Subscribe Two', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-mail';
    }

    public function get_categories() {
        return ['restlyhf'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_subscribe_two_options',
            [
                'label' => esc_html__( 'Restly Subscribe', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_subscribe_two_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Newsletter', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_subscribe_two_title_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h4',
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
        $this->add_control(
            'restly_subscribe_two_dec',
            [
                'label' => esc_html__( 'Description', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We’ve been a strategy thought leader for nearly five and', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_select',
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
            'restly_subscribe_two_link',
            [
                'label' => esc_html__( 'Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '#', 'restlycore' ),
                'show_label' => true,
                'condition' => [
                    'restly_subscribe_two_select' => 'one',
                ],
            ]
        );
        $this->add_control(
            'restly_subscribe_two_shortcode',
            [
                'label' => esc_html__( 'Plugin Shortcode', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( '#', 'restlycore' ),
                'show_label' => true,
                'condition' => [
                    'restly_subscribe_two_select' => 'two',
                ],
            ]
        );
        $this->add_control(
            'restly_subscribe_two_icon',
            [
                'label' => esc_html__( 'Button Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fa fa-location-arrow',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_subscribe_two_box_CSS_options',
            [
                'label' => esc_html__( 'Box CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_subscribe_two_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .subscribe-widget',
            ]
        );
        $this->add_control(
            'restly_subscribe_two_box_align',
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
                    '{{WRAPPER}} .subscribe-widget' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .subscribe-widget' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .subscribe-widget' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_subscribe_two_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .subscribe-widget',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_subscribe_two_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .subscribe-widget',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_box_radius',
            [
                'label' => esc_html__( 'Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .subscribe-widget' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_subscribe_two_content_CSS_options',
            [
                'label' => esc_html__( 'Content Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_subscribe_two_tabs'
        );
        $this->start_controls_tab(
            'restly_subscribe_two_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_title_c',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .subscribe-widget .widget-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_subscribe_two_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .subscribe-widget .widget-title',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .subscribe-widget .widget-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .subscribe-widget .widget-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_subscribe_two_tabs_content',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_dec_c',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .company-subscribe-widget p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_subscribe_two_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .company-subscribe-widget p',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .company-subscribe-widget p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .company-subscribe-widget p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_subscribe_two_tabs_input',
            [
                'label' => __( 'Input', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_input_color',
            [
                'label' => esc_html__( 'Text Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email],.mc4wp-form-fields input[type=email]::placeholder' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_subscribe_two_input__typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields input[type=email]',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_input_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_input_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_input_bg',
            [
                'label' => esc_html__( 'background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_input_bc',
            [
                'label' => esc_html__( 'border Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_input_radius',
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
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_subscribe_two_input_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields input[type=email]',
            ]
        );
        $this->add_control(
            'restly_subscribe_two_btn__align',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields input[type=email]' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_subscribe_two_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn__width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn__height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_icon_c',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_icon_hc',
            [
                'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_icon_bgc',
            [
                'label' => esc_html__( 'background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_icon_bghc',
            [
                'label' => esc_html__( 'Icon background Hover', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_subscribe_two_btn_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields button',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_radius',
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
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_subscribe_two_btn_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .mc4wp-form-fields button',
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_subscribe_two_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .mc4wp-form-fields button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        ob_start();
        ?>
        <div class="restly-subscribe-two-wrapper">
            <div class="restly-subscribe-two-innter subscribe-widget">
                <div class="company-subscribe-widget">
                    <?php if(!empty($settings['restly_subscribe_two_title'])){
                    echo'<'.esc_attr($settings['restly_subscribe_two_title_tag']).' class="widget-title">'.esc_html($settings['restly_subscribe_two_title']).'</'.esc_attr($settings['restly_subscribe_two_title_tag']).'>';
                    } ?>
                    <?php if(!empty($settings['restly_subscribe_two_dec'])){
                    echo'<p>'.esc_html($settings['restly_subscribe_two_dec']).'</p>';
                    } ?>
                    <?php if($settings['restly_subscribe_two_select'] == 'one' ) : ?>
                    <div class="subscribe-form">
                        <form action="<?php echo esc_url($settings['restly_subscribe_two_link']); ?>" method="post">
                            <div class="mc4wp-form-fields">
                                <input type="email" name="EMAIL" placeholder="<?php esc_attr_e('Your Email Address','restlycore'); ?>" required="" />
                                <button value="submit"><i class="<?php echo esc_attr($settings['restly_subscribe_two_icon']['value']); ?>"></i></button>
                            </div>
                        </form>
                    </div>
                    <?php else : ?>
                    <div class="subscribe-form">
                        <?php echo do_shortcode($settings['restly_subscribe_two_shortcode']); ?>
                    </div>    
                   <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_subscribe_two_Widget );