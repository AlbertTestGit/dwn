<?php namespace Elementor;

class infotech_service_box_Widget extends Widget_Base {

    public function get_name() {

        return 'service_box';
    }

    public function get_title() {
        return esc_html__( 'Restly Service box', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-flip-box';
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'restly_service_styles',
            [
                'label' => esc_html__( 'Service Style', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_responsive_control(
            'restly_service_style_select',
            [
                'label' => esc_html__( 'Select Style', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'one',
                'options' => [
                    'one'  => esc_html__( 'Style One', 'restlycore' ),
                    'two' => esc_html__( 'Style Two', 'restlycore' ),
                    'three' => esc_html__( 'Style Three', 'restlycore' ),
                    'four' => esc_html__( 'Style Four', 'restlycore' ),
                    'five' => esc_html__( 'Style Five', 'restlycore' ),
                    'six' => esc_html__( 'Style Six', 'restlycore' ),
                ],
            ]
        );
        $this->end_controls_section();
        //=================================
        // ===== SERVICE STYLE ONE ========
        //=================================
        $this->start_controls_section(
            'restly_service_nsection',
            [
                'label' => esc_html__( 'Normal Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_service_style_select' => 'one',
                ],
            ]
        );
        $this->add_control(
			'restly_service_icons_type',
			[
			    'label' => esc_html__('Service Icon Type','restlycore'),
			    'type' =>Controls_Manager::CHOOSE,
			    'options' =>[
				  'img' =>[
					'title' =>esc_html__('Image','restlycore'),
					'icon' =>'fa fa-picture-o',
				  ],
				  'icon' =>[
					'title' =>esc_html__('Icon','restlycore'),
					'icon' =>'fa fa-info',
				  ]
			    ],
			    'default' => 'icon',
			]
		);
        $this->add_control(
			'restly_service_icon_image',
			[
			    'label' => esc_html__('Image icon','restlycore'),
			    'type'=>Controls_Manager::MEDIA,
			    'default' => [
				  'url' => Utils::get_placeholder_image_src(),
			    ],
			    'condition' => [
				  'restly_service_icons_type' => 'img',
			    ]
			]
		);
        $this->add_control(
            'restly_service_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_service_icons_type' => 'icon',
                  ]
            ]
        );
        $this->add_control(
            'restly_service_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'IT Management', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_title_tag1',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
                ],
            ]
        );
        $this->add_control(
            'restly_service_textarea',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->end_controls_section();

        //Content tab start
        $this->start_controls_section(
            'restly_service_hsection',
            [
                'label' => esc_html__( 'Hover Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_service_style_select' => 'one',
                ],
            ]
        );
        $this->add_control(
            'restly_service_htitle',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Preparing For Your Business Success With IT Solution', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_htitle_tag1',
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
                ],
            ]
        ); 
        
        $this->add_control(
            'restly_service_htextarea',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisc', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
			'restly_service_button_url',
			[
				'label' => __( 'Button Link', 'restlycore' ),
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
        $this->add_control(
            'restly_service_button_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Learn More', 'restlycore' ),
            ]
        );
        $this->end_controls_section();
        //=================================
        // ===== SERVICE STYLE ONE END ========
        //=================================
        
        //=================================
        // === SERVICE STYLE TWO START ====
        //=================================
        $this->start_controls_section(
            'restly_service_two_section',
            [
                'label' => esc_html__( 'Service Contents', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'restly_service_style_select',
                            'operator' => '==',
                            'value' => 'two'
                        ],
                        [
                            'name' => 'restly_service_style_select',
                            'operator' => '==',
                            'value' => 'five'
                        ]
                    ]
                ]
            ]
        );
        $this->add_control(
            'restly_service_two_icons_type',
            [
                'label' => esc_html__('Service Icon Type','restlycore'),
                'type' =>Controls_Manager::CHOOSE,
                'options' =>[
                    'img' =>[
                    'title' =>esc_html__('Image','restlycore'),
                    'icon' =>'fa fa-picture-o',
                    ],
                    'icon' =>[
                    'title' =>esc_html__('Icon','restlycore'),
                    'icon' =>'fa fa-info',
                    ]
                ],
                'default' => 'icon',
            ]
        );
        $this->add_control(
            'restly_service_two_icon_image',
            [
                'label' => esc_html__('Image icon','restlycore'),
                'type'=>Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_service_two_icons_type' => 'img',
                ]
            ]
        );
        $this->add_control(
            'restly_service_two_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_service_two_icons_type' => 'icon',
                    ]
            ]
        );
        $this->add_control(
            'restly_service_two_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Data Center', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_title_tag2',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
                ],
            ]
        );
        $this->add_control(
            'restly_service_two_textarea',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor elit sed do eiusmod  is adipisicing consectetur sed do', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_service_two_button_show',
            [
                'label' => esc_html__( 'Enable Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'restly_service_two_button_url',
			[
				'label' => __( 'Button Link', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'restlycore' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
                'condition' => [
                    'restly_service_two_button_show' => 'yes',
                ],
			]
		);
        $this->add_control(
            'restly_service_two_button_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Learn More', 'restlycore' ),
                'condition' => [
                    'restly_service_two_button_show' => 'yes',
                    'restly_service_style_select' => 'two',
                ],
            ]
        );
        $this->add_control(
            'restly_service_two_box_aligment',
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
                'default' => 'left',
                'toggle' => true,
            ]
        );
        $this->end_controls_section();
        //=================================
        // ===== SERVICE STYLE THREE ========
        //=================================
        $this->start_controls_section(
            'restly_service_three_section',
            [
                'label' => esc_html__( 'Service Three', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_service_style_select' => 'three',
                ],
            ]
        );
        $this->add_control(
			'restly_service_three_icons_type',
			[
			    'label' => esc_html__('Service Icon Type','restlycore'),
			    'type' =>Controls_Manager::CHOOSE,
			    'options' =>[
				  'img' =>[
					'title' =>esc_html__('Image','restlycore'),
					'icon' =>'fa fa-picture-o',
				  ],
				  'icon' =>[
					'title' =>esc_html__('Icon','restlycore'),
					'icon' =>'fa fa-info',
				  ]
			    ],
			    'default' => 'icon',
			]
		);
        $this->add_control(
			'restly_service_three_icon_image',
			[
			    'label' => esc_html__('Image icon','restlycore'),
			    'type'=>Controls_Manager::MEDIA,
			    'default' => [
				  'url' => Utils::get_placeholder_image_src(),
			    ],
			    'condition' => [
				  'restly_service_three_icons_type' => 'img',
			    ]
			]
		);
        $this->add_control(
            'restly_service_three_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_service_three_icons_type' => 'icon',
                  ]
            ]
        );
        $this->add_control(
            'restly_service_three_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'IT Management', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_title_tag3',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
                ],
            ]
        );
        $this->add_control(
            'restly_service_three_enable_btn',
            [
                'label' => esc_html__( 'Enable Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'restly_service_three_button_url',
			[
				'label' => __( 'Button Link', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'restlycore' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
                'condition' => [
                    'restly_service_three_enable_btn' => 'yes',
                ],
			]
		);
        $this->add_control(
            'restly_service_three_textarea',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->end_controls_section();
        //=================================
        // ===== SERVICE STYLE FOUR ========
        //=================================
        $this->start_controls_section(
            'restly_service_four_section',
            [
                'label' => esc_html__( 'Service Four', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_service_style_select' => 'four',
                ],
            ]
        );
        $this->add_control(
            'restly_service_four_image',
            [
                'label' => __( 'Choose Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'restly_service_four_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'IT Management', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_four_stitle',
            [
                'label' => esc_html__( 'Sub Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Web Delopment', 'restlycore' ),
            ]
        );
        $this->add_control(
            'service_stitle_tag4',
            [
                'label' => esc_html__( 'HTML Sub Title Tag', 'restlycore' ),
                'description' => esc_html__( 'Add HTML Tag For Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'h6',
                'options' => [
                    'h1'  => esc_html__( 'H1', 'restlycore' ),
                    'h2'  => esc_html__( 'H2', 'restlycore' ),
                    'h3'  => esc_html__( 'H3', 'restlycore' ),
                    'h4'  => esc_html__( 'H4', 'restlycore' ),
                    'h5'  => esc_html__( 'H5', 'restlycore' ),
                    'h6'  => esc_html__( 'H6', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'service_title_tag4',
            [
                'label' => esc_html__( 'HTML Title Tag', 'restlycore' ),
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
                ],
            ]
        );
        $this->add_control(
            'restly_service_four_icon_enable',
            [
                'label' => esc_html__( 'Show Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
			'restly_service_four_icons_type',
			[
			    'label' => esc_html__('Service Icon Type','restlycore'),
			    'type' =>Controls_Manager::CHOOSE,
			    'options' =>[
				  'img' =>[
					'title' =>esc_html__('Image','restlycore'),
					'icon' =>' eicon-single-page',
				  ],
				  'icon' =>[
					'title' =>esc_html__('Icon','restlycore'),
					'icon' =>'eicon-info-circle-o',
				  ]
			    ],
			    'default' => 'icon',
                'condition' => [
                    'restly_service_four_icon_enable' => 'yes',
                ],
			]
		);
        $this->add_control(
			'restly_service_four_icon_image',
			[
			    'label' => esc_html__('Image icon','restlycore'),
			    'type'=>Controls_Manager::MEDIA,
			    'default' => [
				  'url' => Utils::get_placeholder_image_src(),
			    ],
			    'condition' => [
				  'restly_service_four_icons_type' => 'img',
				  'restly_service_four_icon_enable' => 'yes',
			    ]
			]
		);
        $this->add_control(
            'restly_service_four_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_service_four_icons_type' => 'icon',
                    'restly_service_four_icon_enable' => 'yes',
                  ]
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_icon_position',
            [
                'label' => esc_html__( 'Icon Position', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'right',
                'options' => [
                    'left'  => esc_html__( 'Left', 'restlycore' ),
                    'right' => esc_html__( 'Right', 'restlycore' ),
                ],
            ]
        );
        $this->add_control(
            'restly_service_four_link_enable',
            [
                'label' => esc_html__( 'Enable Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_service_four_link',
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
                'condition' => [
                    'restly_service_four_link_enable' => 'yes',
                ],
            ]
        );
        $this->end_controls_section();
        //=================================
        // ===== SERVICE STYLE Six ========
        //=================================
        $this->start_controls_section(
            'restly_service_six_section',
            [
                'label' => esc_html__( 'Service Contents', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
                'condition' => [
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        $this->add_control(
            'restly_service_six_image',
            [
                'label' => __( 'Choose Image', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'restly_service_six_icons_type',
            [
                'label' => esc_html__('Service Icon Type','restlycore'),
                'type' =>Controls_Manager::CHOOSE,
                'options' =>[
                    'img' =>[
                    'title' =>esc_html__('Image','restlycore'),
                    'icon' =>'fa fa-picture-o',
                    ],
                    'icon' =>[
                    'title' =>esc_html__('Icon','restlycore'),
                    'icon' =>'fa fa-info',
                    ]
                ],
                'default' => 'icon',
            ]
        );
        $this->add_control(
            'restly_service_six_icon_image',
            [
                'label' => esc_html__('Image icon','restlycore'),
                'type'=>Controls_Manager::MEDIA,
                'default' => [
                    'url' => Utils::get_placeholder_image_src(),
                ],
                'condition' => [
                    'restly_service_six_icons_type' => 'img',
                ]
            ]
        );
        $this->add_control(
            'restly_service_six_icon',
            [
                'label' => esc_html__( 'Icon', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'condition' => [
                    'restly_service_six_icons_type' => 'icon',
                    ]
            ]
        );
        $this->add_control(
            'restly_service_six_title',
            [
                'label' => esc_html__( 'Title', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Data Center', 'restlycore' ),
            ]
        );
        $this->add_control(
            'restly_service_title_tag6',
            [
                'label' => esc_html__( 'HTML Tag', 'restlycore' ),
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
                ],
            ]
        );
        $this->add_control(
            'restly_service_six_textarea',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem ipsum dolor elit sed do eiusmod  is adipisicing consectetur sed do', 'restlycore' ),
                'show_label' => true,
            ]
        );
        $this->add_control(
            'restly_service_six_button_show',
            [
                'label' => esc_html__( 'Enable Button', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'restly_service_six_button_url',
            [
                'label' => __( 'Button Link', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __( 'https://your-link.com', 'restlycore' ),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
                'condition' => [
                    'restly_service_six_button_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'restly_service_six_button_text',
            [
                'label' => esc_html__( 'Button Text', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Learn More', 'restlycore' ),
                'condition' => [
                    'restly_service_six_button_show' => 'yes',
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        $this->end_controls_section();


        //=================================
        //== SERVICE STYLE ONE CSS START ==
        //=================================
        $this->start_controls_section(
			'restly_service_CSS_normal',
			[
				'label' => esc_html__( 'Normal Box', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'one',
                ],
			]
		);
        $this->start_controls_tabs(
			'restly_service_CSS_normal_tabs'
		);

        $this->start_controls_tab(
			'restly_service_CSS_nbox_tab',
			[
				'label' => __( 'Box', 'restlycore' ),
			]
		);
        $this->add_control(
            'restly_service_CSS_nbox_aligment',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal' => 'text-align: {{VALUE}}',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'restly_service_CSS_n_bg',
				'label' => esc_html__( 'Background', 'restlycore' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .restly-service-normal',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_CSS_n_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-normal',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_n_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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
                    '{{WRAPPER}} .restly-service-normal' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_CSS_n_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_n_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_n_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
			'restly_service_CSS_nicon_tab',
			[
				'label' => __( 'Icon', 'restlycore' ),
			]
		);
        $this->add_responsive_control(
            'restly_service_CSS_n_imgicon_bg',
            [
                'label' => esc_html__( 'Icon Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-img-icon img' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'img',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_n_imgicon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-img-icon img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'img',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_n_imgicon_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-img-icon img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'img',
                ],
            ]
        );
        // Icon css 
        $this->add_responsive_control(
            'restly_service_CSS_nicon_color',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-icon i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nicon_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 10,
                        'max' => 200,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 70,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nicon_bg',
            [
                'label' => esc_html__( 'Icon Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-icon i' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nicon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nicon_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_icons_type' => 'icon',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
			'restly_service_CSS_ntitle_tab',
			[
				'label' => __( 'Title', 'restlycore' ),
			]
		);
        $this->add_responsive_control(
            'restly_service_CSS_ntitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal .service-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_CSS_ntitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-normal .service-title',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_ntitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal .service-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_ntitle_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal .service-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
			'restly_service_CSS_ndec_tab',
			[
				'label' => __( 'Content', 'restlycore' ),
			]
		);
        $this->add_responsive_control(
            'restly_service_CSS_ndev_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal .service-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_CSS_ndev_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-normal .service-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_ndev_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal .service-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_ndev_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-normal .service-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
			'restly_service_CSS_nbtn_tab',
			[
				'label' => __( 'Button', 'restlycore' ),
			]
		);
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 35,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_isize',
            [
                'label' => esc_html__( 'icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 16,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_lineheight',
            [
                'label' => esc_html__( 'Line Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 20,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 37,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_radius',
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
                    'unit' => '%',
                    'size' => 100,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_nbtn_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-nbtn .theme-btns' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
		$this->end_controls_section();
        $this->start_controls_section(
			'restly_service_CSS_hover',
			[
				'label' => esc_html__( 'Hover Box', 'restlycore' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'one',
                ],
			]
		);
        $this->start_controls_tabs(
			'restly_service_CSS_hover_tabs'
		);
        $this->start_controls_tab(
			'restly_service_CSS_hbox_tab',
			[
				'label' => __( 'Box', 'restlycore' ),
			]
		);
        $this->add_control(
            'restly_service_CSS_hbox_aligment',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-hover' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'restly_service_CSS_h_bg',
				'label' => esc_html__( 'Background', 'restlycore' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .restly-service-hover',
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_CSS_h_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-hover',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_h_radius',
            [
                'label' => esc_html__( 'Border Radisu', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
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
                    '{{WRAPPER}} .restly-service-hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_CSS_h_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_h_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_h_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
			'restly_service_CSS_htitle_tab',
			[
				'label' => __( 'Title', 'restlycore' ),
			]
		);
        $this->add_responsive_control(
            'restly_service_CSS_htitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-htitle' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_CSS_htitle_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-htitle',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_htitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-htitle' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_htitle_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-htitle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
			'restly_service_CSS_hdec_tab',
			[
				'label' => __( 'Content', 'restlycore' ),
			]
		);
        $this->add_responsive_control(
            'restly_service_CSS_hdec_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-hover .service-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_CSS_hdec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-hover .service-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hdec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-hover .service-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_ndec_padding',
            [
                'label' => esc_html__( 'Paddng', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-hover .service-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
			'restly_service_CSS_hbtn_tab',
			[
				'label' => __( 'Button', 'restlycore' ),
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_CSS_hbtn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-hbtn a',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hbtn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hbtn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hbtn_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hbtn_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'snote',
            [
                'label' => __( 'Button Hover', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hbtn_hcolor',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a:hover' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_CSS_hbtn_hbgcolor',
            [
                'label' => esc_html__( 'Background Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a:hover' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
		$this->end_controls_section();
        //=================================
        // == SERVICE STYLE ONE CSS END  ==
        //=================================

        //=================================
        // == SERVICE STYLE TWO CSS START  ==
        //=================================
        $this->start_controls_section(
            'restly_service_two_CSS_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'restly_service_style_select',
                            'operator' => '==',
                            'value' => 'two'
                        ],
                        [
                            'name' => 'restly_service_style_select',
                            'operator' => '==',
                            'value' => 'five'
                        ]
                    ]
                ]
            ]
        );
        $this->start_controls_tabs(
            'restly_service_two_tabs'
        );
        $this->start_controls_tab(
            'restly_service_two_box_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_two_box_nbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-two-box',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_two_box_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box',
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_box_nradius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_two_box_nshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_two_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_two_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-two-box:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_two_box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box',
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_box_hradius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_two_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'restly_service_two_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_service_two_CSS_content',
            [
                'label' => esc_html__( ' Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'conditions' => [
                    'relation' => 'or',
                    'terms' => [
                        [
                            'name' => 'restly_service_style_select',
                            'operator' => '==',
                            'value' => 'two'
                        ],
                        [
                            'name' => 'restly_service_style_select',
                            'operator' => '==',
                            'value' => 'five'
                        ]
                    ]
                ]
            ]
        );
        $this->start_controls_tabs(
            'restly_service_two_content_tabs'
        );
        $this->start_controls_tab(
            'restly_service_two_CSS_tabs_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
                'condition' => [
                    'restly_service_two_icons_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_size',
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
                    '{{WRAPPER}} .restly-service-two-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box:hover .restly-service-two-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_hbg',
            [
                'label' => esc_html__( 'Hover Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box:hover .restly-service-two-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-icon i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-icon i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_two_CSS_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-icon i',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_two_CSS_icon_hborder',
                'label' => esc_html__( 'Hover Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box:hover .restly-service-two-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_radius',
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
                    '{{WRAPPER}} .restly-service-two-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_hradius',
            [
                'label' => esc_html__( 'Hover Border Radius', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-service-two-box:hover .restly-service-two-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_two_CSS_icon_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-icon i',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_two_CSS_icon_hshadow',
                'label' => esc_html__( 'Hover  Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box:hover .restly-service-two-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_two_CSS_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-two-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box:hover .service-two-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_two_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-two-title',
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-two-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-two-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_service_two_CSS_tabs_dec',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_dec_color',
            [
                'label' => esc_html__( 'Content Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-two-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_dec_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box:hover .service-two-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_two_CSS_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-two-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-two-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-two-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_service_two_CSS_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_btn_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns2' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_btn_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box:hover a.theme-btns2' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .restly-service-two-box:hover a.theme-btns2.two i' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_style_select' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_CSS_btn_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn a:hover' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_CSS_btn_bg_color',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn a' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_CSS_btn_bg_hcolor',
            [
                'label' => esc_html__( 'Background Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn a:hover' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_size',
            [
                'label' => esc_html__( 'Icon Size', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 30,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn a' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_line_height',
            [
                'label' => esc_html__( 'Icon Line height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn a' => 'line-height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_five_btn_icon_shadow',
                'label' => esc_html__( 'icon Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn a',
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_two_CSS_btn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} a.theme-btns2',
                'condition' => [
                    'restly_service_style_select' => 'tow',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_two_CSS_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_positin',
            [
                'label' => esc_html__( 'Icon Position', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    'one'  => esc_html__( 'Top To Right', 'restlycore' ),
                    'two'  => esc_html__( 'Top To Left', 'restlycore' ),
                    'three' => esc_html__( 'bottom To Right', 'restlycore' ),
                    'four'  => esc_html__( 'bottom To Left', 'restlycore' ),
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_ptop',
            [
                'label' => esc_html__( 'Position Top', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => -25,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn' => 'top: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                    'restly_service_five_btn_icon_positin' => ['one','two']
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_pright',
            [
                'label' => esc_html__( 'Position Top Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 30,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn' => 'right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                    'restly_service_five_btn_icon_positin' => 'one',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_ptopleft',
            [
                'label' => esc_html__( 'Position Top Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                    'restly_service_five_btn_icon_positin' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_pbottom',
            [
                'label' => esc_html__( 'Position Bottom', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn' => 'bottom: {{SIZE}}{{UNIT}}; top:auto;',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                    'restly_service_five_btn_icon_positin' => ['three','four']
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_pbttom_right',
            [
                'label' => esc_html__( 'Position Bottom Right', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn' => 'right: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                    'restly_service_five_btn_icon_positin' => 'three',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_five_btn_icon_pbotomleft',
            [
                'label' => esc_html__( 'Position Bottom Left', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => -300,
                        'max' => 400,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-two-box.service-style-5 .restly-service-tow-btn' => 'left: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'restly_service_style_select' => 'five',
                    'restly_service_five_btn_icon_positin' => 'four',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        //=================================
        // == SERVICE STYLE TWO CSS END  ==
        //=================================

        //=====================================
        // == SERVICE STYLE THREE CSS START  ==
        //====================================
        $this->start_controls_section(
            'restly_service_three_CSS_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'three',
                ],
            ]
        );
        $this->add_control(
            'restly_service_three_CSS_box_align',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_service_three_box_tabs'
        );
        $this->start_controls_tab(
            'restly_service_three_box_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_three_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_three_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner',
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_box_radius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_three_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_three_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_three_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_three_box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_box_hradius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_three_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_service_three_CSS_content_options',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'three',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_service_three_content_tabs'
        );
        $this->start_controls_tab(
            'restly_service_three_tabs_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 106,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-box-three-icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                        'step' => 1,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 106,
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-box-three-icon' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_color',
            [
                'label' => esc_html__( 'Icon Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-box-three-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_hcolor',
            [
                'label' => esc_html__( 'Icon Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner:hover .service-box-three-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-box-three-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_hbg',
            [
                'label' => esc_html__( 'Hover Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner:hover .service-box-three-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_three_CSS_icon_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'exclude' => [
                    'letter_spacing',
                    'text_transform',
                ],
                'selector' => '{{WRAPPER}} .service-box-three-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_three_CSS_icon_shadow',
                'label' => esc_html__( 'Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-box-three-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_three_CSS_icon_hshadow',
                'label' => esc_html__( 'Hover Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner:hover .service-box-three-icon',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_three_CSS_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-box-three-icon',
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_radius',
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
                    '{{WRAPPER}} .service-box-three-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'restly_service3_border',
            [
                'label' => __( 'Hover Border and Border Radisu', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_three_CSS_icon_hborder',
                'label' => esc_html__( 'Hover Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-box-three-inner:hover .service-box-three-icon',
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_hradius',
            [
                'label' => esc_html__( 'Hover Border Radius', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-service-box-three-inner:hover .service-box-three-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-box-three-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-box-three-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_three_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_title_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-three-title' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .service-three-title a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_title_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner:hover .service-three-title a,.restly-service-box-three-inner:hover .service-three-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_three_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-three-title',
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-three-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-three-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'restly_service_three_tabs_dec',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_dec_c',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-three-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_dec_hc',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-box-three-inner:hover .service-three-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_three_CSS_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-three-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-three-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_three_CSS_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-three-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        //===================================
        // == SERVICE STYLE THREE CSS END  ==
        //===================================
        //===================================
        // == SERVICE STYLE FOUR CSS START  ==
        //===================================
        $this->start_controls_section(
            'restly_service_box_four_CSS_options',
            [
                'label' => esc_html__( ' Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'four',
                ],
            ]
        );
        $this->add_control(
            'restly_service_box_four_CSS_box_align',
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
                'default' => 'left',
                'toggle' => true,
                'selectors' => [
                    '{{WRAPPER}} .service-four-contnts' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_box_four_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_box_four_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'default' => [
                    'top' => '25',
                    'right' => '25',
                    'bottom' => '25',
                    'left' => '25',
                    'isLinked' => true
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_service_box_four_tabs'
        );
        $this->start_controls_tab(
            'restly_service_box_four_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_box_four_CSS_box_bg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-four-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_box_four_CSS_box_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-four-item',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_box_four_CSS_box_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-four-item',
            ]
        );
        $this->add_responsive_control(
            'restly_service_box_CSS_box_four_radius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_box_four_CSS_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-four-item:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_box_four_CSS_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-four-item:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_box_four_CSS_box_hborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-four-item:hover',
            ]
        );
        $this->add_responsive_control(
            'restly_service_box_CSS_box_four_hradius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_service_four_CSS_content_options',
            [
                'label' => esc_html__( ' Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'four',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_service_four_content_tabs'
        );
        $this->start_controls_tab(
            'restly_service_four_CSS_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-box-four-icon' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_icon_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item:hover .service-box-four-icon' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_responsive_control(
            'restly_service_four_CSS_icon_bgcolor',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-box-four-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_icon_hbgcolor',
            [
                'label' => esc_html__( 'Hover Background', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item:hover .service-box-four-icon' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'restly_service_fournotes',
            [
                'label' => __( 'Background Padding', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_iconbg_margin',
            [
                'label' => esc_html__( 'Background Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-box-four-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_iconbg_padding',
            [
                'label' => esc_html__( 'Background Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-box-four-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_iconbg_radius',
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
                    '{{WRAPPER}} .service-box-four-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_four_CSS_icon_typo',
                'label' => esc_html__( 'Font Size', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-box-four-icon',
                'exclude' => [
                    'letter_spacing',
                    'text_transform',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-four-icons' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-four-icons' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_four_CSS_subtitle',
            [
                'label' => __( 'Sub Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_stitle_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-four-title-area .service-stitle-four' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_stitle_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item:hover .service-four-title-area .service-stitle-four' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_four_CSS_stitle_typo',
                'label' => esc_html__( 'Font Size', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-four-title-area .service-stitle-four',
                'exclude' => [
                    'letter_spacing',
                    'text_transform',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_stitle_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-four-title-area .service-stitle-four' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_stitle_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-four-title-area .service-stitle-four' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_service_four_CSS_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_title_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-four-title-area .service-title-four a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-four-item:hover .service-four-title-area .service-title-four a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_four_CSS_title_typo',
                'label' => esc_html__( 'Font Size', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-four-title-area .service-title-four',
                'exclude' => [
                    'letter_spacing',
                    'text_transform',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-four-title-area .service-title-four' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_four_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-four-title-area .service-title-four' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
        //===================================
        // == SERVICE STYLE FOUR CSS END  ==
        //===================================
        //=================================
        // == SERVICE STYLE SIX CSS START  ==
        //=================================
        $this->start_controls_section(
            'restly_service_six_CSS_options',
            [
                'label' => esc_html__( 'Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_service_six_tabs'
        );
        $this->start_controls_tab(
            'restly_service_six_box_tabs_normal',
            [
                'label' => __( 'Normal', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_six_box_nbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-six',
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_box_nradius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_six_box_nshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six',
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_six_box_tabs_hover',
            [
                'label' => __( 'Hover', 'restlycore' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'restly_service_six_box_hbg',
                'label' => esc_html__( 'Background', 'restlycore' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .restly-service-six:hover',
            ]
        );
        
        $this->add_responsive_control(
            'restly_service_six_box_hradius',
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
                'default' => [
                    'unit' => 'px',
                    'size' => 5,
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_six_box_hshadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->add_responsive_control(
            'restly_service_six_CSS_box_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_box_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'restly_service_six__content_boxCSS_options',
            [
                'label' => esc_html__( 'Content Box', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_six_box_nborder',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six-contents',
            ]
        );
        $this->add_control(
            'restly_service_six_bborder_notre',
            [
                'label' => __( 'Hover Border', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_six_box_hborder',
                'label' => esc_html__( 'Hover Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six-contents:hover',
            ]
        );
        $this->add_control(
            'restly_service_content_box_six_aligment',
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
                    '{{WRAPPER}} .restly-service-six-contents' => 'text-align: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_content_box_six_marin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-contents' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_content_box_six_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-contents' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'restly_service_six_CSS_content',
            [
                'label' => esc_html__( 'Content', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        $this->start_controls_tabs(
            'restly_service_six_content_tabs'
        );
        $this->start_controls_tab(
            'restly_service_six_CSS_tabs_icon',
            [
                'label' => __( 'Icon', 'restlycore' ),
                'condition' => [
                    'restly_service_six_icons_type' => 'icon',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_size',
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
                    '{{WRAPPER}} .restly-service-six-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover .restly-service-six-icon i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_bg',
            [
                'label' => esc_html__( 'Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_hbg',
            [
                'label' => esc_html__( 'Hover Background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover .restly-service-six-icon i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_width',
            [
                'label' => esc_html__( 'Width', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-icon i' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_height',
            [
                'label' => esc_html__( 'Height', 'restlycore' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-icon i' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_six_CSS_icon_border',
                'label' => esc_html__( 'Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six-icon i',
            ]
        );
        $this->add_control(
            'restly_service_six_boeder_note',
            [
                'label' => __( 'Hover Border', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'restly_service_six_CSS_icon_hborder',
                'label' => esc_html__( 'Hover Border', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six:hover .restly-service-six-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_radius',
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
                    '{{WRAPPER}} .restly-service-six-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_hradius',
            [
                'label' => esc_html__( 'Hover Border Radius', 'restlycore' ),
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
                    '{{WRAPPER}} .restly-service-six:hover .restly-service-six-icon i' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_six_CSS_icon_shadow',
                'label' => esc_html__( 'Box Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six-icon i',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'restly_service_six_CSS_icon_hshadow',
                'label' => esc_html__( 'Hover  Shadow', 'restlycore' ),
                'selector' => '{{WRAPPER}} .restly-service-six:hover .restly-service-six-icon i',
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-icon i' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_icon_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six-icon i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        
        $this->start_controls_tab(
            'restly_service_six_CSS_tabs_title',
            [
                'label' => __( 'Title', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_title_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-six-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_title_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover .service-six-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_six_CSS_title_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-six-title',
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_title_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-six-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_title_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-six-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_service_six_CSS_tabs_dec',
            [
                'label' => __( 'Content', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_dec_color',
            [
                'label' => esc_html__( 'Title Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-six-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_dec_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover .service-six-dec p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_six_CSS_dec_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} .service-six-dec p',
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_dec_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-six-dec p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_dec_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .service-six-dec p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->start_controls_tab(
            'restly_service_six_CSS_tabs_btn',
            [
                'label' => __( 'Button', 'restlycore' ),
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_btn_color',
            [
                'label' => esc_html__( 'Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_btn_hcolor',
            [
                'label' => esc_html__( 'Hover Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover .service-hbtn a' => 'color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_btn_bgcolor',
            [
                'label' => esc_html__( 'background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-hbtn a' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_btn_bghcolor',
            [
                'label' => esc_html__( 'Hover background Color', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .restly-service-six:hover .service-hbtn a' => 'background-color: {{VALUE}}',
                ],
                'condition' => [
                    'restly_service_style_select' => 'six',
                ],
            ]
        );
        
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'restly_service_six_CSS_btn_typo',
                'label' => esc_html__( 'Typography', 'restlycore' ),
                'selector' => '{{WRAPPER}} a.theme-btns2',
                'condition' => [
                    'restly_service_style_select' => 'tow',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_btn_margin',
            [
                'label' => esc_html__( 'Margin', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'restly_service_six_CSS_btn_padding',
            [
                'label' => esc_html__( 'Padding', 'restlycore' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} a.theme-btns2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        if($settings['restly_service_style_select'] == 'one' ){
            $target = $settings['restly_service_button_url']['is_external'] ? ' target="_blank"' : '';
            $nofollow = $settings['restly_service_button_url']['nofollow'] ? ' rel="nofollow"' : '';
        }
        ob_start();
        ?>
        <div class="restly-service-box-wrapper">
            <?php if($settings['restly_service_style_select'] == 'one' ) : ?>
            <div class="restly-service-box">
                <div class="restly-service-normal service-normal-hover">
                    <div class="restly-service-icon tran-04">
                        <?php if($settings['restly_service_icons_type'] == 'img' ) : ?>
                            <div class="service-img-icon">
                                <?php echo wp_get_attachment_image( $settings['restly_service_icon_image']['id'], 'thumbnail' ); ?>
                            </div>
                        <?php else : ?>
                            <i class="<?php echo esc_attr($settings['restly_service_icon']['value']); ?>"></i>
                        <?php endif; ?>
                    </div>
                    <<?php echo esc_attr($settings['restly_service_title_tag1']); ?> class="service-title tran-04"><?php echo esc_html($settings['restly_service_title']); ?></<?php echo esc_attr($settings['restly_service_title_tag1']); ?>>
                    <div class="service-dec tran-04">
                        <p><?php echo esc_html($settings['restly_service_textarea']); ?></p>
                    </div>
                    <div class="service-nbtn">
                    <?php echo '<a class="theme-btns" href="' . esc_url($settings['restly_service_button_url']['url']) . '"' . $target . $nofollow . '><i class="fas fa-long-arrow-alt-right"></i></a>'; ?>
                    </div>
                </div>
                <div class="restly-service-hover service-normal-hover tran-04">
                    <<?php echo esc_attr($settings['restly_service_htitle_tag1']); ?> class="service-htitle tran-04"><?php echo esc_html($settings['restly_service_htitle']); ?></<?php echo esc_attr($settings['restly_service_htitle_tag1']); ?>>
                    <div class="service-dec tran-04">
                        <p><?php echo esc_html($settings['restly_service_htextarea']); ?></p>
                    </div>
                    <div class="service-hbtn">
                        <?php echo '<a class="theme-btns" href="' . esc_url($settings['restly_service_button_url']['url']) . '"' . $target . $nofollow . '>'.esc_html($settings['restly_service_button_text']).'</a>'; ?>
                    </div>
                </div>
            </div>
            <?php elseif($settings['restly_service_style_select'] == 'two' ) : ?>
            <div class="restly-service-two-box tran-04">
                <div class="restly-service-two-contents tran-04 service-two-<?php echo esc_attr($settings['restly_service_two_box_aligment']) ?>">
                    <div class="restly-service-two-icon tran-04">
                        <?php if($settings['restly_service_two_icons_type'] == 'img' ) : ?>
                            <div class="service-img-icon">
                                <?php echo wp_get_attachment_image( $settings['restly_service_two_icon_image']['id'], 'thumbnail' ); ?>
                            </div>
                        <?php else : ?>
                            <i class="<?php echo esc_attr($settings['restly_service_two_icon']['value']); ?>"></i>
                        <?php endif; ?>
                    </div>
                    <div class="service-two-content tran-04">
                        <<?php echo esc_attr($settings['restly_service_title_tag2']); ?> class="service-two-title tran-04"><?php echo esc_html($settings['restly_service_two_title']); ?></<?php echo esc_attr($settings['restly_service_title_tag2']); ?>>
                        <div class="service-two-dec tran-04">
                            <p><?php echo esc_html($settings['restly_service_two_textarea']); ?></p>
                        </div>
                        <?php if($settings['restly_service_two_button_show'] == 'yes' ) :
                        $target2 = $settings['restly_service_two_button_url']['is_external'] ? ' target="_blank"' : '';
                        $nofollow2 = $settings['restly_service_two_button_url']['nofollow'] ? ' rel="nofollow"' : '';
                        ?>
                        <div class="restly-service-tow-btn">
                            <?php echo '<a class="theme-btns2 two" href="' . esc_url($settings['restly_service_two_button_url']['url']) . '"' . $target2 . $nofollow2 . '>'.esc_html($settings['restly_service_two_button_text']).' <i class="fas fa-arrow-right"></i></a>'; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php elseif($settings['restly_service_style_select'] == 'three' ) :
            if($settings['restly_service_three_CSS_box_align'] == 'center'){
                $align = 'serveice3-center';
            }elseif($settings['restly_service_three_CSS_box_align'] == 'right'){
                $align = 'serveice3-right';
            }else{
                $align = 'serveice3-left';
            }
            ?>
            <div class="restly-service-box-three">
                <div class="tran-04 restly-service-box-three-inner  <?php echo esc_attr($align); ?>">
                    <div class="restly_service-box-three-icon">
                        <?php if($settings['restly_service_three_icons_type'] == 'img' ) : ?>
                            <div class="service-img-icon service-box-three-icon tran-04">
                                <?php echo wp_get_attachment_image( $settings['restly_service_three_icon_image']['id'], 'thumbnail' ); ?>
                            </div>
                        <?php else : ?>
                            <i class="<?php echo esc_attr($settings['restly_service_three_icon']['value']); ?> service-box-three-icon tran-04"></i>
                        <?php endif; ?>
                    </div>
                    <<?php echo esc_attr($settings['restly_service_title_tag3']); ?> class="service-three-title tran-04">
                        <?php if($settings['restly_service_three_enable_btn'] == 'yes') {
                         $target3 = $settings['restly_service_three_button_url']['is_external'] ? ' target="_blank"' : '';
                         $nofollow3 = $settings['restly_service_three_button_url']['nofollow'] ? ' rel="nofollow"' : '';
                         echo '<a href="'. esc_url($settings['restly_service_three_button_url']['url']) .'"'. $target3 . $nofollow3 . '>';}
                        ?><?php echo esc_html($settings['restly_service_three_title']); ?>
                        <?php if($settings['restly_service_three_enable_btn'] == 'yes') {
                            echo '</a>';
                        }?>
                    </<?php echo esc_attr($settings['restly_service_title_tag3']); ?>>
                    <div class="service-three-dec tran-04">
                        <p><?php echo esc_html($settings['restly_service_three_textarea']); ?></p>
                    </div>
                </div>
            </div>
            <?php elseif($settings['restly_service_style_select'] == 'four' ) : 
            $target4 = $settings['restly_service_four_link']['is_external'] ? ' target="_blank"' : '';
            $nofollow4 = $settings['restly_service_four_link']['nofollow'] ? ' rel="nofollow"' : '';    
            ?>       
            <div class="restly-service-four-wrapper">
                <div class="restly-service-four-inner">
                    <div class="restly-service-four-item">
                        <div class="service-four-image">
                            <?php echo wp_get_attachment_image( $settings['restly_service_four_image']['id'], 'full' ); ?>
                        </div>
                        <div class="service-four-contnts">
                            <?php if($settings['restly_service_four_icon_enable'] == 'yes' && $settings['restly_service_four_icon_position'] == 'left' ) : ?>
                            <div class="service-four-icons service-icon-<?php echo esc_attr($settings['restly_service_four_icon_position']); ?>">
                                <?php if($settings['restly_service_four_icons_type'] == 'img' ) : ?>
                                    <div class="service-img-icon service-box-four-icon tran-04">
                                        <?php echo wp_get_attachment_image( $settings['restly_service_four_icon_image']['id'], 'thumbnail' ); ?>
                                    </div>
                                <?php else : ?>
                                    <i class="<?php echo esc_attr($settings['restly_service_four_icon']['value']); ?> service-box-four-icon tran-04"></i>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                            <div class="service-four-title-area">
                                <?php if(!empty($settings['restly_service_four_stitle'])){
                                    echo '<'.esc_attr($settings['service_stitle_tag4']).' class="service-stitle-four">'.esc_html($settings['restly_service_four_stitle']).'</'.esc_attr($settings['service_stitle_tag4']).'>';
                                } 
                                ?>
                                <<?php echo esc_attr($settings['service_title_tag4']); ?> class="service-title-four">
                                <?php if($settings['restly_service_four_link_enable'] == 'yes' ){
                                echo '<a href="'. esc_url($settings['restly_service_four_link']['url']) .'"'. $target4 . $nofollow4 . '>';
                                } ?>
                                <?php echo esc_html($settings['restly_service_four_title']); ?>
                                <?php if($settings['restly_service_four_link_enable'] == 'yes' ){
                                    echo '</a>';
                                } ?>
                                </<?php echo esc_attr($settings['service_title_tag4']); ?>>
                            </div>
                            <?php if( $settings['restly_service_four_icon_enable'] == 'yes' && $settings['restly_service_four_icon_position'] == 'right' ) : ?>
                            <div class="service-four-icons service-icon-<?php echo esc_attr($settings['restly_service_four_icon_position']); ?>">
                                <?php if($settings['restly_service_four_icons_type'] == 'img' ) : ?>
                                    <div class="service-img-icon service-box-four-icon tran-04">
                                    <?php if($settings['restly_service_four_link_enable'] == 'yes' ) : ?>
                                    <a href="<?php echo esc_url($settings['restly_service_four_link']['url']); ?>" <?php echo ''. $target4 . $nofollow4 . '' ?>>
                                    <?php endif; ?>
                                    <?php echo wp_get_attachment_image( $settings['restly_service_four_icon_image']['id'], 'thumbnail' ); ?>
                                    <?php if($settings['restly_service_four_link_enable'] == 'yes' ) : ?>
                                    </a>
                                    <?php endif; ?>
                                    </div>
                                <?php else : ?>
                                    <?php if($settings['restly_service_four_link_enable'] == 'yes' ) : ?>
                                    <a href="<?php echo esc_url($settings['restly_service_four_link']['url']); ?>" <?php echo ''. $target4 . $nofollow4 . '' ?>>
                                    <?php endif; ?>
                                    <i class="<?php echo esc_attr($settings['restly_service_four_icon']['value']); ?> service-box-four-icon tran-04"></i>
                                    <?php if($settings['restly_service_four_link_enable'] == 'yes' ) : ?>
                                    </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($settings['restly_service_style_select'] == 'five' ) : ?>
            <div class="restly-service-two-box service-style-5 tran-04">
                <?php if($settings['restly_service_two_button_show'] == 'yes' ) :
                $target2 = $settings['restly_service_two_button_url']['is_external'] ? ' target="_blank"' : '';
                $nofollow2 = $settings['restly_service_two_button_url']['nofollow'] ? ' rel="nofollow"' : '';
                ?>
                <div class="restly-service-tow-btn">
                    <?php echo '<a class="theme-btns2" href="' . esc_url($settings['restly_service_two_button_url']['url']) . '"' . $target2 . $nofollow2 . '><i class="fas fa-arrow-right"></i></a>'; ?>
                </div>
                <?php endif; ?>
                <div class="restly-service-two-contents tran-04 service-two-<?php echo esc_attr($settings['restly_service_two_box_aligment']) ?>">
                    <div class="restly-service-two-icon tran-04">
                        <?php if($settings['restly_service_two_icons_type'] == 'img' ) : ?>
                            <div class="service-img-icon">
                                <?php echo wp_get_attachment_image( $settings['restly_service_two_icon_image']['id'], 'thumbnail' ); ?>
                            </div>
                        <?php else : ?>
                            <i class="<?php echo esc_attr($settings['restly_service_two_icon']['value']); ?>"></i>
                        <?php endif; ?>
                    </div>
                    <div class="service-two-content tran-04">
                        <<?php echo esc_attr($settings['restly_service_title_tag2']); ?> class="service-two-title tran-04"><?php echo esc_html($settings['restly_service_two_title']); ?></<?php echo esc_attr($settings['restly_service_title_tag2']); ?>>
                        <div class="service-two-dec tran-04">
                            <p><?php echo esc_html($settings['restly_service_two_textarea']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php elseif($settings['restly_service_style_select'] == 'six' ) : ?>
                <div class="restly-service-six tran-04">
                <?php if(!empty($settings['restly_service_six_image'])) : ?>
                <div class="restly-service-six-img">
                    <?php echo wp_get_attachment_image( $settings['restly_service_six_image']['id'], 'full' ); ?>
                </div>
                <?php endif; ?>
                <div class="restly-service-six-contents tran-04">
                    <div class="restly-service-six-icon tran-04">
                        <?php if($settings['restly_service_six_icons_type'] == 'img' ) : ?>
                            <div class="service-img-icon">
                                <?php echo wp_get_attachment_image( $settings['restly_service_six_icon_image']['id'], 'thumbnail' ); ?>
                            </div>
                        <?php else : ?>
                            <i class="<?php echo esc_attr($settings['restly_service_six_icon']['value']); ?>"></i>
                        <?php endif; ?>
                    </div>
                    <div class="service-six-content tran-04">
                        <<?php echo esc_attr($settings['restly_service_title_tag6']) ?> class="service-six-title tran-04"><?php echo esc_html($settings['restly_service_six_title']); ?></<?php echo esc_attr($settings['restly_service_title_tag6']); ?>>
                        <div class="service-six-dec tran-04">
                            <p><?php echo esc_html($settings['restly_service_six_textarea']); ?></p>
                        </div>
                        <?php if($settings['restly_service_six_button_show'] == 'yes' ) :
                        $target6 = $settings['restly_service_six_button_url']['is_external'] ? ' target="_blank"' : '';
                        $nofollow6 = $settings['restly_service_six_button_url']['nofollow'] ? ' rel="nofollow"' : '';
                        ?>
                        <div class="service-hbtn">
                            <?php echo '<a class="theme-btns" href="' . esc_url($settings['restly_service_six_button_url']['url']) . '"' . $target6 . $nofollow6 . '>'.esc_html($settings['restly_service_six_button_text']).' <i class="fas fa-arrow-right"></i></a>'; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            </div>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new infotech_service_box_Widget );