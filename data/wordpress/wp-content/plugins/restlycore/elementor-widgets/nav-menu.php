<?php namespace Elementor;

class restly_nave_menu_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_nave_menu';
    }

    public function get_title() {
        return esc_html__( 'Restly Nav Menu', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-nav-menu';
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

		$this->start_controls_section(
            'restly_site_logo_options',
            [
                'label' => esc_html__( 'Restly Site Logo', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
		$this->add_control(
			'restly_nav_site_logo_enable',
			[
				'label' => esc_html__( 'Show Logo', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'restlycore' ),
				'label_off' => esc_html__( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'restly_nav_site_logo_select',
			[
				'label' => esc_html__( 'Select Options', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'one',
				'options' => [
					'one'  => esc_html__( 'Site Logo', 'restlycore' ),
					'two' => esc_html__( 'Custom Logo', 'restlycore' ),
				],
				'condition' => [
					'restly_nav_site_logo_enable' => 'yes',
				],
			]
		);
		$this->add_control(
			'restly_nav_custom_logo',
			[
				'label' => __( 'Upload Logo', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'restly_nav_site_logo_select' => 'two',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'restly_nav_clogo_size', // // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);
        $this->end_controls_section();

        //Content tab start
        $this->start_controls_section(
            'restly_nave_menu_options',
            [
                'label' => esc_html__( 'Restly Nav Menu', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
		$menus = $this->get_available_menus();

		if ( ! empty( $menus ) ) {
			$this->add_control(
				'restly_menu_select',
				[
					'label' => __( 'Menu', 'restlycore' ),
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
				'restly_menu_select',
				[
					'type' => Controls_Manager::RAW_HTML,
					'raw' => '<strong>' . __( 'There are no menus in your site.', 'restlycore' ) . '</strong><br>' . sprintf( __( 'Go to the <a href="%s" target="_blank">Menus screen</a> to create one.', 'restlycore' ), admin_url( 'nav-menus.php?action=edit&menu=0' ) ),
					'separator' => 'after',
					'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
				]
			);
		}
		$this->add_control(
			'restly_menu_location',
			[
				'label'       => __( 'Menu Location', 'restlycore' ),
				'description' => __( 'Select a location for your menu. This option facilitate the ability to create up to 2 mobile enabled menu locations', 'restlycore' ),
				'type'        => Controls_Manager::SELECT, 'options' => [
					'mainmenu'   => __( 'Main Menu', 'restlycore' ),
				],
				'default'     => 'mainmenu',
			]
		);
		$this->add_control(
			'text_padding',
			[
				'label'      => __( 'Text Padding - Default 1em', 'restlycore' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors'  => [
					'{{WRAPPER}} .elementor-navigation a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->end_controls_section();
		$this->start_controls_section(
			'restly_search_nmeu_options',
			[
				'label' => __( 'Search', 'restlycore' ),
			]
		);
		$this->add_control(
			'restly_search_nmeu_enable',
			[
				'label' => esc_html__( 'Enable Search', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'restlycore' ),
				'label_off' => esc_html__( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
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
				'condition' => [
					'restly_search_nmeu_enable' => 'yes',
				],
			]
		);
		
		$this->end_controls_section();
		$this->start_controls_section(
			'restly_cta_nmeu_options',
			[
				'label' => __( 'Button', 'restlycore' ),
			]
		);
		$this->add_control(
			'restly_cta_nmeu_enable',
			[
				'label' => esc_html__( 'Enable Button', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'restlycore' ),
				'label_off' => esc_html__( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'restly_nmenu_buttons_select',
			[
				'label' => esc_html__( 'Select Link', 'restlycore' ),
				'type'  => Controls_Manager::SELECT,
				'default'	=> 'extranal',
				'options' => [
					'extranal' => esc_html__( 'Extranal', 'restlycore' ),
					'page' =>  esc_html__( 'Page', 'restlycore' ),
				],
				'condition' => [
					'restly_cta_nmeu_enable' => 'yes',
				],
				'label_block' => true,
			]
		);
		
        $this->add_control(
			'restly_nmenu_buttons_extra',
			[
				'label' => esc_html__( 'Extranal Link', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'condition' => [
					'restly_nmenu_buttons_select' => 'extranal',
					'restly_cta_nmeu_enable' => 'yes',
				],
				'placeholder' => esc_html__( 'Add Extranal Link', 'restlycore' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_nmenu_buttons_link',
			[
				'label' => esc_html__( 'Page Link', 'restlycore' ),
				'type' => Controls_Manager::SELECT,
				'options' => restly_page_list(),
				'condition' => [
					'restly_nmenu_buttons_select' => 'page',
					'restly_cta_nmeu_enable' => 'yes',
				],
				'label_block' => true,
			]
		);
		$this->add_control(
			'restly_nmenu_buttons_text',
			[
				'label' => esc_html__( 'Buttn Text', 'restlycore' ),
				'type' => Controls_Manager::TEXT,
				'default'	=> esc_html__( 'Meet With Us', 'restlycore' ),
				'label_block' => true,
				'condition' => [
					'restly_cta_nmeu_enable' => 'yes',
				],
			]
		);
        $this->add_control(
			'restly_nmenu_buttons_new_tab',
			[
				'label' => __( 'Open New Window?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'restly_cta_nmeu_enable' => 'yes',
				],
			]
		);
        $this->add_control(
			'restly_nmenu_buttons_nofollow',
			[
				'label' => __( 'Add nofollow ?', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'restlycore' ),
				'label_off' => __( 'Hide', 'restlycore' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'restly_cta_nmeu_enable' => 'yes',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_site_logo_css_options',
            [
                'label' => esc_html__( 'Logo CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
				'condition' => [
					'restly_nav_site_logo_enable' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
			'restly_nav_logo_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .logo-area .site-branding' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_logo_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .logo-area .site-branding' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_menus_box_css_options',
            [
                'label' => esc_html__( 'Menu Box CSS', 'restlycore' ),
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
				'selectors_dictionary' => [
					'left' => 'margin-right: auto',
					'center' => 'margin: 0 auto',
					'right' => 'margin-left: auto',
				],
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu' => '{{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_class_box_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_class_box_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} ul.elementor-nav-menu' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_navmenu_box_padding',
			[
				'label' => esc_html__( 'Box Shadow', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::BOX_SHADOW,
				'selectors' => [
					'{{SELECTOR}} .elementor-menu' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_menus_css_options',
            [
                'label' => esc_html__( 'Menu CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_responsive_control(
			'restly_nav_menus_normal_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_menus_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_menus_bgcolor',
			[
				'label' => esc_html__( 'Background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_menus_hover_bgcolor',
			[
				'label' => esc_html__( 'Background Hover Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_nav_menus_normal_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a',
			]
		);
		$this->add_responsive_control(
			'restly_nav_menus_normal_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_menus_normal_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul.elementor-nav-menu > li > a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_submenus_box_css_options',
            [
                'label' => esc_html__( 'SubMenu Box CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'restly_nav_sub_box_align',
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
					'{{WRAPPER}} .stellarnav ul ul' => 'text-align: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'restly_nav_sub_box_bg',
				'label' => esc_html__( 'Background', 'restlycore' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .main-navigation ul li ul',
			]
		);
		$this->add_responsive_control(
			'restly_nav_sub_box_top',
			[
				'label' => esc_html__( 'Position Top', 'restlycore' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => -200,
						'max' => 200,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul li ul' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'restly_nav_sub_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'restlycore' ),
				'selector' => '{{WRAPPER}} .main-navigation ul li ul',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_submenus_css_options',
            [
                'label' => esc_html__( 'SubMenu CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'restly_nav_submenus_typo',
				'label' => esc_html__( 'Typography', 'restlycore' ),
				'selector' => '{{WRAPPER}} .main-navigation ul ul.sub-menu li a',
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_hcolor',
			[
				'label' => esc_html__( 'Hover Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_bg',
			[
				'label' => esc_html__( 'background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_hbg',
			[
				'label' => esc_html__( 'Hover background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_border_c',
			[
				'label' => esc_html__( 'Border Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_margin',
			[
				'label' => esc_html__( 'Margin', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_nav_submenus_padding',
			[
				'label' => esc_html__( 'Padding', 'restlycore' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .main-navigation ul ul.sub-menu li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_mobile_css_options',
            [
                'label' => esc_html__( 'Mobile Menu CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_responsive_control(
			'restly_navmenu_mobile_bgcolor',
			[
				'label' => esc_html__( 'background Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .stellarnav.mobile ul' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_navmenu_mobile_toggle_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .stellarnav .menu-toggle span.bars span' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'restly_navmenu_mobile_toggle_top',
			[
				'label' => esc_html__( 'Top', 'restlycore' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 200,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .elementornavs a.menu-toggle.full' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'restly_navmenu_mobile_toggle_right',
			[
				'label' => esc_html__( 'Right', 'restlycore' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => -100,
						'max' => 200,
						'step' => 1,
					]
				],
				'selectors' => [
					'{{WRAPPER}} .elementornavs a.menu-toggle.full' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_search_css_options',
            [
                'label' => esc_html__( 'Search CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
				'condition' => [
					'restly_search_nmeu_enable' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
			'restly_nav_search_color',
			[
				'label' => esc_html__( 'Color', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementornavs .button.search-open' => 'color: {{VALUE}}',
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
					'{{WRAPPER}} .elementornavs .button.search-open' => 'font-size: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .elementornavs .button.search-open' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .elementornavs .button.search-open' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
            'restly_nav_button_CSS_options',
            [
                'label' => esc_html__( 'Button CSS', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
				'condition' => [
					'restly_cta_nmeu_enable' => 'yes',
				],
            ]
        );
        $this->add_responsive_control(
            'restly_nav_button_CSS_aligment',
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
                    '{{WRAPPER}} .restly-button' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nav_button_CSS_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .elementornavs a.theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nav_button_CSS_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .elementornavs a.theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_nav_buttons_tabs'
        );
        $this->start_controls_tab(
            'restly_nav_buttons_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_nav_buttons_Css_ncolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementornavs a.theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nav_buttons_Css_nbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementornavs a.theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_nav_buttons_Css_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .elementornavs a.theme-btns',
            ]
        );
        $this->add_responsive_control(
            'restly_nav_buttons_Css_nradisu',
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
                    '{{WRAPPER}} .elementornavs a.theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_nav_buttons_Css_nshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .elementornavs a.theme-btns',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_nav_buttons_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_nav_buttons_Css_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementornavs a.theme-btns:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nav_buttons_Css_hbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .elementornavs a.theme-btns:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_nav_buttons_Css_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .elementornavs a.theme-btns:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_nav_buttons_Css_hradisu',
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
                    '{{WRAPPER}} .elementornavs a.theme-btns:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_nav_buttons_Css_hshadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .elementornavs a.theme-btns:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
		$restly_menu_location = $settings['restly_menu_location'];
		// Get menu
		$restly_nav_menu = ! empty( $settings['restly_menu_select'] ) ? wp_get_nav_menu_object( $settings['restly_menu_select'] ) : false;
		if ( ! $restly_nav_menu ) {
			return;
		}
		$nav_menu_args = array(
			'container'      => false,
			'menu_id'        => $restly_menu_location,
			'menu_class'     => 'elementor-nav-menu',
			'theme_location' => $restly_menu_location,
			'menu'           => $restly_nav_menu,
			'echo'           => true
		);
		if( $settings['restly_cta_nmeu_enable'] == 'yes' && $settings['restly_nmenu_buttons_select'] == 'page' ){
			$link = get_page_link($settings['restly_nmenu_buttons_link']);
		}else{
			$link = $settings['restly_nmenu_buttons_extra'];
		}
		echo '
		<script>
			jQuery(document).ready(function($) {
				"use strict";
				jQuery(".elementornavs").stellarNav({
					theme: "plain",
					breakpoint: 1023,
					sticky: false,
					menuLabel: "",
					position: "static",
					openingSpeed: 80,
					closingDelay: 80,
					showArrows: true,
					closeBtn: false,
					closeLabel: "Close",
					mobileMode: false,
					scrollbarFix: false
				});
			});
		</script>';
        ob_start();
		?>
		<div id="elementor-header-<?php echo esc_attr($restly_menu_location); ?>" class="elementor-header">
			<div class="elementor-menu">
				<nav class="navbar navbar-expand-lg navbar-light main-navigation">				
					<?php if($settings['restly_nav_site_logo_enable'] == 'yes' ) : ?>
					<div class="logo-area">
						<div class="site-branding">
							<?php
							if($settings['restly_nav_site_logo_select'] == 'two'){
								?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<?php echo Group_Control_Image_Size::get_attachment_image_html( $settings, 'restly_nav_clogo_size', 'restly_nav_custom_logo' ); ?>
								</a>
								<?php 
							}else{
								the_custom_logo();
							}
							?>
						</div><!-- .site-branding -->
					</div>
					<?php endif; ?>
					<div class="navbar-collapse nav-menu stellarnav elementornavs">
						<?php
							wp_nav_menu(
								apply_filters(
									'nav_menu_args',
									$nav_menu_args,
									$restly_nav_menu,
									$settings
								)
							);
						?>
						<?php if($settings['restly_search_nmeu_enable'] == 'yes' ) : ?>
						<div class="button search-open">
							<i class="<?php echo esc_attr($settings['restly_search_nmeu_icons']['value']) ?>"></i></a>
						</div>
						<?php endif; if($settings['restly_cta_nmeu_enable'] == 'yes' ) : ?>
						<div class="button d-flex cta">
							<a href="<?php echo esc_url($link); ?>" class="theme-btns" <?php if($settings['restly_nmenu_buttons_new_tab'] == 'yes' ) : ?> target="_blank" <?php endif; ?> <?php if($settings['restly_nmenu_buttons_nofollow'] == 'yes' ) : ?>  rel="nofollow" <?php endif; ?>><?php echo esc_html($settings['restly_nmenu_buttons_text']); ?></a>
						</div>
						<?php endif; ?>
					</div>
				</nav>
			</div>
		</div>
		<?php if($settings['restly_search_nmeu_enable'] == 'yes' ) : ?>
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
		<?php endif; ?>
	<?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_nave_menu_Widget );