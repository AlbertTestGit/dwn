<?php
//job Page Options
CSF::createSection($restlyThemeOption, array(
    'title'  => esc_html__('job Page', 'restly'),
    'icon'   => 'fa fa-users',
    'fields' => array(
        array(
            'id'       => 'restly_job_banner_enable',
            'type'     => 'switcher',
            'title'    => esc_html__('Enable Banner', 'restly'),
            'default'  => true,
            'text_on'  => esc_html__('Yes', 'restly'),
            'text_off' => esc_html__('No', 'restly'),
            'desc'     => esc_html__('Hide / Show Banner.', 'restly'),
        ),
        array(
            'id'         => 'restly_job_custom_slug',
            'type'       => 'text',
            'title'      => esc_html__('Custom Slug', 'restly'),
            'default'    => esc_html('restly-job','restly'),
        ),
    )
));