<?php namespace Elementor;

class restly_recent_post_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_recent_post';
    }

    public function get_title() {
        return esc_html__( 'Restly Recent Post', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-post-list';
    }

    public function get_categories() {
        return ['restlyhf'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_recent_post_options',
            [
                'label' => esc_html__( 'Restly Recent Post', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_recent_select_type',
            [
                'label' => esc_html__( 'Select Post Type', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'post',
                'options' => [
                    'post'  => esc_html__( 'Blog Post', 'restlycore' ),
                    'restly_portfolio'  => esc_html__( 'Portfolio', 'restlycore' ),
                    'restly_team'  => esc_html__( 'Team', 'restlycore' ),
                    'product'  => esc_html__( 'Products', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_recent_show_img',
            [
                'label' => esc_html__( 'Show Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_recent_show_date',
            [
                'label' => esc_html__( 'Show Date', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_recent_limit_title',
            [
                'label' => esc_html__( 'Limit Title Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 20,
                'step' => 1,
                'default' => 5,
            ]
        );
        $this->add_control(
            'restly_recent_post_show',
            [
                'label' => esc_html__( 'Show Post', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 10,
                'step' => 1,
                'default' => 3,
            ]
        );
        $this->add_control(
            'restly_recent_post_order',
            [
                'label' => esc_html__( 'Post Order', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'ASC',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'restlycore' ),
                    'DESC'  => esc_html__( 'DESC', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_recent_post_align',
            [
                'label' => __( 'Alignment', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'restlycore' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'restlycore' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                
                'selectors' => [
                    '{{WRAPPER}} ul.restly-widget-post-thum li' => 'text-align: {{VALUE}}',
                    '{{WRAPPER}} ul.restly-widget-post-thum li img' => 'float: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_recent_post_css_options',
            [
                'label' => esc_html__( 'Box Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_box_m',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_box_pa',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_recent_post_item_css_options',
            [
                'label' => esc_html__( 'Item Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_recent_post_item_css_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} ul.restly-widget-post-thum li',
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_item__list_mar',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} ul.restly-widget-post-thum li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_item__list_pad',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} ul.restly-widget-post-thum li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_recent_post_css_tabs'
        );
        $this->start_controls_tab(
            'restly_recent_post_css_tabs_image',
            [
                'label' => __( 'Image', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_img_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper ul.restly-widget-post-thum li img' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_img_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 150,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper ul.restly-widget-post-thum li img' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_img_border_radius',
            [
                'label' => esc_html__( 'Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ '%' ],
                'range' => [
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper ul.restly-widget-post-thum li img' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_recent_post_img_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-recent-post-wrapper ul.restly-widget-post-thum li img',
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_img_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper ul.restly-widget-post-thum li img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_img_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-recent-post-wrapper ul.restly-widget-post-thum li img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_recent_post_css_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-widget-post-thum-content>h6>a.recent-post-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_title_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-widget-post-thum-content>h6>a.recent-post-title:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_recent_post_css_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-widget-post-thum-content>h6>a.recent-post-title',
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-widget-post-thum-content>h6' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-widget-post-thum-content>h6' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_recent_post_css_tabs_date',
            [
                'label' => __( 'Date', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_date_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .recent-widget-date' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_recent_post_css_date_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .recent-widget-date',
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_date_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .recent-widget-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_recent_post_css_date_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .recent-widget-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        <div class="restly-recent-post-wrapper">
            <div class="footer-widget-post-with-thum">
                <ul class="restly-widget-post-thum">
                    <?php
                    $post_q = new \WP_Query( array(
                    'post_type'      => $settings['restly_recent_select_type'],
                    'posts_per_page' => $settings['restly_recent_post_show'],
                    'order'          => $settings['restly_recent_post_order'],
                    ) );
                    if ( $post_q->have_posts() ):
                    while ( $post_q->have_posts() ):
                        $post_q->the_post();
                        ?>
                        <li>
                            <?php if ( $settings['restly_recent_show_img'] == 'yes' ) {
                                the_post_thumbnail( 'thumbnail' );
                            }?>
                            <div class="restly-widget-post-thum-content">
                                <h6><a class="recent-post-title" href="<?php echo esc_url( get_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), $settings['restly_recent_limit_title'] ); ?></a></h6>
                                <?php if ( $settings['restly_recent_show_date'] == 'yes') : ?>
                                <div class="recent-widget-date">
                                    <?php echo get_the_date() ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endwhile;endif;?>
                </ul>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_recent_post_Widget );