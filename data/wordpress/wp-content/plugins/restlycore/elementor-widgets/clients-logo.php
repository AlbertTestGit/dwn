<?php namespace Elementor;

class restly_client_logo_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_client_logo';
    }

    public function get_title() {
        return esc_html__( 'Restly Client Logo', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-logo';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_client_logo_options',
            [
                'label' => esc_html__( 'Client Logo', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_client_logo_img',
            [
                'label'   => __( 'Choose Logo', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'restly_client_logo_enable_link',
            [
                'label'        => esc_html__( 'Enable URL', 'restlycore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'restlycore' ),
                'label_off'    => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $repeater->add_control(
            'restly_client_logo_url',
            [
                'label'     => esc_html__( 'URL', 'restlycore' ),
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => esc_html__( '#', 'restlycore' ),
                'condition' => [
                    'restly_client_logo_enable_link' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_client_logos',
            [
                'label'   => esc_html__( 'Logo List', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_client_logo_img' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_client_logo_slide_option',
            [
                'label' => esc_html__( 'Slide Options', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_client_logo_slide_enable',
            [
                'label'        => esc_html__( 'Enable Slide', 'restlycore' ),
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'Show', 'restlycore' ),
                'label_off'    => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $this->add_control(
            'restly_clsl_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_client_logo_slide_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_clsl_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 4000,
                'condition' => array(
                    'restly_client_logo_slide_enable' => 'yes',
                    'restly_clsl_loop'                => 'yes',

                ),
            ]
        );
        $this->add_control(
            'restly_clsl_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_client_logo_slide_enable' => 'yes',
                    'restly_clsl_loop' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_clsl_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 3000,
                'condition' => array(
                    'restly_clsl_aloop'               => 'yes',
                    'restly_clsl_loop'                => 'yes',
                    'restly_client_logo_slide_enable' => 'yes',
                ),
            ]
        );
        $this->add_control(
            'restly_clsl_dot',
            [
                'label'        => esc_html__( 'Enable Dots ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
                'condition'    => [
                    'restly_client_logo_slide_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_clientlogo_CSS_options',
            [
                'label' => esc_html__( 'Item', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_clientlogo_item_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img,.no-slide .restly-client-logo-items img' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_clientlogo_item_hbg',
            [
                'label' => esc_html__( 'Background Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img:hover,.no-slide .restly-client-logo-items img:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_clientlogo_CSS_item_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img,.no-slide .restly-client-logo-items img',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_clientlogo_CSS_item_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img,.no-slide .restly-client-logo-items img',
            ]
        );
        $this->add_responsive_control(
            'restly_clientlogo_CSS_item_radius',
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
                    '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img,.no-slide .restly-client-logo-items img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_clientlogo_CSS_item_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img,.no-slide .restly-client-logo-items img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_clientlogo_CSS_item_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-client-logo-wrapper.enable-slide img,.no-slide .restly-client-logo-items img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dynamic_id = rand(1241, 3256);
        if($settings['restly_client_logo_slide_enable'] == 'yes' ){
            if($settings['restly_clsl_dot'] == 'yes' ){
				$dots = 'true';
			}else{
				$dots = 'false';
			}
			if($settings['restly_clsl_aloop'] == 'yes' ){
				$aloop = 'true';
			}else{
				$aloop = 'false';
			}
			if($settings['restly_clsl_loop'] == 'yes' ){
				$loop = 'true';
			}else{
				$loop = 'false';
			}
            $noslide = 'enable-slide';
            if(is_rtl()){
                $rtl = 'true';
            }else{
                $rtl = 'false';
            }
            echo '
			<script>
			jQuery(document).ready(function($) {
				"use strict";
				$(".logo-slide-'.esc_attr($dynamic_id).'").slick({
					slidesToShow: 5,
					slidesToScroll: 3,
                    arrows: false,
                    rtl: '.esc_attr($rtl).',
					dots: '.esc_attr($dots).',
					infinite: '.esc_attr($loop).',
					autoplay: '.esc_attr($aloop).',';
					if($aloop == 'true'){
					echo 'speed: '.esc_attr($settings['restly_clsl_speed']).',';
					}
					if($aloop == 'true'){
					echo 'autoplaySpeed: '.esc_attr($settings['restly_clsl_aspeed']).',';
					}
					echo '
					responsive: [
						{
						breakpoint: 1024,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3,
							}
						},
						{
							breakpoint: 600,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
				});
			});
			</script>';
        }else{
            $noslide = 'no-slide';
        }
        ob_start();
        ?>
        <div class="restly-client-logo-wrapper <?php echo esc_attr($noslide); ?>">
            <div class="restly-client-logo-items logo-slide-<?php echo esc_attr($dynamic_id); ?>">
                <?php foreach($settings['restly_client_logos'] as $client_logo) : ?>
                    <?php if($client_logo['restly_client_logo_enable_link'] == 'yes') {
                        echo '<a href="'.esc_url($client_logo['restly_client_logo_url']).'">';
                    } 
                    echo wp_get_attachment_image( $client_logo['restly_client_logo_img']['id'], 'full' ); 
                    if($client_logo['restly_client_logo_enable_link'] == 'yes') {
                        echo '</a>';
                    } ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_client_logo_Widget );