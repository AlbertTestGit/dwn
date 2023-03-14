<?php namespace Elementor;

class restly_nft_pro_c_menu_c_menu_Widget extends Widget_Base {

    public function __construct($data = [], $args = null) {
        parent::__construct($data, $args);
        wp_register_script( 'countdown', plugin_dir_url( __FILE__ ) . '/assets/js/jquery-countdown-min.js', '1.0.0', true );
        wp_register_script( 'imagesloaded', plugin_dir_url( __FILE__ ) . '/assets/js/imagesloaded-pkgd-min.js', '1.0.0', true );
     }
     public function get_script_depends() {
         return [ 'countdown','imagesloaded' ];
     }
    public function get_name() {

        return 'restly_nft_pro_c_menu_c_menu';
    }

    public function get_title() {
        return esc_html__( 'Restly NFT Product With Menu', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-products';
    }

    public function get_categories() {
        return ['restlynft'];
    }

    protected function register_controls() {
        function get_authors_role(){
            global $authordata;
            $author_roles = $authordata->roles;
            $author_role = array_shift($author_roles);
            return $author_role;
        }
        //Content tab start
        $this->start_controls_section(
            'restly_nft_pro_c_menu_c_menu_options',
            [
                'label' => esc_html__( 'Products Filter', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_cat_enable',
            [
                'label' => esc_html__( 'Enable Menu', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_nft_procat_all_text_enable',
            [
                'label' => esc_html__( 'Enable All Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'restly_nft_pro_c_menu_c_menu_cat_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_procat_all_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'All NFT', 'restlycore' ),
                'condition' => [
                    'restly_nft_pro_c_menu_c_menu_cat_enable' => 'yes',
                    'restly_nft_procat_all_text_enable' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_by_cat',
            [
                'label' => esc_html__( 'by Category', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => restly_woo_cat_name(),
                'label_block' => true
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_orderby',
            [
                'label' => esc_html__( 'Order by', 'restlycore' ),
                'type' => Controls_Manager::SELECT,
                'default' => 'none',
                'options' => [
                    'none'          => esc_html__('None','restlycore'),
                    'ID'            => esc_html__('ID','restlycore'),
                    'date'          => esc_html__('Date','restlycore'),
                    'name'          => esc_html__('Name','restlycore'),
                    'title'         => esc_html__('Title','restlycore'),
                    'comment_count' => esc_html__('Comment count','restlycore'),
                    'rand'          => esc_html__('Random','restlycore'),
                ],
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_order',
            [
                'label'   => esc_html__( 'Order', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'DESE',
                'options' => [
                    'ASC'  => esc_html__( 'ASC', 'restlycore' ),
                    'DESE' => esc_html__( 'DESE', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_price_label',
            [
                'label' => esc_html__( 'Price Label', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Bid : ', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_timer',
            [
                'label' => esc_html__( 'Enable Timer', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menus_show',
            [
                'label' => esc_html__( 'Display Items', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 20,
                'step' => 1,
                'default' => 8,
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_column',
            [
                'label' => esc_html__( 'Column', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '12'  => esc_html__( 'Col 1', 'restlycore' ),
                    '6'  => esc_html__( 'Col 2', 'restlycore' ),
                    '4'  => esc_html__( 'Col 3', 'restlycore' ),
                    '3'  => esc_html__( 'Col 4', 'restlycore' ),
                    '2'  => esc_html__( 'Col 6', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_c_menu_pagination',
            [
                'label'        => esc_html__( 'Enable Pagination ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_pro_c_menu_c_menu_hadding_settings',
            [
                'label' => esc_html__( 'Hading Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_stitle',
            [
                'label' => esc_html__( 'Sub Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Action', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Live Auctions', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_nft_pro_c_menu_title_tag',
            [
                'label' => esc_html__( 'HTML Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h3',
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
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_nft_pro_c_menu_action_CSS_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_CSS_title_align',
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
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav .section-title' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_nft_pro_c_menu_action_nft_pro_c_menu_actions_tabs'
        );
        $this->start_controls_tab(
            'restly_nft_pro_c_menu_actions_tabs_stitle',
            [
                'label' => __( 'Small Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_section_snft_pro_c_menu_action_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .nft-active-top-nav span.sub-title',
            ]
        );
        $this->add_responsive_control(
            'restly_section_snft_pro_c_menu_action_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav span.sub-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_section_snft_pro_c_menu_action_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav span.sub-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_section_snft_pro_c_menu_action_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav span.sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_nft_pro_c_menu_actions__tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_section_nft_pro_c_menu_action_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .nft-active-top-nav .title',
            ]
        );
        $this->add_responsive_control(
            'restly_section_nft_pro_c_menu_action_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav .title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_section_nft_pro_c_menu_action_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav .title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_section_nft_pro_c_menu_action_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .nft-active-top-nav .title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_pro_c_menu_c_menu_item_css_box',
            [
                'label' => esc_html__( 'Item Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_pro_c_menu_c_menu_item_box_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_c_menu_item_box_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_item_box_aligment',
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
                        'default' => 'left',
                        'toggle' => true,
                        'selectors' => [
                            '{{WRAPPER}} .actions-active .action-item' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_item_box_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .actions-active .action-item',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_item_box_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-active .action-item',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_item_box_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-active .action-item',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_item_box_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-active .action-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_item_box_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-active .action-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_item_box_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-active .action-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_c_menu_item_box_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_item_box_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .actions-active .action-item:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_item_box_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-active .action-item:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_item_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-active .action-item:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_item_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-active .action-item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_restly_nft_pro_c_menu_c_menu_css_image',
            [
                'label' => esc_html__( 'Image Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_restly_nft_pro_c_menu_c_menu_css_image_tabs'
            );
                $this->start_controls_tab(
                    'restly_restly_nft_pro_c_menu_c_menu_css_image_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_css_image_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .action-item .image img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_css_image_height',
                    [
                        'label' => esc_html__( 'Height', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px' ],
                        'range' => [
                            'px' => [
                                'min' => 100,
                                'max' => 500,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .image img' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_css_image_cover',
                    [
                        'label' => esc_html__( 'Object Fit', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::SELECT,
                        'default' => 'cover',
                        'options' => [
                            'cover'  => esc_html__( 'Cover', 'restlycore' ),
                            'contain'  => esc_html__( 'Contain', 'restlycore' ),
                            'fill'  => esc_html__( 'Fill', 'restlycore' ),
                            'unset'  => esc_html__( 'Unset', 'restlycore' ),
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .image img' => 'object-fit: {{VALUE}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_css_image_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item .image img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_css_image_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_css_image_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item .image img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_css_image_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_css_image_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_restly_nft_pro_c_menu_c_menu_css_image_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_css_image_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .action-item:hover .image img',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_css_image_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item:hover .image img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_css_image_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item:hover .image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_css_image_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item:hover .image img',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_pro_c_menu_c_menu_content_css_box',
            [
                'label' => esc_html__( 'Content Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_pro_c_menu_c_menu_conent_css_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_c_menu_conent_css_tabs_title',
                    [
                        'label' => __( 'Title', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_title_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .nft-product-title',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_title_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .nft-product-title a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_title_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item:hover .nft-product-title a' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_title_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .nft-product-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_title_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .nft-product-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_c_menu_conent_css_tabs_price',
                    [
                        'label' => __( 'Price', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_price_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item .content .bid-dots .bid',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_price_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .bid-dots .bid' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_price_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item:hover .content .bid-dots .bid' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_price_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .bid-dots .bid' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_price_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .bid-dots .bid' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_price_dot_c',
                    [
                        'label' => esc_html__( 'Dot Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .bid-dots .dots span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_price_dot_bc',
                    [
                        'label' => esc_html__( 'Dot Background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .bid-dots .dots' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_c_menu_conent_css_tabs_img',
                    [
                        'label' => __( 'Author', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_atitle_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item .content .author-wish .author .nft-woo-author-name',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_atitle_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author .nft-woo-author-name' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_atitle_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item:hover .content .author-wish .author .nft-woo-author-name' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_atitle_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author .nft-woo-author-name' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_atitle_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author .nft-woo-author-name' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_control(
                    'restluy_nft_pro_c_menu_img_anote2',
                    [
                        'label' => __( 'Author Rols Optins', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_c_menu_aroles_typo',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .action-item .content .author-wish .author span',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_aroles_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_aroles_hcolor',
                    [
                        'label' => esc_html__( 'Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item:hover .content .author-wish .author span' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_aroles_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_aroles_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_control(
                    'restluy_nft_pro_c_menu_img_anote',
                    [
                        'label' => __( 'Image Optins', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_img_width',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px' ],
                        'range' => [
                            'px' => [
                                'min' => 30,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author img' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_img_height',
                    [
                        'label' => esc_html__( 'Height', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 30,
                                'max' => 200,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author img' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_img_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_img_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_img_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_control(
                    'restluy_nft_pro_c_menu_img_anote3',
                    [
                        'label' => __( 'Cart Icon Optins', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_card_c',
                    [
                        'label' => esc_html__( 'Cart Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .wish a.button' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_c_menu_card_hc',
                    [
                        'label' => esc_html__( 'Cart Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .action-item .content .author-wish .wish a.button.added' => 'color: {{VALUE}}',
                            '{{WRAPPER}} .action-item .content .author-wish .wish a.button:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_pro_c_menu_action_CSS_timer_options',
            [
                'label' => esc_html__( 'Timer Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_nft_pro_c_menu_action_timer_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .action-item .image .count-down',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_nft_pro_c_menu_action_timer_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .action-item .image .count-down',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_box_radius',
            [
                'label' => esc_html__( 'Border Radius', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_nft_pro_c_menu_action_timer_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .action-item .image .count-down',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_nft_pro_c_menu_action_timer_css_tabs'
        );
        $this->start_controls_tab(
            'restly_nft_pro_c_menu_action_timer_css_tabs_number',
            [
                'label' => __( 'Number', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_pro_c_menu_action_timer_number_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .action-item .image .count-down li span',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_number_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down li span' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_number_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down li span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_number_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down li span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_nft_pro_c_menu_action_timer_css_tabs_hover',
            [
                'label' => __( 'Text', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_pro_c_menu_action_timer_text_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .action-item .image .count-down li',
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_text_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down li' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_text_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_pro_c_menu_action_timer_text_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .action-item .image .count-down li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_pro_c_menu_action_CSS_arrow_options',
            [
                'label' => esc_html__( 'Arrow Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
            );
            $this->start_controls_tabs(
                'restly_nft_pro_c_menu_action_CSS_arrow_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_action_CSS_arrow_tabs_Dot',
                    [
                        'label' => __( 'Dot', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_dot_aligment',
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
                        'selectors' => [
                            '{{WRAPPER}} .actions-active ul.slick-dots' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'nft_pro_c_menu_action_CSS_arrow_dot_color',
                    [
                        'label' => esc_html__( 'background Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .actions-active ul.slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'nft_pro_c_menu_action_CSS_arrow_dot_acolor',
                    [
                        'label' => esc_html__( 'Active/Hover Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .actions-active ul.slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                            '{{WRAPPER}} .actions-active ul.slick-dots li button:hover' => 'background-color: {{VALUE}}',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_pro_c_menu_action_CSS_arrow_tabs_nav',
                    [
                        'label' => __( 'Arrow', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_action_CSS_arrow_background',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .actions-arrow-btns .slick-arrow',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_size',
                    [
                        'label' => esc_html__( 'icon Size', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 5,
                                'max' => 30,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'font-size: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_width',
                    [
                        'label' => esc_html__( 'Width', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 100,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'width: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_height',
                    [
                        'label' => esc_html__( 'Height', 'restlycore' ),
                        'type' => Controls_Manager::SLIDER,
                        'size_units' => [ 'px', '%' ],
                        'range' => [
                            'px' => [
                                'min' => 0,
                                'max' => 100,
                                'step' => 1,
                            ],
                        ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'height: {{SIZE}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_action_CSS_arrow_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-arrow-btns .slick-arrow',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_action_CSS_arrow_shadow',
                        'label' => esc_html__( 'Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-arrow-btns .slick-arrow',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_control(
                    'restly_nft_pro_c_menu_c_menu_arrow_note',
                    [
                        'label' => __( 'Arrow Hover Options', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::HEADING,
                        'separator' => 'before',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_action_CSS_arrow_hbackground',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .actions-arrow-btns .slick-arrow:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_hcolor',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow:hover' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_action_CSS_arrow_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-arrow-btns .slick-arrow:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_pro_c_menu_action_CSS_arrow_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .actions-arrow-btns .slick-arrow:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_pro_c_menu_action_CSS_arrow_hshadow',
                        'label' => esc_html__( 'Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .actions-arrow-btns .slick-arrow:hover',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_nft_procat_menu_style',
            [
                'label' => esc_html__( 'Menu Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_nft_pro_c_menu_c_menu_cat_enable' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_procat_menu_css_aligment',
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
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .collection-filter' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'nft_procat_menu_css_box_margin',
            [
                'label' => esc_html__( 'Box Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .collection-filter' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'nft_procat_menu_css_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .collection-filter' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_product_menu_style_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_product_menu_css_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Typography::get_type(),
                    [
                        'name' => 'nft_product_menu_css_typography',
                        'label' => esc_html__( 'Typography', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-filter li',
                    ]
                );
                $this->add_responsive_control(
                    'nft_product_menu_css_color',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .collection-filter li' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'nft_product_menu_css_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .collection-filter li',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'nft_product_menu_css_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-filter li',
                    ]
                );
                $this->add_responsive_control(
                    'nft_product_menu_css_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-filter li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'nft_product_menu_css_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-filter li',
                    ]
                );
                $this->add_responsive_control(
                    'nft_product_menu_css_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-filter li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'nft_product_menu_css_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-filter li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_product_menu_css_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'nft_product_menu_css_hcolor',
                    [
                        'label' => esc_html__( 'Color', 'restlycore' ),
                        'type' => \Elementor\Controls_Manager::COLOR,
                        'selectors' => [
                            '{{WRAPPER}} .collection-filter li:hover' => 'color: {{VALUE}}',
                            '{{WRAPPER}} .collection-filter li.current' => 'color: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'nft_product_menu_css_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'gradient', 'video' ],
                        'selector' => '
                            {{WRAPPER}} .collection-filter li:before,
                            {{WRAPPER}} .collection-filter li:before
                        ',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'nft_product_menu_css_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-filter li:hover',
                        'selector' => '{{WRAPPER}} .collection-filter li.current',
                    ]
                );
                $this->add_responsive_control(
                    'nft_product_menu_css_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-filter li:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                            '{{WRAPPER}} .collection-filter li.current' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'nft_product_menu_css_hshadow',
                        'label' => esc_html__( 'Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-filter li:hover:before',
                        'selector' => '{{WRAPPER}} .collection-filter li.current:hover:before',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        // Products Query
        global $product;
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        if(!empty($settings['restly_nft_pro_c_menu_c_menu_by_cat'])){
            $p = new \WP_Query( array( 
                'posts_per_page' => $settings['restly_nft_pro_c_menu_c_menus_show'],
                'post_type' => 'product',
                'paged'     => $paged,
                'orderby'   => esc_attr($settings['restly_nft_pro_c_menu_c_menu_orderby']),
                'order'     => esc_attr($settings['restly_nft_pro_c_menu_c_menu_order']),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => $settings['restly_nft_pro_c_menu_c_menu_by_cat'],
                    )
                ),
            ));
        }else{
            $p = new \WP_Query( array( 
                'posts_per_page' => $settings['restly_nft_pro_c_menu_c_menus_show'],
                'post_type' => 'product',
                'paged'     => $paged,
                'orderby'   => esc_attr($settings['restly_nft_pro_c_menu_c_menu_orderby']),
                'order'     => esc_attr($settings['restly_nft_pro_c_menu_c_menu_order'])
            ));
        }
        echo '
        <script>
            jQuery(document).ready(function($) {
                "use strict";
                $(".count-down").each(function () {
                    $(this).countdown({
                        date: $(this).attr("data-date")
                    });
                });
                $(".collection-filter li").on("click", function () {
                    $(".collection-filter li").removeClass("current");
                    $(this).addClass("current");
        
                    var selector = $(this).attr("data-filter");
                    $(".collection-active").imagesLoaded(function () {
                        $(".collection-active").isotope({
                            itemSelector: ".item",
                            filter: selector,
                        });
                    });
                });
            });
        </script>';
        ob_start();
        $procatagoris = get_terms(['taxonomy' => 'product_cat', 'hide_empty' => true ]);
        ?>
        <div class="nft-actions-wrapper">
            <div class="nft-active-top-nav">
                <div class="section-title mb-20">
                    <?php if($settings['restly_nft_pro_c_menu_stitle']){
                        echo '<span class="sub-title">'.esc_html($settings['restly_nft_pro_c_menu_stitle']).'</span>';
                    }?>
                    <?php if($settings['restly_nft_pro_c_menu_stitle']){
                        echo '<'.esc_attr($settings['restly_nft_pro_c_menu_title_tag']).' class="title">'. wp_kses_post($settings['restly_nft_pro_c_menu_title']) .'</'.esc_attr($settings['restly_nft_pro_c_menu_title_tag']).'>';
                    }?>
                </div>
                <?php if( $settings['restly_nft_pro_c_menu_c_menu_cat_enable'] == 'yes' && !is_wp_error($procatagoris)) : ?>
                <ul class="collection-filter">
                    <?php if($settings['restly_nft_procat_all_text_enable'] == 'yes' ){
                        echo '<li data-filter="*" class="current">'.esc_html($settings['restly_nft_procat_all_text']).'</li>';
                    } ?>
                    <?php
                    if(!empty($settings['restly_nft_pro_c_menu_c_menu_by_cat'])){
                        foreach ( $settings['restly_nft_pro_c_menu_c_menu_by_cat'] as $categorySlug ){
                            $catTerms = get_term_by('slug', $categorySlug, 'product_cat');
                            echo '<li data-filter=".'.$catTerms->slug.'">'.$catTerms->name.'</li>';
                        }
                    }elseif(!empty($procatagoris) && ! is_wp_error( $procatagoris )){
                        foreach($procatagoris as $procatagori){
                            echo '<li data-filter=".'.$procatagori->slug.'">'.$procatagori->name.'</li>';
                        }
                    }
                    ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="actions-active">
                <div class="row collection-active">
                    <?php while ( $p->have_posts() ): $p->the_post(); 
                $sales_price_to = get_post_meta( get_the_ID(), '_sale_price_dates_to', true );
                if($sales_price_to != ""){
                    $display_date = date( "F j, Y H:i:s", $sales_price_to );
                }
                $product = wc_get_product( get_the_ID() );
                $user_roles = get_authors_role();
                $disply_roles = str_replace("_", " ", $user_roles);
                $productCatList = get_the_terms(get_the_ID(), 'product_cat');
                if ($productCatList && !is_wp_error($productCatList)) {
                    $catList = array();
                    foreach ( $productCatList as $singleCategory ) {
                        $catList[] = $singleCategory->slug;
                    }
                    $assignedCatList = join(" ", $catList);
                } else {
                    $assignedCatList = '';
                }
                ?>
                <div class="item <?php echo esc_attr($assignedCatList); ?> col-xl-<?php echo esc_attr($settings['restly_nft_pro_c_menu_c_menu_column']); ?> col-lg-4 col-sm-6">
                    <div <?php wc_product_class( 'nft-item action-item', $product ); ?>>
                        <div class="image">
                            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                            <?php if($sales_price_to != "" && $settings['restly_nft_pro_c_menu_c_menu_timer'] == 'yes' ) : ?>
                            <ul class="count-down" data-date="<?php echo esc_attr($display_date); ?>">
                                <li><span class="days"><?php echo esc_html__('14','restlycore'); ?></span><?php echo esc_html__('days','restlycore'); ?></li>
                                <li><span class="hours"><?php echo esc_html__('23','restlycore'); ?></span><?php echo esc_html__('Hrs','restlycore'); ?></li>
                                <li><span class="minutes"><?php echo esc_html__('45','restlycore'); ?></span><?php echo esc_html__('Mins','restlycore'); ?></li>
                                <li><span class="seconds"><?php echo esc_html__('29','restlycore'); ?></span><?php echo esc_html__('Sec','restlycore'); ?></li>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <div class="bid-dots">
                                <div class="bid"><?php echo esc_html($settings['restly_nft_pro_c_menu_c_menu_price_label']); ?><b><?php woocommerce_template_loop_price(); ?></b></div>
                                <?php if($product->is_on_sale() != true ){
                                    echo '<div class="dots"><span></span><span></span><span></span></div>';
                                } ?>
                            </div>
                            <h4 class="nft-product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <div class="author-wish">
                                <div class="author">
                                <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                                    <div class="description">
                                        <h6 class="nft-woo-author-name"><?php the_author(); ?></h6>
                                        <span><?php echo esc_html($disply_roles); ?></span>
                                    </div>
                                </div>
                                <div class="wish"><a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="button add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo esc_attr($product->get_ID()) ?>"><i class="fas fa-shopping-cart"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query();?>
                <?php if($settings['restly_nft_pro_c_menu_c_menu_pagination'] == 'yes' ) { ?>
                    <?php restly_paginate_nav($p); ?>
                <?php } ?>
                </div>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_nft_pro_c_menu_c_menu_Widget );