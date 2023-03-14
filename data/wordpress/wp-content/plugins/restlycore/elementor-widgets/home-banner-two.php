<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor progress widget.
 *
 * Elementor widget that displays an escalating progress bar.
 *
 * @since 1.0.0
 */
class restly_home_banner2_Widget extends \Elementor\Widget_Base {

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
		return 'restly-home-banner-two';
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
		return esc_html__( 'Restly Home Banner Two', 'restlycore' );
	}

    
	public function get_categories() {
		return [ 'restly' ];
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
		return [ 'restly', 'home banner Two' ];
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
			'restly_home_banner2_section',
			[
				'label' => esc_html__( 'Content', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
            'restly_home_banner2_image',
            [
                'label' => esc_html__('Image','restlycore'),
                'type'=>Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
		$this->add_control(
			'restly_home_banner2_stitle',
			[
				'label' => esc_html__( 'Small Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Empower your business', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_stitle_tag',
			[
				'label' => esc_html__( 'Small Title HTML Tag', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h6',
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
			'restly_home_banner2_title',
			[
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Excellent IT services for your success', 'restlycore' ),
				'show_label' => true,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_title_tag',
			[
				'label' => esc_html__( 'Title HTML Tag', 'restlycore' ),
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
			'restly_home_banner2_select_btn',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'restly_home_banner2_btn_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_home_banner2_select_btn' => 'extranal',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner2_btn_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_home_banner2_select_btn' => 'page',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner2_btn_text',
			[
				'label' => esc_html__( 'Buttn Text', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'default'	=> esc_html__( 'Meet With Us', 'restlycore' ),
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'restly_home_banner2_btn2_show',
			[
				'label' => __( 'Enable button Two', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
        $this->add_control(
			'restly_home_banner2_select_btn2',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
				'label_block' => true,
                'condition' => [
                    'restly_home_banner2_btn2_show' => 'yes',
                ],
			]
		);
		
        $this->add_control(
			'restly_home_banner2_btn2_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_home_banner2_select_btn2' => 'extranal',
					'restly_home_banner2_btn2_show' => 'yes',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner2_btn2_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_home_banner2_select_btn2' => 'page',
					'restly_home_banner2_btn2_show' => 'page',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner2_btn2_text',
			[
				'label' => esc_html__( 'Buttn Text', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'default'	=> esc_html__( 'Read More', 'restlycore' ),
				'label_block' => true,
                'condition' => [
                    'restly_home_banner2_btn2_show' => 'yes',
                ],
			]
		);
		$this->add_control(
			'restly_home_banner2_ctf_title',
			[
				'label' => esc_html__( 'Contact Static Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Free Consultation', 'restlycore' ),
				'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_from_title_tag',
			[
				'label' => esc_html__( 'Contact Form Static Title HTML Tag', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h2',
				'options' => [
					'h1'  => esc_html__( 'H1', 'restlycore' ),
					'h2'  => esc_html__( 'H2', 'restlycore' ),
					'h3'  => esc_html__( 'H3', 'restlycore' ),
					'h4'  => esc_html__( 'H4', 'restlycore' ),
					'h5'  => esc_html__( 'H5', 'restlycore' ),
					'h6'  => esc_html__( 'H6', 'restlycore' ),
				],
			]
		);
		$this->add_control(
			'restly_home_banner2_ctf_stitle',
			[
				'label' => esc_html__( 'Contact Static Sub Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Get Free Consultation For IT Solutions', 'restlycore' ),
				'placeholder' => esc_html__( 'Type your Sub title here', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_from_stitle_tag',
			[
				'label' => esc_html__( 'Contact Form Static Sub Title HTML Tag', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'h4',
				'options' => [
					'h1'  => esc_html__( 'H1', 'restlycore' ),
					'h2'  => esc_html__( 'H2', 'restlycore' ),
					'h3'  => esc_html__( 'H3', 'restlycore' ),
					'h4'  => esc_html__( 'H4', 'restlycore' ),
					'h5'  => esc_html__( 'H5', 'restlycore' ),
					'h6'  => esc_html__( 'H6', 'restlycore' ),
				],
			]
		);
		$this->add_control(
			'restly_home_banner2_form_shortcode',
			[
				'label' => esc_html__( 'Contact Form Shortcode', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'show_label' => true,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'restly_home_banner2_CSS_box',
			[
				'label' => esc_html__( 'Box', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_box_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-contents' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_box_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-contents' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		); 
		$this->add_control(
			'restly_home_banner2_CSS_box_alignment',
			[
				'label' => __( 'Text Alignment', 'restlycore' ),
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
					'{{WRAPPER}} .restly-home-banner-contents' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_box_bb',
			[
				'label' => esc_html__( 'Background', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner:after' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'restly_home_banner2_CSS_stitle',
			[
				'label' => esc_html__( 'Small Title', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_stitle_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-banner-stitle' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_home_banner2_CSS_stitle_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-banner-stitle',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_stitle_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-banner-stitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_stitle_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-banner-stitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'restly_home_banner2_CSS_title',
			[
				'label' => esc_html__( 'Title', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_title_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-banner-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_home_banner2_CSS_title_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} h2.restly-banner-title',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_title_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-banner-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_title_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-banner-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		// Button
		$this->start_controls_section(
			'restly_home_banner2_CSS_button',
			[
				'label' => esc_html__( 'Button One', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_home_banner2_CSS_button_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_button_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_button_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->start_controls_tabs(
			'restly_home_banner2_button_tabs'
		);
		$this->start_controls_tab(
			'restly_home_banner2_btn_ntab',
			[
				'label' => __( 'Normal', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn_ncolor',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn_nbgc',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_home_banner2_btn_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}}  .restly-home-banner-btn .theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_home_banner2_btn_border_radius',
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
                    '{{WRAPPER}} .restly-home-banner-btn .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_home_banner2_btn_border_shadow',
                'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns',
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'restly_home_banner2_btn_htab',
			[
				'label' => __( 'Hover', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn_hcolor',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn_hbgc',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_home_banner2_btn_borderh',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}}  .restly-home-banner-btn .theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_home_banner2_btn_border_radiush',
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
                    '{{WRAPPER}} .restly-home-banner-btn .theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_home_banner2_btn_border_shadowh',
                'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns:hover',
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		
        $this->end_controls_section();
            // End button 
        // Button
		$this->start_controls_section(
			'restly_home_banner2_CSS_button2',
			[
				'label' => esc_html__( 'Button Two', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_home_banner2_btn2_show' => 'yes',
                ],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_home_banner2_CSS_button2_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_button2_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn a.theme-btns.no-bg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_CSS_button2_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->start_controls_tabs(
			'restly_home_banner2_button2_tabs'
		);
		$this->start_controls_tab(
			'restly_home_banner2_btn2_ntab',
			[
				'label' => __( 'Normal', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn2_ncolor',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn2_nbgc',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_home_banner2_btn2_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}}  .restly-home-banner-btn .theme-btns.no-bg',
            ]
        );
        $this->add_responsive_control(
            'restly_home_banner2_btn2_border_radius',
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
                    '{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_home_banner2_btn2_border_shadow',
                'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg',
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'restly_home_banner2_btn2_htab',
			[
				'label' => __( 'Hover', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn2_hcolor',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner2_btn2_hbgc',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_home_banner2_btn2_borderh',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}}  .restly-home-banner-btn .theme-btns.no-bg:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_home_banner2_btn2_border_radiush',
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
                    '{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_home_banner2_btn2_border_shadowh',
                'label' => esc_html__( 'Button Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns.no-bg:hover',
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// End button 
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
		if($settings['restly_home_banner2_select_btn'] == 'page' ){
			$link = get_page_link($settings['restly_home_banner2_btn_link']);
		}else{
			$link = $settings['restly_home_banner2_btn_extra'];
		}
		if($settings['restly_home_banner2_select_btn2'] == 'page' ){
			$link2 = get_page_link($settings['restly_home_banner2_btn2_link']);
		}else{
			$link2 = $settings['restly_home_banner2_btn2_extra'];
		}
		?>
		<div class="restly-home-banner-wrapper banner-two">
			<div class="restly-home-banner" style="background-image:url( <?php echo esc_url(wp_get_attachment_image_url( $settings['restly_home_banner2_image']['id'], 'full' )); ?> )">
				<div class="container restly-home-banner-container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-7 col-lg-8">
							<div class="restly-home-banner-contents">
							<<?php echo esc_attr($settings['restly_home_banner2_stitle_tag']); ?> class="restly-banner-stitle"><?php echo wp_kses($settings['restly_home_banner2_stitle'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_home_banner2_stitle_tag']); ?>>
							<<?php echo esc_attr($settings['restly_home_banner2_title_tag']); ?> class="restly-banner-title"><?php echo wp_kses($settings['restly_home_banner2_title'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_home_banner2_title_tag']); ?>>
								<div class="restly-home-banner-btn">
									<a href="<?php echo esc_url($link); ?>" class="theme-btns"><?php echo esc_html($settings['restly_home_banner2_btn_text']); ?></a>
									<?php if($settings['restly_home_banner2_btn2_show'] == true ) : ?>
									<a href="<?php echo esc_url($link2); ?>" class="theme-btns no-bg"><?php echo esc_html($settings['restly_home_banner2_btn2_text']); ?></a>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-5 col-lg-4 d-md-flex d-lg-flex align-items-center">
							<div class="restly-home-banner-forms">
							<<?php echo esc_attr($settings['restly_home_banner2_from_title_tag']); ?> class="restly-banner-form-title"><?php echo wp_kses($settings['restly_home_banner2_ctf_title'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_home_banner2_from_title_tag']); ?>>
							<<?php echo esc_attr($settings['restly_home_banner2_from_stitle_tag']); ?> class="restly-banner-form-stitle"><?php echo wp_kses($settings['restly_home_banner2_ctf_stitle'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_home_banner2_from_stitle_tag']); ?>>
								<div class="form-shortcode">
									<?php echo do_shortcode($settings['restly_home_banner2_form_shortcode']); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
Plugin::instance()->widgets_manager->register( new restly_home_banner2_Widget );