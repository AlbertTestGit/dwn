<?php namespace Elementor;

class restly_job_info_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_job_info';
    }

    public function get_title() {
        return esc_html__( 'Restly Job Info', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-site-identity';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_job_info_options',
            [
                'label' => esc_html__( 'Restly Job Info', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_job_info_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'restly_job_info_label',
            [
                'label' => esc_html__( 'Label', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Location:', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $repeater->add_control(
            'restly_job_info_text',
            [
                'label' => esc_html__( 'Info', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Canada', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_job_infos',
            [
                'label' => esc_html__( 'job Info', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_job_info_icon' => '',
                        'restly_job_info_label' => esc_html('Location','restlycore'),
                        'restly_job_info_text' => esc_html('Canada','restlycore'),
                    ],
                ],
            ]
        );
        $this->add_control(
            'restly_job_info_hading',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Job Information', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_job_info_btn',
            [
                'label' => __( 'Button Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'restly_job_info_btn_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Apply Now', 'restlycore' ),
            ]
        );
        $this->end_controls_section();
        
        $this->start_controls_section(
            'restly_job_info_box_CSS_options',
            [
                'label' => esc_html__( 'Box Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_job_info_align',
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
                    '{{WRAPPER}} .restly-job-info-wrapper' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_job_info_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-job-info-wrapper',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_job_info_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-job-info-wrapper',
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_box_border_radius',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-job-info-wrapper' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_job_info_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-job-info-wrapper',
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_box_padding',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'restly_job_info_CSS_options',
            [
                'label' => esc_html__( 'Contact List', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_tabs_list_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .job-info-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_job_info_CSS_tabs_list_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .job-info-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_tabs_list_m',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .job-info-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_tabs_list_p',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .job-info-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_job_info_CSS_tabs_note_label',
            [
                'label' => __( 'Label CSS', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_tabs_label_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper label' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_job_info_CSS_tabs_label_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-job-info-wrapper label',
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_tabs_label_m',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_tabs_label_p',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_job_info_CSS_tabs_note',
            [
                'label' => __( 'Icon CSS', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper ul li .job-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_job_info_CSS_icon_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 60,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-job-info-wrapper ul li .job-icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
       $this->end_controls_section();
       $this->start_controls_section(
        'restly_job_btn_CSS_options',
        [
            'label' => esc_html__( 'Button CSS', 'restlycore' ),
            'tab'   => Controls_Manager::TAB_STYLE,
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_CSS_margin',
        [
            'label' => esc_html__( 'Margin', 'restlycore' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_CSS_padding',
        [
            'label' => esc_html__( 'Padding', 'restlycore' ),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => [ 'px', '%', 'em' ],
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
        ]
    );
    $this->start_controls_tabs(
        'restly_job_btn_tabs'
    );
    $this->start_controls_tab(
        'restly_job_btn_tabs_normal',
        [
            'label' => __( 'Normal', 'restlycore' ),
            'condition' => [
                'restly_job_btn_vselect' => '1',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Typography::get_type(),
        [
            'name' => 'restly_job_btn_Css_typos',
            'label' => esc_html__( 'Typography', 'restlycore' ),
            'selector' => '{{WRAPPER}} .job-btn .theme-btns',
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_Css_ncolor',
        [
            'label' => esc_html__( 'Color', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns' => 'color: {{VALUE}}',
            ],
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_Css_nbg',
        [
            'label' => esc_html__( 'Background Color', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns' => 'background-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'restly_job_btn_Css_nborder',
            'label' => esc_html__( 'Border', 'restlycore' ),
            'selector' => '{{WRAPPER}} .job-btn .theme-btns',
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_Css_nradisu',
        [
            'label' => esc_html__( 'Border Radius', 'restlycore' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => [ 'px' ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 5,
            ],
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'restly_job_btn_Css_nshadow',
            'label' => esc_html__( 'Shadow', 'restlycore' ),
            'selector' => '{{WRAPPER}} .job-btn .theme-btns',
        ]
    );
    $this->end_controls_tab();
    
    $this->start_controls_tab(
        'restly_job_btn_tabs_hover',
        [
            'label' => __( 'Hover', 'restlycore' ),
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_Css_hcolor',
        [
            'label' => esc_html__( 'Color', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns:hover' => 'color: {{VALUE}}',
            ],
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_Css_hbg',
        [
            'label' => esc_html__( 'Background Color', 'restlycore' ),
            'type' => \Elementor\Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns:hover' => 'background-color: {{VALUE}}',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Border::get_type(),
        [
            'name' => 'restly_job_btn_Css_hborder',
            'label' => esc_html__( 'Border', 'restlycore' ),
            'selector' => '{{WRAPPER}} .job-btn .theme-btns:hover',
        ]
    );
    $this->add_responsive_control(
        'restly_job_btn_Css_hradisu',
        [
            'label' => esc_html__( 'Border Radius', 'restlycore' ),
            'type' => Controls_Manager::SLIDER,
            'size_units' => [ 'px' ],
            'range' => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'px',
                'size' => 5,
            ],
            'selectors' => [
                '{{WRAPPER}} .job-btn .theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
            ],
        ]
    );
    $this->add_group_control(
        \Elementor\Group_Control_Box_Shadow::get_type(),
        [
            'name' => 'restly_job_btn_Css_hshadow',
            'label' => esc_html__( 'Shadow', 'restlycore' ),
            'selector' => '{{WRAPPER}} .job-btn .theme-btns:hover',
        ]
    );
    $this->end_controls_tab();
    $this->end_controls_tabs();
    $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        if ( ! empty( $settings['restly_job_info_btn']['url'] ) ) {
			$this->add_link_attributes( 'restly_job_info_btn', $settings['restly_job_info_btn'] );
		}
        ob_start();
        ?>
        <div class="restly-job-info-wrapper">
            <ul>
                <?php foreach( $settings['restly_job_infos'] as $info ) : ?>
                <li>
                    <div class="job-icon">
                    <?php \Elementor\Icons_Manager::render_icon( $info['restly_job_info_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    </div>
                    <div class="job-info-dec">
                        <?php if(!empty($info['restly_job_info_label'])){
                            echo '<label>'.esc_html($info['restly_job_info_label']).'</label>';
                        } ?>
                        <?php if(!empty($info['restly_job_info_label'])){
                            echo '<p>'.esc_html($info['restly_job_info_text']).'</p>';
                        } ?>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>  
            <div class="job-btn button">
                <a <?php echo $this->get_render_attribute_string( 'restly_job_info_btn' ); ?> class="theme-btns"><?php echo esc_html($settings['restly_job_info_btn_text']); ?></a>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_job_info_Widget );