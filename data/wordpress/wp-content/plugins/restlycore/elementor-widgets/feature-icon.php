<?php namespace Elementor;

class restly_feature_icon extends Widget_Base {

    public function get_name() {

        return 'restly_feature_icon';
    }

    public function get_title() {
        return esc_html__( 'Restly Feature Icon v2', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-icon-box';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'feature_icon_options',
            [
                'label' => esc_html__( 'Restly Feature Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
					'value' => 'fas fa-check',
					'library' => 'fa-solid',
				],
                'label_block' => true,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Cloud Services', 'restlycore' ),
                'label_block' => true,
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->add_control(
            'title_tag',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h2',
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
            'link',
            [
                'label' => __( 'Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'dynamic' => [
                    'active' => true,
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_box_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .feature-item-four' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'box_align',
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
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->start_controls_tabs(
            'box_tabs'
        );
            $this->start_controls_tab(
                'box_normal',
                [
                    'label' => __( 'Normal', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'box_bg',
                    'label' => esc_html__( 'Background', 'restlycore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .feature-item-four',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'box_border',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four',
                ]
            );
            $this->add_responsive_control(
                'box_radius',
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
                        '{{WRAPPER}} .feature-item-four' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_shadow',
                    'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four',
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'box_hover',
                [
                    'label' => __( 'Hover', 'restlycore' ),
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Background::get_type(),
                [
                    'name' => 'box_hbg',
                    'label' => esc_html__( 'Background', 'restlycore' ),
                    'types' => [ 'classic', 'gradient', 'video' ],
                    'selector' => '{{WRAPPER}} .feature-item-four:hover',
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'box_hborder',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four:hover',
                ]
            );
            $this->add_responsive_control(
                'box_hradius',
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
                        '{{WRAPPER}} .feature-item-four:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'box_hshadow',
                    'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four:hover',
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'feature_icon_style',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'icon_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .feature-item-four .icon',
            ]
        );
        $this->add_responsive_control(
            'icon_marign',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'icon_tabs'
        );
            $this->start_controls_tab(
                'icon_normal',
                [
                    'label' => __( 'Normal', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'icon_color',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .feature-item-four .icon' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'icon_bg',
                [
                    'label' => esc_html__( 'Background', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .feature-item-four .icon' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'icon_border',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four .icon',
                ]
            );
            $this->add_responsive_control(
                'icon_radius',
                [
                    'label' => esc_html__( 'icon Radius', 'restlycore' ),
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
                        '{{WRAPPER}} .feature-item-four .icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'icon_shadow',
                    'label' => esc_html__( 'Icon Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four .icon',
                ]
            );
            $this->end_controls_tab();
            
            $this->start_controls_tab(
                'icon_hover',
                [
                    'label' => __( 'Hover', 'restlycore' ),
                ]
            );
            $this->add_responsive_control(
                'icon_hcolor',
                [
                    'label' => esc_html__( 'Color', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .feature-item-four:hover .icon' => 'color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_responsive_control(
                'icon_hbg',
                [
                    'label' => esc_html__( 'Background', 'restlycore' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .feature-item-four:hover .icon' => 'background-color: {{VALUE}}',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'icon_hborder',
                    'label' => esc_html__( 'Border', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four:hover .icon',
                ]
            );
            $this->add_responsive_control(
                'icon_hradius',
                [
                    'label' => esc_html__( 'icon Radius', 'restlycore' ),
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
                        '{{WRAPPER}} .feature-item-four:hover .icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            $this->add_group_control(
                \Elementor\Group_Control_Box_Shadow::get_type(),
                [
                    'name' => 'icon_hshadow',
                    'label' => esc_html__( 'Icon Shadow', 'restlycore' ),
                    'selector' => '{{WRAPPER}} .feature-item-four:hover .icon',
                ]
            );
            $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'feature_title_options',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .feature-item-four .feature-title',
            ]
        );
        $this->add_responsive_control(
            'title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four .feature-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four .feature-title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .feature-item-four .feature-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .feature-item-four .feature-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $settings['link']['url'] ) ) {
            $this->add_link_attributes( 'link', $settings['link'] );
        }
        ob_start();
        ?>
        <div class="restly-featured-icon-title-wrapper">
            <div class="feature-item-four">
                <?php if(!empty($settings['icon'])) : ?>
                <div class="icon">
                    <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                </div>
                <?php endif; ?>
                <<?php echo esc_attr($settings['title_tag']); ?> class="feature-title">
                    <a <?php echo $this->get_render_attribute_string( 'link' ); ?>>
                        <?php echo esc_html($settings['title']); ?>
                    </a>
                </<?php echo esc_attr($settings['title_tag']); ?>>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_feature_icon );