<?php namespace Elementor;

class restly_mobileScreen_Widget extends Widget_Base {

    public function get_name() {

        return 'restly_mobile_screen';
    }

    public function get_title() {
        return esc_html__( 'Restly Mobile Screen', 'restlycore' );
    }

    public function get_icon() {

        return 'eicon-slider-album';
    }

    public function get_keywords() {
        return ['restly', 'gallery', 'mobile screen','mobile gallery'];
    }

    public function get_categories() {
        return ['restly'];
    }

    protected function register_controls() {

        //Content tab start
        $this->start_controls_section(
            'mobile_screen_options',
            [
                'label' => esc_html__( 'Restly Mobile Gallery', 'restlycore' ),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'gallery',
			[
				'label' => esc_html__( 'Add Images', 'restlycore' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'show_label' => false,
				'default' => [],
			]
		);
        $this->add_control(
            'note',
            [
                'label' => __( 'Additional Options', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'display',
            [
                'label' => esc_html__( 'Display Item', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 1,
                'max' => 10,
                'step' => 1,
                'default' => 5,
            ]
        );
        $this->add_control(
            'loop',
            [
                'label' => esc_html__( 'Loop', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'aloop',
            [
                'label' => esc_html__( 'Auto Play', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'speed',
            [
                'label' => esc_html__( 'Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 10000,
                'step' => 50,
                'default' => 1000,
            ]
        );
        $this->add_control(
            'aspeed',
            [
                'label' => esc_html__( 'Auto Speed', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 2000,
                'step' => 100,
                'default' => 5000,
            ]
        );
        $this->add_control(
            'dot',
            [
                'label' => esc_html__( 'Dot', 'restlycore' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => esc_html__( 'Show', 'restlycore' ),
                'label_off' => esc_html__( 'Hide', 'restlycore' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->end_controls_section();
    }
    //Render
    protected function render() {
        $settings = $this->get_settings_for_display();
        $unique = rand(1241, 3256);
        ob_start();
        ?>
        
        <div class="restly-mobilescreen-wrapper">
            <div class="mobile-screens-active" id="mobile-screens-<?php echo esc_attr($unique); ?>">
                <?php foreach( $settings['gallery'] as $gallery ) : ?>
                <div class="mobile-screen-item">
                    <a href="<?php echo esc_url($gallery['url']); ?>" class="popupimg">
                        <img src="<?php echo esc_url($gallery['url']); ?>">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <script>
			jQuery(document).ready(function($) {
				"use strict";
				if ($('#mobile-screens-<?php echo esc_attr($unique); ?>').length) {
                    $('#mobile-screens-<?php echo esc_attr($unique); ?>').slick({
                        dots: <?php echo json_encode( $settings['dot'] == 'yes' ? true : false ); ?>,
                        infinite: <?php echo json_encode( $settings['loop'] == 'yes' ? true : false ); ?>,
                        autoplay: <?php echo json_encode( $settings['aloop'] == 'yes' ? true : false ); ?>,
                        autoplaySpeed: <?php echo json_encode( $settings['aspeed'] ); ?>,
                        arrows: false,
                        centerMode: false,
                        speed: <?php echo json_encode( $settings['speed'] ); ?>,
                        slidesToShow: <?php echo json_encode( $settings['display'] ); ?>,
                        slidesToScroll: 2,
                        responsive: [
                            {
                                breakpoint: 1199,
                                settings: {
                                    slidesToShow: 4,
                                }
                            },
                            {
                                breakpoint: 778,
                                settings: {
                                    slidesToShow: 3,
                                }
                            },
                            {
                                breakpoint: 575,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                }
                            },
                            {
                                breakpoint: 375,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                }
                            }
                        ]
                    });
                }
                
                
			});
			</script>
        <?php
        echo ob_get_clean();

    }
}
Plugin::instance()->widgets_manager->register( new restly_mobileScreen_Widget );