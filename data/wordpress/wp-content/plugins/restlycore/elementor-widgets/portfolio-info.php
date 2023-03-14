<?php namespace Elementor;

function restly_portfolio_cat_lists(){
	
	$elements = get_terms( 'restly_portfolio_cat');
	$product_cat_array = array();
	if(!empty($elements)) {
		foreach($elements as $element){
			$info = get_term($element, 'restly_portfolio_cat');
			$product_cat_array[ $info->term_id ] = $info->name;
		}
	}
	return $product_cat_array;
}

class restly_portfolio_info_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_portfolio_info';
    }

    public function get_title() {
        return esc_html__( 'Restly Portfolio Info', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-info-circle-o';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_portfolio_info_options',
            [
                'label' => esc_html__( 'Restly Portfolio Info', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_portfolio_info_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Project Details', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_portfolio_info_title_tag',
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_portfolio_info_ftitle',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Project Name:', 'restlycore' ),
            ]
        );
        $repeater->add_control(
            'restly_portfolio_info_show_cat',
            [
                'label' => esc_html__( 'Show Category', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
			'restly_portfolio_info_cat',
			[
				'label' => __( 'Select Category', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
                'label_block' => true,
				'options' => restly_portfolio_cat_lists(),
                'condition' => [
                    'restly_portfolio_info_show_cat' => 'yes',
                ],
			]
		);
        
        $repeater->add_control(
            'restly_portfolio_info_info',
            [
                'label' => esc_html__( 'info', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Software License Management', 'restlycore' ),
                'condition' => [
                    'restly_portfolio_info_show_cat!' => 'yes',
                ],
            ]
        );
        
        $this->add_control(
            'restly_portfolio_infos',
            [
                'label' => esc_html__( 'Info List', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_portfolio_info_ftitle' => esc_html__( 'Project Name:', 'restlycore' ),
                        'restly_portfolio_info_info' => esc_html__( 'Software License Management', 'restlycore' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_info_CSS_option',
            [
                'label' => esc_html__( 'Box CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_portfolio_info_CSS_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-protfolio-info-list',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_info_CSS_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-protfolio-info-list',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_info_CSS_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-protfolio-info-list',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_CSS_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_info_CSS_item_option',
            [
                'label' => esc_html__( 'Item CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_info_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_info_tabs_hadding',
            [
                'label' => __( 'Hadding', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_hadding_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list .portfolio-info-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_info_hadding_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-protfolio-info-list .portfolio-info-title',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_hadding_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list .portfolio-info-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_hadding_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list .portfolio-info-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_info_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li label' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_info_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-protfolio-info-list ul li label',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li label' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li label' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_info_tabs_dec',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_dec_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li,.restly-protfolio-info-list ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_dec_hc',
            [
                'label' => esc_html__( 'Category hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_info_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-protfolio-info-list ul li',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_info_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                
                'selectors' => [
                    '{{WRAPPER}} .restly-protfolio-info-list ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="restly-protfolio-info-wrapper">
            <div class="restly-protfolio-info-list">
                <<?php echo esc_attr($settings['restly_portfolio_info_title_tag']); ?> class="portfolio-info-title"><?php echo esc_html($settings['restly_portfolio_info_title']); ?></<?php echo esc_attr($settings['restly_portfolio_info_title_tag']); ?>>
                <ul>
                <?php foreach( $settings['restly_portfolio_infos'] as $info ) : ?>
                <li><label><?php echo esc_html($info['restly_portfolio_info_ftitle']); ?></label><?php if($info['restly_portfolio_info_show_cat'] == 'yes' && !empty($info['restly_portfolio_info_cat'])){
                    foreach($info['restly_portfolio_info_cat'] as $cat){
				    $infos = get_term($cat, 'restly_portfolio_cat');
                        if ( ! is_wp_error( $infos ) && ! empty( $infos ) ){
                            $info_link = get_term_link($infos->slug, 'restly_portfolio_cat');
                            echo '<a href="'.esc_url($info_link).'">'.esc_html($infos->name).'</a>';
                        }
                    }
                    }else{
                        echo esc_html($info['restly_portfolio_info_info']);
                    } ?> 
                </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_portfolio_info_Widget );