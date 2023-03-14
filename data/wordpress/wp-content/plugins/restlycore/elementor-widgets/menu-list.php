<?php namespace Elementor;

class restly_menu_list_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_menu_list';
    }

    public function get_title() {
        return esc_html__( 'Restly Menu List', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-editor-list-ol';
    }

    public function get_categories() {
        return ['restlyhf'];
    }
    private function get_available_menus() {
		$menus = wp_get_nav_menus();

		$options = [];

		foreach ( $menus as $menu ) {
			$options[ $menu->slug ] = $menu->name;
		}

		return $options;
	}
    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_title_options',
            [
                'label' => esc_html__( 'Restly Menu List', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $menus = $this->get_available_menus();

		if ( ! empty( $menus ) ) {
			$this->add_control(
				'restly_menu_list_select',
				[
					'label' => __( 'Menu List', 'restlycore' ),
					'type' => Controls_Manager::SELECT,
					'options' => $menus,
					'default' => array_keys( $menus )[0],
					'save_default' => true,
					'separator' => 'after',
					'description' => sprintf( __( 'Go to the <a href="%s" target="_blank">Menus screen</a> to manage your menus.', 'restlycore' ), admin_url( 'nav-menus.php' ) ),
				]
			);
		} else {
			$this->add_control(
				'restly_menu_list_select',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw' => '<strong>' . __( 'There are no menus in your site.', 'restlycore' ) . '</strong><br>' . sprintf( __( 'Go to the <a href="%s" target="_blank">Menus screen</a> to create one.', 'restlycore' ), admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
					'separator' => 'after',
					'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
				]
			);
		}
        $this->add_control(
            'restly_menu_list_dot',
            [
                'label' => esc_html__( 'Hidden Dot?', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Hide', 'restlycore' ),
                'label_off' => esc_html__( 'Show', 'restlycore' ),
                'return_value' => 'unset',
                'default' => 'unset',
                $sde_selector = '{{WRAPPER}} .widget.widget_nav_menu ul li a:before',
                'selectors' => [
                    $sde_selector => 'content:{{VALUE}}'
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_menu_list_css_box',
            [
                'label' => esc_html__( 'Box Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'restly_menu_list_box_align',
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
                    '{{WRAPPER}} .restly-menu-list-wrapper ul' => 'text-align: {{VALUE}}',
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a:before' => 'float: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_menu_list_css_item',
            [
                'label' => esc_html__( 'Item Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_css_item_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_css_item_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_menu_list_css_item_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-menu-list-wrapper ul li a',
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_css_item_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_css_item_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_menu_list_note',
            [
                'label' => __( 'Dot CSS Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_dot_c',
            [
                'label' => esc_html__( 'Dot Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a:before' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_dot_size',
            [
                'label' => esc_html__( 'Dot Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 30,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a:before' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_dot_top',
            [
                'label' => esc_html__( 'Dot Top To Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -30,
                        'max' => 30,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a:before' => 'top: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_menu_list_dot_left',
            [
                'label' => esc_html__( 'Dot Left To Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -50,
                        'max' => 50,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-menu-list-wrapper ul li a:before' => 'margin-right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
		// Get menu
		$restly_menu_list = ! empty( $settings['restly_menu_list_select'] ) ? wp_get_nav_menu_object( $settings['restly_menu_list_select'] ) : false;
		if ( ! $restly_menu_list ) {
			return;
		}
		$nav_menulist_args = array(
			'container'      => false,
			'menu_class'     => 'elementor-nav-menu menu',
			'menu'           => $restly_menu_list,
			'echo'           => true
		);
        ob_start();
        ?>
        <div class="restly-menu-list-wrapper">
            <div class="widget widget_nav_menu">
            <?php
                wp_nav_menu(
                    apply_filters(
                        'nav_menulist_args',
                        $nav_menulist_args,
                        $restly_menu_list,
                        $settings
                    )
                );
            ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_menu_list_Widget );