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
class restly_home_banner_Widget extends \Elementor\Widget_Base {

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
		return 'restly-home-banner';
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
		return esc_html__( 'Restly Home Banner', 'restlycore' );
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
		return [ 'restly', 'home banner' ];
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
			'restly_home_banner_section',
			[
				'label' => esc_html__( 'Content', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
            'restly_home_banner_image',
            [
                'label' => esc_html__('Image','restlycore'),
                'type'=>Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
            ]
        );
		$this->add_control(
			'restly_home_banner_stitle',
			[
				'label' => esc_html__( 'Small Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Empower your business', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_stitle_tag',
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
			'restly_home_banner_title',
			[
				'label' => esc_html__( 'Title', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Excellent IT services for your success', 'restlycore' ),
				'show_label' => true,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_title_tag',
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
			'restly_home_banner_select_btn',
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
			'restly_home_banner_btn_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_home_banner_select_btn' => 'extranal',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner_btn_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_home_banner_select_btn' => 'page',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner_btn_text',
			[
				'label' => esc_html__( 'Buttn Text', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'default'	=> esc_html__( 'Meet With Us', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_home_banner_video_show',
			[
				'label' => __( 'Enable Video button', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'restly_home_banner_video_link',
			[
				'label' => __( 'Video Link', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'condition' => [
					'restly_home_banner_video_show' => 'yes',
				],
				'label_block' => true,
				'default' => 'https://www.youtube.com/watch?v=f3NWvUV8MD8',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_coluam',
			[
				'label' => esc_html__( 'Select Column', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 8,
				'options' => [
					'1'  => esc_html__( '1', 'restlycore' ),
					'2'  => esc_html__( '2', 'restlycore' ),
					'3'  => esc_html__( '3', 'restlycore' ),
					'4'  => esc_html__( '4', 'restlycore' ),
					'4'  => esc_html__( '4', 'restlycore' ),
					'5'  => esc_html__( '5', 'restlycore' ),
					'6'  => esc_html__( '6', 'restlycore' ),
					'7'  => esc_html__( '7', 'restlycore' ),
					'8'  => esc_html__( '8', 'restlycore' ),
					'9'  => esc_html__( '9', 'restlycore' ),
					'10'  => esc_html__( '10', 'restlycore' ),
					'11'  => esc_html__( '11', 'restlycore' ),
					'12'  => esc_html__( '12', 'restlycore' )
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'restly_home_banner_CSS_box',
			[
				'label' => esc_html__( 'Box', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_box_margin',
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
			'restly_home_banner_CSS_box_padding',
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
			'restly_home_banner_CSS_box_itemalignment',
			[
				'label' => __( 'Item Alignment', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => __( 'Left', 'restlycore' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'restlycore' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => __( 'Right', 'restlycore' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-container' => 'justify-content: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'restly_home_banner_CSS_box_alignment',
			[
				'label' => __( 'Text Alignment', 'restlycore' ),
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
				'default' => 'center',
				'toggle' => true,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-contents' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_box_bb',
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
			'restly_home_banner_CSS_stitle',
			[
				'label' => esc_html__( 'Small Title', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_stitle_color',
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
				'name' => 'restly_home_banner_CSS_stitle_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-banner-stitle',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_stitle_margin',
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
			'restly_home_banner_CSS_stitle_padding',
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
			'restly_home_banner_CSS_title',
			[
				'label' => esc_html__( 'Title', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_title_color',
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
				'name' => 'restly_home_banner_CSS_title_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-banner-title',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_title_margin',
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
			'restly_home_banner_CSS_title_padding',
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
			'restly_home_banner_CSS_button',
			[
				'label' => esc_html__( 'Button', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_home_banner_CSS_button_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .restly-home-banner-btn .theme-btns',
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_CSS_button_margin',
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
			'restly_home_banner_CSS_button_padding',
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
			'restly_home_banner_button_tabs'
		);
		$this->start_controls_tab(
			'restly_home_banner_btn_ntab',
			[
				'label' => __( 'Normal', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_btn_ncolor',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_btn_nbgc',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'restly_home_banner_btn_htab',
			[
				'label' => __( 'Hover', 'restlycore' ),
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_btn_hcolor',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_home_banner_btn_hbgc',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .restly-home-banner-btn .theme-btns:hover' => 'background-color: {{VALUE}}',
				],
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
		if($settings['restly_home_banner_select_btn'] == 'page' ){
			$link = get_page_link($settings['restly_home_banner_btn_link']);
		}else{
			$link = $settings['restly_home_banner_btn_extra'];
		}
		?>
		<div class="restly-home-banner-wrapper">
			<div class="restly-home-banner" style="background-image:url( <?php echo esc_url(wp_get_attachment_image_url( $settings['restly_home_banner_image']['id'], 'full' )); ?> )">
				<div class="container restly-home-banner-container d-flex">
					<div class="col-12 col-sm-12 col-md-10 col-lg-<?php echo esc_attr($settings['restly_home_banner_coluam']); ?>">
						<div class="restly-home-banner-contents">
							<<?php echo esc_attr($settings['restly_home_banner_stitle_tag']); ?> class="restly-banner-stitle"><?php echo wp_kses($settings['restly_home_banner_stitle'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_home_banner_stitle_tag']); ?>>
							<<?php echo esc_attr($settings['restly_home_banner_title_tag']); ?> class="restly-banner-title"><?php echo wp_kses($settings['restly_home_banner_title'],'restly_allowed_html'); ?></<?php echo esc_attr($settings['restly_home_banner_title_tag']); ?>>
							<div class="restly-home-banner-btn">
								<a href="<?php echo esc_url($link); ?>" class="theme-btns"><?php echo esc_html($settings['restly_home_banner_btn_text']); ?></a>
								<?php if($settings['restly_home_banner_video_show'] == 'yes' ) : ?>
									<a href="<?php echo esc_url($settings['restly_home_banner_video_link']); ?>" class="video-popup video-button"><i class="fas fa-play"></i></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
Plugin::instance()->widgets_manager->register( new restly_home_banner_Widget );