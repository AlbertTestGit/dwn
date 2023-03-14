<?php namespace Elementor;

class restly_counter_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_counter';
    }

    public function get_title() {
        return esc_html__( 'Restly Counter v1', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-counter';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_counter_options',
            [
                'label' => esc_html__( 'Restly Counter', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_counter_style',
            [
                'label' => esc_html__( 'Select Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'style-one',
                'options' => [
                    'style-one'  => esc_html__( 'Style One', 'restlycore' ),
                    'style-two' => esc_html__( 'Style Two', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_counter_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Projects Done', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_counter_title_tag',
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
            'restly_counter_number',
            [
                'label' => esc_html__( 'Number', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '520', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_counter_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '+', 'restlycore' ),
            ]
        );
        $this->end_controls_section();
        // START CSS
        $this->start_controls_section(
            'restly_counter_CSS_box_options',
            [
                'label' => esc_html__( 'Counter Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_counter2_CSS_box_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter-wrapper.style-two' => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter2_CSS_box_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter-wrapper.style-two' => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_counter2_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-counter-wrapper.style-two',
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_counter2_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-counter-wrapper.style-two',
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_counter2_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-counter-wrapper.style-two',
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter2_CSS_box_radius',
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
                    '{{WRAPPER}} .restly-counter-wrapper.style-two' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_counter_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-counter',
                'condition' => [
                    'restly_counter_style' => 'style-one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter2_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter-wrapper.style-two' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter2_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter-wrapper.style-two' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_box_alignment',
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
                        'icon' => 'eicon-text-align-left',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-counter' => 'text-align: {{VALUE}}',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter2_CSS_box_alignment',
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
                        'icon' => 'eicon-text-align-left',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                
                'selectors_dictionary' => [
                    'left' => 'margin-right: auto',
                    'center' => 'margin: 0 auto',
                    'right' => 'margin-left: auto',
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-counter-wrapper.style-two' => '{{VALUE}}',
                ],
                'condition' => [
                    'restly_counter_style' => 'style-two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_counter_CSS_dec_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_number_c',
            [
                'label' => esc_html__( 'Number Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .counter-nmber' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_counter_CSS_number_typo',
                'label' => esc_html__( 'Number Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .counter-nmber',
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_number_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .counter-nmber' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_number_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .counter-nmber' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_counter_note',
            [
                'label' => __( 'Start CSS for Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_title_c',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .resty-counter-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_counter_CSS_title_typo',
                'label' => esc_html__( 'Title Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .resty-counter-title',
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_title_margin',
            [
                'label' => esc_html__( 'Title Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .resty-counter-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_counter_CSS_title_padding',
            [
                'label' => esc_html__( 'Title Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .resty-counter-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $unique = rand(35245545, 541541745);
        ob_start();
        echo '
        <script>
			jQuery(document).ready(function($) {
				 "use strict";
				$(".timer-'.esc_attr($unique).'").countTo();
				$(".count-process-'.esc_attr($unique).'").appear(function() {
				    $(".timer-'.esc_attr($unique).'").countTo();
				}, {
				    accY: -200
				});
			});
		</script>
        ';
        ?>
        <div class="restly-counter-wrapper <?php echo esc_attr($settings['restly_counter_style']); ?>">
            <div class="restly-counter">
                <div class="counter-numbers count-process-<?php echo esc_attr($unique); ?>">
                    <div class="counter-nmber timer-<?php echo esc_attr($unique); ?>" data-to="<?php echo esc_attr($settings['restly_counter_number']); ?>" data-speed="5000"><?php echo esc_html($settings['restly_counter_number']); ?></div>
                    <span class="counter-nmber"><?php echo esc_html($settings['restly_counter_icon']); ?></span>
                </div>
                <<?php echo esc_attr($settings['restly_counter_title_tag']); ?> class="resty-counter-title"><?php echo esc_html($settings['restly_counter_title']); ?></<?php echo esc_attr($settings['restly_counter_title_tag']); ?>>
            </div>
        </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_counter_Widget );