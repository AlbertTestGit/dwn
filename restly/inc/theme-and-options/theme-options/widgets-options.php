<?php
//Team Page Options
CSF::createSection($restlyThemeOption, array(
    'title'  => esc_html__('Widgets Generator', 'restly'),
    'icon'   => 'fa fa-compress',
    'fields' => array(
        array(
            'id'       => 'restly_classic_widget_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Classic Mode', 'restly'),
            'subtitle'    => esc_html__('if you see any issue on Widget Block editor then enable Classic Mode', 'restly'),
            'default'  => false,
            'text_on'  => esc_html__('Yes', 'restly'),
            'text_off' => esc_html__('No', 'restly'),
        ),
        array(
            'type'    => 'submessage',
            'style'   => 'success',
            'content' => esc_html__('Now you can Create Unlimited Widgets for your Wordpress Site. [Note: this is not Elementor Widgets Options only Wordpress Widget]', 'restly'),
        ),
        array(
            'id'       => 'restly_Gwidget_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Generator Widget', 'restly'),
            'subtitle'    => esc_html__('Enable Generator Widget options if you need extra widget for your website', 'restly'),
            'default'  => false,
            'text_on'  => esc_html__('Yes', 'restly'),
            'text_off' => esc_html__('No', 'restly'),
        ),
        array(
            'id'     => 'restly_Gwidget_grups',
            'type'   => 'group',
            'title'  => esc_html__('Generator Widget', 'restly'),
            'dependency' => array( 'restly_Gwidget_enable', '==', 'true' ),
            'fields' => array(
                array(
                    'id'    => 'restly_Gwidget_name',
                    'type'  => 'text',
                    'default'  => esc_html__('Extra Widget One', 'restly'),
                    'title' => esc_html__('Widget Name', 'restly'),
                    'subtitle' => esc_html__('Add Widget Name Hare', 'restly'),
                ),
                array(
                    'id'    => 'restly_Gwidget_dec',
                    'type'  => 'textarea',
                    'title' => esc_html__('Widget Description', 'restly'),
                    'default'  => esc_html__('Add widgets here', 'restly'),
                    'subtitle' => esc_html__('Add Widget Description Here', 'restly'),
                ),
                array(
                    'id'    => 'restly_Gwidget_before',
                    'type'  => 'text',
                    'title' => esc_html__('Widget Before', 'restly'),
                    'default'  => '<section id="%1$s" class="widget %2$s">',
                    'subtitle' => esc_html__('Add Widget Before HTML Code', 'restly'),
                ),
                array(
                    'id'    => 'restly_Gwidget_after',
                    'type'  => 'text',
                    'title' => esc_html__('Widget After', 'restly'),
                    'default'  => '</section>',
                    'subtitle' => esc_html__('Add Widget After HTML Code', 'restly'),
                ),
                array(
                    'id'    => 'restly_Gwidget_title_before',
                    'type'  => 'text',
                    'title' => esc_html__('Widget Title Before', 'restly'),
                    'default'  => '<h2 class="widget-title">',
                    'subtitle' => esc_html__('Add Widget Title Before HTML Code', 'restly'),
                ),
                array(
                    'id'    => 'restly_Gwidget_title_after',
                    'type'  => 'text',
                    'title' => esc_html__('Widget Title After', 'restly'),
                    'default'  => '</h2>',
                    'subtitle' => esc_html__('Add Widget Title After HTML Code', 'restly'),
                ),
            ),
        ),
    )
));