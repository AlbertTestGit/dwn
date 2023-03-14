<?php namespace Elementor;

class restly_feature_icon_with_title_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_feature_icon_with_title';
    }

    public function get_title() {
        return esc_html__( 'Restly Feature Icon With Title', 'restlycore' );
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
            'restly_feature_icon_w_title_options',
            [
                'label' => esc_html__( 'Restly Feature Icon', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'restly_feature_icons_type',
			[
			    'label' => esc_html__('feature Icon Type','restlycore'),
			    'type' =>Controls_Manager::CHOOSE,
			    'options' =>[
				  'img' =>[
					'title' =>esc_html__('Image','restlycore'),
					'icon' =>'fa fa-picture-o',
				  ],
				  'icon' =>[
					'title' =>esc_html__('Icon','restlycore'),
					'icon' =>'fa fa-info',
				  ]
			    ],
			    'default' => 'icon',
			]
		);
        $this->add_control(
			'restly_feature_icon_image',
			[
			    'label' => esc_html__('Image icon','restlycore'),
			    'type'=>Controls_Manager::MEDIA,
			    'default' => [
				  'url' => Utils::get_placeholder_image_src(),
			    ],
                'label_block' => true,
			    'condition' => [
				  'restly_feature_icons_type' => 'img',
			    ]
			]
		);
        $this->add_control(
            'restly_feature_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'label_block' => true,
                'condition' => [
                    'restly_feature_icons_type' => 'icon',
                  ]
            ]
        );
        $this->add_control(
            'restly_feature_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Cloud Services', 'restlycore' ),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'restly_feature_title_tag',
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
            'restly_featured_enable_link',
            [
                'label' => esc_html__( 'Enable Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'restly_feature_links_select',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
                'condition' => [
                    'restly_featured_enable_link' => 'yes',
                ],
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'restly_feature_links_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_feature_links_select' => 'extranal',
					'restly_featured_enable_link' => 'yes',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_feature_links_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_feature_links_select' => 'page',
					'restly_featured_enable_link' => 'yes',
				],
				'label_block' => true,
			]
		);
        $this->add_control(
			'restly_feature_links_new_tab',
			[
				'label' => __( 'Open New Window?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
                'condition' => [
                    'restly_featured_enable_link' => 'yes',
                ],
			]
		);
        $this->add_control(
			'restly_feature_links_nofollow',
			[
				'label' => __( 'Add nofollow ?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
                'condition' => [
                    'restly_featured_enable_link' => 'yes',
                ],
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_feature_CSS_box_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_feature_CSS_box_align',
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
                    '{{WRAPPER}} .restly-freature-icon-title-box' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_feature_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-freature-icon-title-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_feature_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-freature-icon-title-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_feature_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-freature-icon-title-box',
            ]
        );
        $this->add_responsive_control(
            'restly_feature_CSS_box_radius',
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
                    '{{WRAPPER}} .restly-freature-icon-title-box' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-freature-icon-title-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-freature-icon-title-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_feature_CSS_content_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_feature_content_tabs'
        );
        $this->start_controls_tab(
            'restly_feature_tabs_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-freature-icon-title-box i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_feature_css_icon_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-freature-icon-title-box i',
                'exclude' => [
                    'letter_spacing',
                    'text_transform',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-freature-icon-title-box i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-freature-icon-title-box i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_feature_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h2.feature-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} h2.feature-title a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_feature_css_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} h2.feature-title',
                'exclude' => [
                    'letter_spacing',
                    'text_transform',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h2.feature-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_feature_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} h2.feature-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        if( $settings['restly_featured_enable_link'] == 'yes' && $settings['restly_feature_links_select'] == 'page' ){
			$link = get_page_link($settings['restly_feature_links_link']);
		}else{
			$link = $settings['restly_feature_links_extra'];
		}
        ob_start();
        ?>
        <div class="restly-featured-icon-title-wrapper">
            <div class="restly-freature-icon-title-box">
                <?php if($settings['restly_feature_icons_type'] == 'img' ) : ?>
                    <div class="restly-feature-img-icon">
                        <?php echo wp_get_attachment_image( $settings['restly_feature_icon_image']['id'], 'thumbnail' ); ?>
                    </div>
                <?php else : ?>
                    <i class="<?php echo esc_attr($settings['restly_feature_icon']['value']); ?>"></i>
                <?php endif; ?>
                <div class="restly-feature-title">
                    <<?php echo esc_attr($settings['restly_feature_title_tag']); ?> class="feature-title">
                        <?php if($settings['restly_featured_enable_link'] == 'yes' ){
                            ?>
                            <a href="<?php echo esc_url($link); ?>" <?php if($settings['restly_feature_links_new_tab'] == 'yes' ) : ?> target="_blank"<?php endif; ?> <?php if($settings['restly_feature_links_nofollow'] == 'yes' ) : ?> rel="nofollow" <?php endif; ?>>
                            <?php 
                        }echo esc_html($settings['restly_feature_title']);if($settings['restly_featured_enable_link'] == 'yes' ){
                            echo '</a>';
                        } ?>
                    </<?php echo esc_attr($settings['restly_feature_title_tag']); ?>>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_feature_icon_with_title_Widget );