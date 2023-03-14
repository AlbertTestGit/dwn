<?php namespace Elementor;

class restly_pricing_tab_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_pricing_tab';
    }

    public function get_title() {
        return esc_html__( 'Restly Pricing Tab', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-tabs';
    }

    public function get_categories() {
        return ['restly'];
    }
    /**
     * Elementor Templates List
     * return array
     */
    public function restly_elementor_template() {
        $templates = Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
        $types     = array();
        if ( empty( $templates ) ) {
            $template_lists = [ '0' => __( 'Do not Saved Templates.', 'restly' ) ];
        } else {
            $template_lists = [ '0' => __( 'Select Template', 'restly' ) ];
            foreach ( $templates as $template ) {
                $template_lists[ $template['template_id'] ] = $template['title'] . ' (' . $template['type'] . ')';
            }
        }
        return $template_lists;
    }
    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_pricing_tab_options',
            [
                'label' => esc_html__( 'Restly Tabs', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_pricing_tab_active',
            [
                'label' => esc_html__( 'Active', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'restly_pricing_tab_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Data Center', 'restlycore' ),
                'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
            ]
        );
        $repeater->add_control(
			'restly_pricing_tab_title_icon',
			[
				'label' => __( 'Title Icons', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_responsive_control(
            'restly_pricing_tab_content_source',
            [
                'label' => esc_html__( 'Content Source', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'custom',
                'options' => [
                    'custom'  => esc_html__( 'Content', 'restlycore' ),
                    'elementor' => esc_html__( 'Template', 'restlycore' ),
                ],
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'template_id',
            [
                'label'     => __( 'Content', 'restly' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => '0',
                'options'   => $this->restly_elementor_template(),
                'condition' => [
                    'restly_pricing_tab_content_source' => "elementor"
                ],
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'restly_pricing_tab_content_custom',
            [
                'label'      => __( 'Content', 'restly' ),
                'type'       => Controls_Manager::WYSIWYG,
                'title'      => __( 'Content', 'restly' ),
                'show_label' => false,
                'condition'  => [
                    'restly_pricing_tab_content_source' => 'custom',
                ],
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'restly_pricing_tab_list',
            [
                'label'   => esc_html__( 'Tabs', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_pricing_tab_title' => '',
                        'restly_pricing_tab_title_icon' => '',
                        'restly_pricing_tab_content_source' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_pricing_static_options',
            [
                'label' => esc_html__( 'Static Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_pricing_static_stitle',
            [
                'label' => esc_html__( 'Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Pricing Packages', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_pricing_static_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Choose best plan', 'restlycore' ),
                'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_pricing_static_dec',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Epsum dolor sit amet consectetur adipisicing 
                seddo eiusmod tempor incididunt labore dolore magna aliqua enim ad minim veniam', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_pricing_static_sdec',
            [
                'label' => esc_html__( 'Sort Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Amet consectetur adipisicing seddo eiusmod tempor incididunt labore dolore', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_pricing_static_btn',
            [
                'label' => esc_html__( 'Show Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'restly_pricing_static_btn_select',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
                'condition' => [
                    'restly_pricing_static_btn' => 'yes',
                ],
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'restly_pricing_static_btn_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_pricing_static_btn_select' => 'extranal',
					'restly_pricing_static_btn' => 'yes',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_pricing_static_btn_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_pricing_static_btn_select' => 'page',
                    'restly_pricing_static_btn' => 'yes',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_pricing_static_btn_text',
			[
				'label' => esc_html__( 'Buttn Text', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'default'	=> esc_html__( 'Meet With Us', 'restlycore' ),
                'condition' => [
                    'restly_pricing_static_btn' => 'yes',
                ],
				'label_block' => true,
			]
		);
        $this->add_control(
			'restly_pricing_static_btn_new_tab',
			[
				'label' => __( 'Open New Window?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
                'condition' => [
                    'restly_pricing_static_btn' => 'yes',
                ],
			]
		);
        $this->add_control(
			'restly_pricing_static_btn_nofollow',
			[
				'label' => __( 'Add nofollow ?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
                'condition' => [
                    'restly_pricing_static_btn' => 'yes',
                ],
			]
		);
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_pricing_static_CSS',
            [
                'label' => esc_html__( 'Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_pricing_static_aligment',
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
                    '{{WRAPPER}} .restly-pricing-static-contnets,.restly-pricing-sort-dec,.restly-button-wrapper,.restly-pricing-tabs-wrapper .nav' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_pricing_static_css_tabs'
        );
        $this->start_controls_tab(
            'restly_pricing_static_css_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_pricing_static_css_tab_stitle_note',
            [
                'label' => __( 'Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_stitle_color',
            [
                'label' => esc_html__( 'Small Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets h4' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_static_css_stitle_tylo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-static-contnets h4',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_stitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_stitle_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets h4' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_pricing_static_css_tab_title_note',
            [
                'label' => __( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets h2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_static_css_title_tylo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-static-contnets h2',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_static_css_tabs_content',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_dec_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_static_css_dec_tylo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-static-contnets p',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-static-contnets p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_pricing_static_css_sort_dec_note',
            [
                'label' => __( 'Shot Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_sort_dec_color',
            [
                'label' => esc_html__( 'Shot Content Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-sort-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_static_css_sort_dec_tylo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-sort-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_sort_dec_margin',
            [
                'label' => esc_html__( 'Shot Content Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-sort-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_sort_dec_padding',
            [
                'label' => esc_html__( 'Shot Content Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-sort-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_static_css_tab',
            [
                'label' => __( 'Tab Menu', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav button' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_acolor',
            [
                'label' => esc_html__( 'Active Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav button.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_pricing_static_css_tab_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav button ',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_static_css_tab_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_radius',
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
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_static_css_tab_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 800,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_pricing_static_css_tab_note',
            [
                'label' => __( 'Button CSS', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_static_css_tab_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-pricing-tabs-wrapper .nav button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_pricing_tab_button_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-button a.theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-button a.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_pricing_tab_buttons_tabs'
        );
        $this->start_controls_tab(
            'restly_pricing_tab_buttons_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-button a.theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_buttons_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-button a.theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_tab_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-button a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_buttons_Css_nradisu',
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
                    '{{WRAPPER}} .restly-button a.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_tab_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-button a.theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_pricing_tab_buttons_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-button a.theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_buttons_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-button a.theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_pricing_tab_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-button a.theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_pricing_tab_buttons_Css_hradisu',
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
                    '{{WRAPPER}} .restly-button a.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_pricing_tab_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-button a.theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $unique = rand(350, 540);
        ob_start();
        ?>

        <div class="restly-pricing-tabs-wrapper">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="restly-pricing-static-contnets">
                        <?php 
                        if(!empty($settings['restly_pricing_static_stitle'])){
                           echo '<h4>'.esc_html($settings['restly_pricing_static_stitle']).'</h4>';
                        }
                        if(!empty($settings['restly_pricing_static_title'])){
                           echo '<h2>'.esc_html($settings['restly_pricing_static_title']).'</h2>';
                        }
                        if(!empty($settings['restly_pricing_static_dec'])){
                           echo '<p>'.esc_html($settings['restly_pricing_static_dec']).'</p>';
                        }
                        ?>
                    </div>
                    <div class="nav nav-pills" id="v-pills-tab-<?php echo esc_attr($unique); ?>" role="tablist" aria-orientation="vertical">
                        <?php $count = 0; foreach($settings['restly_pricing_tab_list'] as $tabist) : $count++;
                        if($tabist['restly_pricing_tab_active'] == 'yes'){
                            $active = 'active';
                        }else{
                            $active = '';
                        }
                        ?>
                        <button class="nav-link <?php echo esc_attr($active); ?>" id="pricing-<?php echo esc_attr($count); ?>-tab" data-bs-toggle="pill" data-bs-target="#pricing-item-<?php echo esc_attr($count); ?>" type="button" role="tab" aria-controls="pricing-item-<?php echo esc_attr($count); ?>" aria-selected="true"><?php if(!empty($tabist['restly_pricing_tab_title_icon'])){echo '<i class="'.esc_attr($tabist['restly_pricing_tab_title_icon']['value']).'"></i>';} ?><?php echo esc_html($tabist['restly_pricing_tab_title']); ?></button>
                        <?php endforeach; ?>
                    </div>
                    <?php if(!empty($settings['restly_pricing_static_stitle'])){ ?>
                    <div class="restly-pricing-sort-dec">
                        <p><?php echo esc_html($settings['restly_pricing_static_sdec']); ?></p>
                    </div>
                    <?php } if($settings['restly_pricing_static_btn'] == 'yes' ) :
                        if($settings['restly_pricing_static_btn_select'] == 'page' ){
                            $link = get_page_link($settings['restly_pricing_static_btn_link']);
                        }else{
                            $link = $settings['restly_pricing_static_btn_extra'];
                        }
                    ?>
                    <div class="restly-button-wrapper">
                        <div class="restly-button">
                            <a href="<?php echo esc_url($link); ?>" class="theme-btns" <?php if($settings['restly_pricing_static_btn_new_tab'] == 'yes' ) : ?> target="_blank" <?php endif; ?> <?php if($settings['restly_pricing_static_btn_nofollow'] == 'yes' ) : ?>  rel="nofollow" <?php endif; ?>><?php echo esc_html($settings['restly_pricing_static_btn_text']); ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="tab-content col-12 col-md-12 col-lg-8" id="v-pills-tabContent-<?php echo esc_attr($unique); ?>">
                    <?php $count = 0; foreach($settings['restly_pricing_tab_list'] as $tabist) : $count++;
                if($tabist['restly_pricing_tab_active'] == 'yes'){
                    $active = 'show active';
                }else{
                    $active = '';
                } 
                ?>
                <div class="tab-pane fade show <?php echo esc_attr($active); ?>" id="pricing-item-<?php echo esc_attr($count); ?>" role="tabpanel" aria-labelledby="pricing-<?php echo esc_attr($count); ?>-tab">
                    <?php 
                    if($tabist['restly_pricing_tab_content_source'] == 'elementor' && !empty( $tabist['template_id'] )){
                    echo Plugin::instance()->frontend->get_builder_content_for_display( $tabist['template_id'] );
                    }else{
                        echo wp_kses_post( $tabist['restly_pricing_tab_content_custom'] );
                    }
                    ?>
                </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_pricing_tab_Widget );