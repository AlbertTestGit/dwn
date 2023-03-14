<?php
namespace Elementor;

class restly_nft_work_progress_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_nft_work_progress';
    }

    public function get_title() {
        return esc_html__( 'Restly NFT Work Progress', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-cogs-check';
    }

    public function get_categories() {
        return ['restlynft'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_nft_work_progress_options',
            [
                'label' => esc_html__( 'NFT Work Progress', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_nft_workprogress_icons_type',
            [
                'label'   => esc_html__( 'Icon Type', 'restlycore' ),
                'type'    => Controls_Manager::CHOOSE,
                'options' => [
                    'img'  => [
                        'title' => esc_html__( 'Image', 'restlycore' ),
                        'icon'  => 'eicon-image-hotspot',
                    ],
                    'icon' => [
                        'title' => esc_html__( 'Icon', 'restlycore' ),
                        'icon'  => 'eicon-plus',
                    ],
                ],
                'default' => 'icon',
            ]
        );
        $this->add_control(
            'restly_nft_workprogress_icon_image',
            [
                'label'       => esc_html__( 'Image icon', 'restlycore' ),
                'type'        => Controls_Manager::MEDIA,
                'default'     => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'label_block' => true,
                'condition'   => [
                    'restly_nft_workprogress_icons_type' => 'img',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_workprogress_icon',
            [
                'label'       => esc_html__( 'Icon', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'condition'   => [
                    'restly_nft_workprogress_icons_type' => 'icon',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_workprogress_title',
            [
                'label'   => esc_html__( 'Title', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Set Up Your Wallet', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_nft_workprogress_title_tag',
            [
                'label'       => esc_html__( 'HTML Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type'        => \Elementor\Controls_Manager::SELECT,
                'default'     => 'h3',
                'options'     => [
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
            'restly_nft_workprogress_dec',
            [
                'label'      => esc_html__( 'Description', 'restlycore' ),
                'type'       => \Elementor\Controls_Manager::TEXTAREA,
                'default'    => esc_html__( 'Praesent euismod eu elit id maximus. Donec', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_nft_workprogress_number',
            [
                'label'   => esc_html__( 'Number', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '01', 'restlycore' ),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_nft_work_processcss_box',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_work_processbox_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_work_processbox_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_work_processbox_aligment',
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
                            'right' => [
                                'title' => __( 'Right', 'restlycore' ),
                                'icon' => 'eicon-text-align-right',
                            ],
                        ],
                        'default' => 'left',
                        'toggle' => true,
                        'selectors' => [
                            '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_work_processbox_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_work_processbox_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_work_processbox_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_work_processbox_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_work_processbox_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_work_processbox_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_work_processbox_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_work_processbox_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_work_processbox_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_work_processbox_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_work_processbox_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_work_process_css_icon',
            [
                'label' => esc_html__( 'Icon Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        // Options for Font Icons
        $this->add_responsive_control(
            'restly_nft_workpi_color',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover .icon-number .icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_hbg',
            [
                'label' => esc_html__( 'Hover Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover .icon-number .icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_icon_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_nft_workpi_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_nft_workpi_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_workpi_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_work_process_content',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_nft_work_process_content_tabs'
        );
        $this->start_controls_tab(
            'restly_nft_work_process_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_work_process_title_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .nft-workp-title',
                
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processtitle_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .nft-workp-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processtitle_css_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover .nft-workp-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processtitle_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .nft-workp-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processtitle_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .nft-workp-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_nft_work_process_css_tabs_dec',
            [
                'label' => __( 'Decription', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_work_process_dec_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five p',
                
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_process_dec_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_process_dec_css_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processitem_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processitem_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_nft_work_processcss_tabs_number',
            [
                'label' => __( 'Number', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_work_processnuner_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .number',
            ]
        );
        
        $this->add_responsive_control(
            'restly_nft_work_process_nuner_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processnuner_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five:hover .icon-number .number' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processnuner_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .number' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_work_processnuner_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-nft-wprcess .work-progress-item-five .icon-number .number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="restly-nft-wprcess">
            <div class="work-progress-item-five">
                <div class="icon-number">
                    <div class="icon">
                        <?php if($settings['restly_nft_workprogress_icons_type'] == 'icon' ){
                            \Elementor\Icons_Manager::render_icon( $settings['restly_nft_workprogress_icon'], [ 'aria-hidden' => 'true' ] );
                        }else{
                            $this->add_render_attribute( 'restly_nft_workprogress_icon_image', 'src', $settings['restly_nft_workprogress_icon_image']['url'] );
                            $this->add_render_attribute( 'restly_nft_workprogress_icon_image', 'alt', \Elementor\Control_Media::get_image_alt( $settings['restly_nft_workprogress_icon_image'] ) );
                            $this->add_render_attribute( 'restly_nft_workprogress_icon_image', 'title', \Elementor\Control_Media::get_image_title( $settings['restly_nft_workprogress_icon_image'] ) );
                            $this->add_render_attribute( 'restly_nft_workprogress_icon_image', 'class', 'my-custom-class' );
                            echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'restly_nft_workprogress_icon_image' );
                        } ?>
                    </div>
                    <?php if(!empty($settings['restly_nft_workprogress_number'])){
                        echo '<span class="number">'.esc_html($settings['restly_nft_workprogress_number']).'</span>';
                    }?>
                </div>
                <<?php echo esc_attr($settings['restly_nft_workprogress_title_tag']); ?> class="nft-workp-title"><?php echo wp_kses_post($settings['restly_nft_workprogress_title']); ?></<?php echo esc_attr($settings['restly_nft_workprogress_title_tag']); ?>>
                <?php if(!empty($settings['restly_nft_workprogress_dec'])){
                    echo '<p>'.wp_kses_post($settings['restly_nft_workprogress_dec']).'</p>';
                }?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_nft_work_progress_Widget );