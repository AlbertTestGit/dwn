<?php namespace Elementor;

class restly_tabs_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_tabs';
    }

    public function get_title() {
        return esc_html__( 'Restly UI Tab', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-tabs';
    }

    public function get_categories() {
        return ['restly'];
    }
    /**
     * Elementor Templates List
     * return array
     */
    public function restly_elementor_template() {
        $templates = Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
        $types     = array();
        if ( empty( $templates ) ) {
            $template_lists = [ '0' => __( 'Do not Saved Templates.', 'restly' ) ];
        } else {
            $template_lists = [ '0' => __( 'Select Template', 'restly' ) ];
            foreach ( $templates as $template ) {
                $template_lists[ $template['template_id'] ] = $template['title'] . ' (' . $template['type'] . ')';
            }
        }
        return $template_lists;
    }
    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'restly_tabs_options',
            [
                'label' => esc_html__( 'Restly Tabs', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'restly_tabs_active',
            [
                'label' => esc_html__( 'Active', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );
        $repeater->add_control(
            'restly_tabs_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Data Center', 'restlycore' ),
                'placeholder' => esc_html__( 'Type your title here', 'restlycore' ),
            ]
        );
        $repeater->add_control(
			'restly_tabs_title_icon',
			[
				'label' => __( 'Title Icons', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);
        $repeater->add_responsive_control(
            'restly_tabs_content_source',
            [
                'label' => esc_html__( 'Content Source', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'custom',
                'options' => [
                    'custom'  => esc_html__( 'Content', 'restlycore' ),
                    'elementor' => esc_html__( 'Template', 'restlycore' ),
                ],
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'template_id',
            [
                'label'     => __( 'Content', 'restly' ),
                'type'      => Controls_Manager::SELECT,
                'default'   => '0',
                'options'   => $this->restly_elementor_template(),
                'condition' => [
                    'restly_tabs_content_source' => "elementor"
                ],
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'restly_tabs_content_custom',
            [
                'label'      => __( 'Content', 'restly' ),
                'type'       => Controls_Manager::WYSIWYG,
                'title'      => __( 'Content', 'restly' ),
                'show_label' => false,
                'condition'  => [
                    'restly_tabs_content_source' => 'custom',
                ],
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'restly_tabs_list',
            [
                'label'   => esc_html__( 'Tabs', 'restlycore' ),
                'type'    => \Elementor\Controls_Manager::REPEATER,
                'fields'  => $repeater->get_controls(),
                'default' => [
                    [
                        'restly_tabs_title' => '',
                        'restly_tabs_title_icon' => '',
                        'restly_tabs_content_source' => '',
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_tabs_css_box_options',
            [
                'label' => esc_html__( 'Restly Tab Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_box_color',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_box_border_color',
            [
                'label' => esc_html__( 'border Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul' => 'border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '0',
                    'right' => '0',
                    'bottom' => '70',
                    'left' => '0',
                    'isLinked' => true
                    ],
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_tabs_css_active_options',
            [
                'label' => esc_html__( 'Restly Items', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'restly_tab_items_tabs'
        );
        $this->start_controls_tab(
            'restly_tab_list_tabs_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_icon_c',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul li button i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_icon_ac',
            [
                'label' => esc_html__( 'Icon Active/hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul li button.active i, .restly-section-tabs-wrapper ul li button:hover i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_icon_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul li button i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '0',
                    'right' => '25',
                    'bottom' => '0',
                    'left' => '0',
                    'isLinked' => true
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper ul li button i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly__tabs_hover',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link, .restly-section-tabs-wrapper .nav-tabs .nav-link' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_title_cbg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link, .restly-section-tabs-wrapper .nav-tabs .nav-link' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        
        $this->add_responsive_control(
            'restly_tabs_css_active_title_ac',
            [
                'label' => esc_html__( 'Active/hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link.active, .restly-section-tabs-wrapper .nav-tabs .nav-link.active' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_title_acbg',
            [
                'label' => esc_html__( 'Active/hover background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link.active, .restly-section-tabs-wrapper .nav-tabs .nav-link.active' => 'background-color: {{VALUE}}',
                ],
            ]
        );
       $this->add_group_control(
           \Elementor\Group_Control_Typography::get_type(),
           [
               'name' => 'restly_tabs_css_active_title_typo',
               'label' => esc_html__( 'Typography', 'restlycore' ),
               'selector' => '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link, .restly-section-tabs-wrapper .nav-tabs .nav-link',
           ]
       );
        $this->add_responsive_control(
            'restly_tabs_css_active_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link, .restly-section-tabs-wrapper .nav-tabs .nav-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '0',
                    'right' => '0',
                    'bottom' => '30',
                    'left' => '0',
                    'isLinked' => true
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-item .nav-link, .restly-section-tabs-wrapper .nav-tabs .nav-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_tabs_css_active_title_border',
            [
                'label' => esc_html__( 'Border Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-section-tabs-wrapper .nav-tabs .nav-link.active:after, .restly-section-tabs-wrapper .nav-tabs .nav-link:hover:after' => 'background-color: {{VALUE}}',
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
        $unique = rand(350, 540);
        ob_start();
        ?>
        <div class="restly-section-tabs-wrapper">
            <ul class="d-flex  nav nav-tabs justify-content-between" id="RestlyTab<?php echo esc_attr($unique); ?>" role="tablist">
                <?php $count = 0; foreach($settings['restly_tabs_list'] as $tabist) : $count++;
                
                if($tabist['restly_tabs_active'] == 'yes'){
                    $active = 'active';
                }else{
                    $active = '';
                }
                ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo esc_attr($active); ?>" id="restly-<?php echo esc_attr($count.$unique); ?>-tab" data-bs-toggle="tab" data-bs-target="#restly-tab-<?php echo esc_attr($count.$unique); ?>" type="button" role="tab" aria-controls="restly-tab-<?php echo esc_attr($count.$unique); ?>" aria-selected="true"><?php if(!empty($tabist['restly_tabs_title_icon'])){echo '<i class="'.esc_attr($tabist['restly_tabs_title_icon']['value']).'"></i>';
                    } ?><?php echo esc_html($tabist['restly_tabs_title']); ?></button>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content" id="RestlyTabContent<?php echo esc_attr($unique); ?>">
            <?php $count = 0; foreach($settings['restly_tabs_list'] as $tabist) : $count++;
                if($tabist['restly_tabs_active'] == 'yes'){
                    $active = 'show active';
                }else{
                    $active = '';
                } 
                ?>
                <div class="tab-pane fade <?php echo esc_attr($active); ?>" id="restly-tab-<?php echo esc_attr($count.$unique); ?>" role="tabpanel" aria-labelledby="restly-<?php echo esc_attr($count.$unique); ?>-tab">
                    <?php 
                    if($tabist['restly_tabs_content_source'] == 'elementor' && !empty( $tabist['template_id'] )){
                    echo Plugin::instance()->frontend->get_builder_content_for_display( $tabist['template_id'] );
                    }else{
                        echo wp_kses_post( $tabist['restly_tabs_content_custom'] );
                    }
                    ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        echo ob_get_clean();
    }
}
Plugin::instance()->widgets_manager->register( new restly_tabs_Widget );