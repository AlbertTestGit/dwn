<?php namespace Elementor;

class restly_portfolio_menu_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_portfolio_menu';
    }

    public function get_title() {
        return esc_html__( 'Restly Portfolio With Menu', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-posts-grid';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_portfolio_menu_options',
            [
                'label' => esc_html__( 'Restly Portfolio With Menu', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_portfolio_menu_show',
            [
                'label' => esc_html__( 'Display Items', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 3,
                'max' => 10,
                'step' => 1,
                'default' => 9,
            ]
        );
        $this->add_control(
            'restly_portfolio_manu_show',
            [
                'label' => esc_html__( 'Show Menu', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_portfolio_manu_nav_show',
            [
                'label' => esc_html__( 'Show Navication', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_menu_css_options',
            [
                'label' => esc_html__( 'Restly Portfolio Menu CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_portfolio_menu_css_align',
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
                    '{{WRAPPER}} .restly-portfolio-menu ul' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-menu ul li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_acolor',
            [
                'label' => esc_html__( 'Active Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-menu ul li.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_abg',
            [
                'label' => esc_html__( 'Active Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-menu ul li.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-menu ul li',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-menu ul li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_pading',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-menu ul li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_menu_css_box_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_menu_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_menu_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-item',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_CSS_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px'],
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
                    '{{WRAPPER}} img.img-responsive.portfolio-three-image.wp-post-image' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_portfolio_menu_css_content_options',
            [
                'label' => esc_html__( 'Restly Portfolio Content CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_portfolio_menu_css_content_alig',
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
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_content_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_content_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_portfolio_menu_css_content_tabs'
        );
        $this->start_controls_tab(
            'restly_portfolio_menu_css_content_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_content_coler',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec h6 a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec h6',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_content_radius',
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
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_portfolio_menu_css_content_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_content_hcoler',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec h6:hover a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_portfolio_menu_css_content_hradius',
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
                    '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_portfolio_menu_css_content_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-portfolio-list-item .restly-portfolio-three-content .restly-portfolio-dec:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $dynamic_num = rand(35245545, 541541745);
        ?>
        <script>
            jQuery(window).ready(function($) {
            'use strict';
                jQuery('.restly-portfolio-menu li').on('click',function(){
                    jQuery('.restly-portfolio-menu li').removeClass('active');
                    jQuery(this).addClass('active');
                    var selector = jQuery(this).attr('data-filter');
                    jQuery('.portfoliolist-<?php echo esc_attr($dynamic_num) ?>').isotope({
                        filter:selector,
                    });
                });
            });
            jQuery(window).on('load',function($) {
                'use strict';
                jQuery(".portfoliolist-<?php echo esc_attr($dynamic_num) ?>").isotope();
            });
        </script>
        <?php
        ob_start();
        ?>
        <div class="restly-portfolio-with-menu-wrapper">
            <?php $restly_portfolio_menus = get_terms( 'restly_portfolio_cat' ); 
			if( $settings['restly_portfolio_manu_show'] == 'yes' && !empty($restly_portfolio_menus) && ! is_wp_error( $restly_portfolio_menus ) ) : ?>
            <div class="restly-portfolio-menu">
                <ul>
                    <li class="active" data-filter="*"><?php esc_html_e('show all','restlycore'); ?></li>
                    <?php foreach($restly_portfolio_menus as $restly_portfolio_menu){
                        echo '<li data-filter=".'.esc_attr($restly_portfolio_menu->slug).'">'.esc_html($restly_portfolio_menu->name).'</li>';
                    }?>
                </ul>
            </div>
            <?php endif; ?>
            <div class="restly-portfolio-list-wrapper">
                <div class="row restly-portfolio-list portfoliolist-<?php echo esc_attr($dynamic_num); ?>">
                    <?php global $post;
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$p = new \WP_Query(array(
					'posts_per_page' => esc_attr($settings['restly_portfolio_menu_show']),
					'post_type' => 'restly_portfolio',
					'paged' => $paged
					));
					while($p->have_posts()) : $p->the_post();
						$portfolio_catagory = get_the_terms( get_the_ID(), 'restly_portfolio_cat' );
					if ( $portfolio_catagory && ! is_wp_error( $portfolio_catagory ) ) {
						$portfolio_cat_list = array();
						foreach ( $portfolio_catagory as $portfolio_cat ) {
							$portfolio_cat_list[] = $portfolio_cat->slug;
						}
						$portfolio_catshow = join( " ", $portfolio_cat_list );
						
					}else{
						$portfolio_catshow = '';
					}?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 <?php echo esc_attr($portfolio_catshow); ?> pt-4">
                        <div class="restly-portfolio-list-item">
                            <div class="restly-portfolio-three-content">
                                <div class="restly-portfolio-item">
                                    <?php the_post_thumbnail('restly-portfolio-medium', array('class' => 'img-responsive portfolio-three-image'), true); ?> 
                                    <div class="restly-portfolio-dec">
                                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); wp_reset_query();?>
                </div>
                <?php if($settings['restly_portfolio_manu_nav_show'] == 'yes' ) { ?>
                <div class="restly-portfolo-nav">
                    <?php restly_paginate_nav($p); ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_portfolio_menu_Widget );