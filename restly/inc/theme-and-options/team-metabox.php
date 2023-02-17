<?php

if ( !defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//
// Metabox of the PAGE
// Set a unique slug-like ID
//
$teammeta = 'restly_teammeta';

//
// Create a metabox
//
CSF::createMetabox( $teammeta, array(
    'title'        => esc_html__( 'Team Options', 'restly' ),
    'post_type'    => array( 'restly_team' ),
    'show_restore' => true,
) );

//
// Create a section
//
CSF::createSection( $teammeta, array(
    'title'  => esc_html__( 'Team Sub Title', 'restly' ),
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'       => 'restly_team_stitle',
            'type'     => 'text',
            'title'    => esc_html__( 'Designation', 'restly' ),
            'subtitle' => esc_html__( 'Add Team Designation here', 'restly' ),
            'default'  => esc_html__( 'Software Engineer', 'restly' ),
        ),
        array(
            'id'        => 'restly_team_socials',
            'type'      => 'group',
            'title'     => esc_html__('Team Socials link', 'restly'),
            'subtitle'     => esc_html__('Add Social Info', 'restly'),
            'fields'    => array(
              array(
                'id'    => 'restly_team_social_label',
                'type'  => 'text',
                'title' => esc_html__('label', 'restly'),
                'subtitle' => esc_html__('Add Social label Name', 'restly'),
              ),
              array(
                'id'    => 'restly_teams_socials_icon',
                'type'  => 'icon',
                'title' => esc_html__('Icon', 'restly'),
                'subtitle' => esc_html__('Add Social Icon', 'restly'),
                'default' => 'fa fa-facebook'
              ),
              array(
                'id'    => 'restly_team_social_link',
                'type'  => 'text',
                'title' => esc_html__('Link', 'restly'),
                'subtitle' => esc_html__('Add Social Link', 'restly'),
              ),
            ),
        ),
    ),
) );