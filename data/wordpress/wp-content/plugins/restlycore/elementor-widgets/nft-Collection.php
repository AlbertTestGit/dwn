<?php 
namespace Elementor;

class restly_nft_collection_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_nft_collection';
    }

    public function get_title() {
        return esc_html__( 'Restly NFT Collection', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-posts-carousel';
    }

    public function get_categories() {
        return ['restlynft'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_nft_collection_options',
            [
                'label' => esc_html__( 'Restly NFT Collection', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_nft_collection_img',
            [
                'label' => __( 'Upload Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'restly_nft_collection_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Creative Artwork', 'restlycore' ),
            ]
        );
        $repeater->add_control(
            'restly_nft_collection_title_link',
            [
                'label' => __( 'Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'restly_nft_collection_item',
            [
                'label' => esc_html__( 'Items', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( '150 Items', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_nft_collections',
            [
                'label' => esc_html__( 'List', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_nft_collection_title' => esc_html__( 'Creative Artwork', 'restlycore' ),
                        'restly_nft_collection_item' => esc_html__( '115 items', 'restlycore' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_callection_advance',
            [
                'label' => esc_html__( 'Settings', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'restly_nft_callection_html',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Small Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h5',
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
            'restly_nft_callection_loop',
            [
                'label'        => esc_html__( 'Enable Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $this->add_control(
            'restly_nft_callection_speed',
            [
                'label'     => esc_html__( 'Slide Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 10,
                'default'   => 1000,
            ]
        );
        $this->add_control(
            'restly_nft_callection_aloop',
            [
                'label'        => esc_html__( 'Enable Auto Loop ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'no',
            ]
        );
        $this->add_control(
            'restly_nft_callection_aspeed',
            [
                'label'     => esc_html__( 'Slide auto Speed', 'restlycore' ),
                'type'      => Controls_Manager::NUMBER,
                'min'       => 500,
                'max'       => 8000,
                'step'      => 50,
                'default'   => 5000,
            ]
        );
        $this->add_control(
            'restly_nft_callection_nav',
            [
                'label'        => esc_html__( 'Enable Nav ', 'restlycore' ),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => esc_html__( 'On', 'restlycore' ),
                'label_off'    => esc_html__( 'Off', 'restlycore' ),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_collection_css_box',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_collection_box_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_collection_box_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_box_aligment',
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
                            '{{WRAPPER}} .collection-category-item' => 'text-align: {{VALUE}}',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_collection_box_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .collection-category-item',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_collection_box_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_collection_box_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_box_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_box_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_box_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_collection_box_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_collection_box_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .collection-category-item:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_collection_box_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item:hover',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_collection_box_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item:hover',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_box_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_collection_css_img',
            [
                'label' => esc_html__( 'Image', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
            $this->start_controls_tabs(
                'restly_nft_collection_img_tabs'
            );
                $this->start_controls_tab(
                    'restly_nft_collection_img_tabs_normal',
                    [
                        'label' => __( 'Normal', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_collection_img_bg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .collection-category-item .category-images img',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_collection_img_border',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item .category-images img',
                    ]
                );
                $this->add_responsive_control(
                    'mrestly_nft_collection_img_with_radius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item .category-images img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_collection_img_shadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item .category-images img',
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_img_margin',
                    [
                        'label' => esc_html__( 'Margin', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item .category-images img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_responsive_control(
                    'restly_nft_collection_img_padding',
                    [
                        'label' => esc_html__( 'Padding', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item .category-images img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->end_controls_tab();
                
                $this->start_controls_tab(
                    'restly_nft_collection_img_tabs_hover',
                    [
                        'label' => __( 'Hover', 'restlycore' ),
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Background::get_type(),
                    [
                        'name' => 'restly_nft_collection_img_hbg',
                        'label' => esc_html__( 'Background', 'restlycore' ),
                        'types' => [ 'classic', 'gradient', 'video' ],
                        'selector' => '{{WRAPPER}} .collection-category-item:hover .category-images img',
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Border::get_type(),
                    [
                        'name' => 'restly_nft_collection_img_hborder',
                        'label' => esc_html__( 'Border', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item:hover .category-images img',
                    ]
                );
                $this->add_responsive_control(
                    'mrestly_nft_collection_img_with_hradius',
                    [
                        'label' => esc_html__( 'Border Radius', 'restlycore' ),
                        'type' => Controls_Manager::DIMENSIONS,
                        'size_units' => [ 'px', '%', 'em' ],
                        'selectors' => [
                            '{{WRAPPER}} .collection-category-item:hover .category-images img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        ],
                    ]
                );
                $this->add_group_control(
                    \Elementor\Group_Control_Box_Shadow::get_type(),
                    [
                        'name' => 'restly_nft_collection_img_hshadow',
                        'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                        'selector' => '{{WRAPPER}} .collection-category-item:hover .category-images img',
                    ]
                );
                $this->end_controls_tab();
            $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_collection_css_content',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_nft_collection_csscontent_tabs'
        );
        $this->start_controls_tab(
            'restly_nft_collection_css_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_collection_title_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => [
                    '{{WRAPPER}} .nft-seller-title',
                ],
                'selector' => '{{WRAPPER}} .collection-category-item .title-dots .nft-ctitle',
                
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_title_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item .title-dots .nft-ctitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .collection-category-item .title-dots .nft-ctitle a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_title_css_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item:hover .title-dots .nft-ctitle' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .collection-category-item:hover .title-dots .nft-ctitle a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_title_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item .title-dots .nft-ctitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_title_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item .title-dots .nft-ctitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_nft_collection_css_tabs_item',
            [
                'label' => __( 'Items', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_nft_collection_item_css_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .collection-category-item span.items',
                
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_item_css_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item span.items' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_item_css_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item:hover span.items' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_item_css_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item span.items' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_item_css_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .collection-category-item span.items' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_nft_collection_css_nav',
            [
                'label' => esc_html__( 'Nav', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_css_nav_width',
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
                    '{{WRAPPER}} .collection-category-active .slick-arrow' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_css_nav_height',
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
                    '{{WRAPPER}} .collection-category-active .slick-arrow' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_nft_collection_css_nav_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .collection-category-active .slick-arrow' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_nft_collection_css_nav_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => ['gradient'],
                'selector' => '{{WRAPPER}} .collection-category-active .slick-arrow:before',
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $uniqe = rand(1241, 3256);
        ob_start();
        ?>
        <script>
            jQuery(document).ready(function($) {
                "use strict";
                if ($("#nft-collection-<?php echo esc_attr($uniqe); ?>").length) {
                    $("#nft-collection-<?php echo esc_attr($uniqe); ?>").slick({
                        rtl: <?php echo json_encode( is_rtl() == 'yes' ? true : false); ?>,
                        dots: false,
                        infinite: <?php echo json_encode($settings['restly_nft_callection_loop'] == 'yes' ? true : false); ?>,
                        autoplay: <?php echo json_encode($settings['restly_nft_callection_aloop'] == 'yes' ? true : false); ?>,
                        autoplaySpeed: <?php echo esc_attr($settings['restly_nft_callection_aspeed']); ?>,
                        arrows: <?php echo json_encode($settings['restly_nft_callection_nav'] == 'yes' ? true : false); ?>,
                        speed: <?php echo esc_attr($settings['restly_nft_callection_speed']); ?>,
                        prevArrow: '<button class="prev"><i class="fas fa-chevron-left"></i></button>',
                        nextArrow: '<button class="next"><i class="fas fa-chevron-right"></i></button>',
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        responsive: [
                            {
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 1,
                                }
                            }
                        ]
                    });
                }
            });
        </script>
        <section class="collection-category-area">
            <div class="container">
                <div class="collection-category-active" id="nft-collection-<?php echo esc_attr($uniqe); ?>">
                   <?php foreach($settings['restly_nft_collections'] as $collection ) :
                    $this->add_render_attribute( 'restly_nft_collection_img', 'src', $collection['restly_nft_collection_img']['url'] );
                    $this->add_render_attribute( 'restly_nft_collection_img', 'alt', \Elementor\Control_Media::get_image_alt( $collection['restly_nft_collection_img'] ) );
                    $this->add_render_attribute( 'restly_nft_collection_img', 'title', \Elementor\Control_Media::get_image_title( $collection['restly_nft_collection_img'] ) );
                    $this->add_render_attribute( 'restly_nft_collection_img', 'class', 'restly-nft-collection' );
                     
                    if ( ! empty( $collection['restly_nft_collection_title_link']['url'] ) ) {
                        $this->add_link_attributes( 'restly_nft_collection_title_link', $collection['restly_nft_collection_title_link'] );
                    }
                    ?>
                    <div class="items">
                        <div class="collection-category-item">
                            <div class="category-images">
                                <a href="<?php echo $this->get_render_attribute_string( 'restly_nft_collection_title_link' ); ?>"><?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $collection, 'full', 'restly_nft_collection_img' ); ?></a>
                            </div>
                            <div class="title-dots">
                                <div class="content">
                                    <?php if(!empty($collection['restly_nft_collection_title'])){
                                        echo '<'.esc_attr($settings['restly_nft_callection_html']).' class="nft-ctitle"><a href="'.$this->get_render_attribute_string( 'restly_nft_collection_title_link' ).'">'.$collection['restly_nft_collection_title'].'</a></'.esc_attr($settings['restly_nft_callection_html']).'>';
                                    }?>
                                    <?php if(!empty($collection['restly_nft_collection_item'])){
                                        echo '<span class="items">'.$collection['restly_nft_collection_item'].'</span>';
                                    }?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section> 
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_nft_collection_Widget );