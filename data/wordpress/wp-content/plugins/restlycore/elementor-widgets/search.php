<?php namespace Elementor;

class restly_nave_search_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_nave_search';
    }

    public function get_title() {
        return esc_html__( 'Restly Search', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-search';
    }

    public function get_categories() {
        return ['restlyhf'];
    }
	
    protected function register_controls() {
		$this->start_controls_section(
			'restly_search_nmeu_options',
			[
				'label' => __( 'Search', 'restlycore' ),
			]
		);
		$this->add_control(
			'restly_search_nmeu_icons',
			[
				'label' => esc_html__( 'Icon', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-search',
					'library' => 'solid',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_search_css_options',
            [
                'label' => esc_html__( 'Search CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_class_box_aligment',
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
                    '{{WRAPPER}} .elementor-header-search .button.search-open' => 'text-align: {{VALUE}}',
                ],
            ]
        );
		$this->add_responsive_control(
			'restly_nav_search_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-header-search .button.search-open' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_search_size',
			[
				'label' => esc_html__( 'Font SIze', 'restlycore' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-header-search .button.search-open' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_search_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-header-search .button.search-open' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_search_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-header-search .button.search-open' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
		<div class="elementor-header-search">
            <div class="button search-open">
                <i class="<?php echo esc_attr($settings['restly_search_nmeu_icons']['value']) ?>"></i></a>
            </div>
		</div>
		<div class="header-search-popup">
			<div class="header-search-overlay search-open"></div>
			<div class="header-search-popup-content">
				<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="screen-reader-text"><?php esc_html_e( 'Search here...', 'restly' ) ?></span>
					<input type="search" value="<?php echo esc_attr(get_search_query()) ?>" name="s" placeholder="<?php esc_attr_e( 'Search here... ', 'restly' ) ?>" title="<?php esc_attr_e( 'Search for:', 'restly' ) ?>">
					<button type="submit"><i class="bi bi-search"></i></button>
				</form>		
			</div>
		</div>
	<?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_nave_search_Widget );