<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$navmeta = 'restly_navmeta';

//
// Create menu options
//
CSF::createNavMenuOptions( $navmeta, array(
  'data_type' => 'serialize'
) );

CSF::createSection( $navmeta, array(
  'fields' => array(

    array(
      'id'    => 'restly_nav_megamenu_show',
      'type'  => 'switcher',
      'title' => esc_html__('Enable Mega menu', 'restly'),
      'label' => esc_html__('Enable this options if you need Mega Menu', 'restly'),
    ),

    array(
      'id'          => 'restly_nav_mmenu_column',
      'type'        => 'select',
      'title'       => esc_html__( 'Select Column', 'restly'),
      'subtitle'       => esc_html__( 'Select your Sub Menu Column Section', 'restly'),
      'placeholder' => esc_html__( 'Select an option', 'restly'),
      'default'     => '4',
      'options'     => array(
          'column_2'   => esc_html__( 'Column 2', 'restly'),
          'column_3'   => esc_html__( 'Column 3', 'restly'),
          'column_4'   => esc_html__( 'Column 4', 'restly'),
          'column_5'   => esc_html__( 'Column 5', 'restly'),
          'column_6'   => esc_html__( 'Column 6', 'restly'),
        ),
        'dependency' => array( 'restly_nav_megamenu_show', '==', 'true' ),
      ),
    )
) );
