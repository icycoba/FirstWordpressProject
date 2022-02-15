<?php

/**
 * Theme custom customizer
 */
function wp_customizer($wp_customize)
{
    $wp_customize->remove_section('static_front_page');
    $wp_customize->remove_section('custom_css');
    $wp_customize->remove_section('themes');
    $wp_customize->remove_control('site_icon');

    // Global customization
    /*
    $wp_customize->add_section();

    $wp_customize->add_setting();

    $wp_customize->add_control();
    */

    // 
    // Header customization
    //
    $wp_customize->add_section('header-section', array(
        'title' => 'Hlavička',
        'priority' => 2,
        'description' => _('Úprava horní sekce stránky.')
    ));

    // Logo settings
    $wp_customize->add_setting('header-logo-setting', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_header_logo',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-logo-control', array(
        'label' => 'Logo stránky',
        'section' => 'header-section',
        'settings' => 'header-logo-setting',
        'width' => 420,
        'height' => 206
    )));

    // Title settings
    $wp_customize->add_setting('header-title-setting', array(
        'default' => 'Tvorba webových stránek',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('header-title-control', array(
        'label' => 'Nadpis stránky',
        'section' => 'header-section',
        'settings' => 'header-title-setting',
        'type' => 'textarea'
    ));

    // Subtitle settings
    $wp_customize->add_setting('header-subtitle-setting', array(
        'default' => 'Nette - Symfony - Laravel',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('header-subtitle-control', array(
        'label' => 'Podnadpis stránky',
        'section' => 'header-section',
        'settings' => 'header-subtitle-setting',
        'type' => 'textarea'
    ));

    //
    // Portfolio customization
    //
    $wp_customize->add_section('portfolio-section', array(

    ));

    $wp_customize->add_setting('portfolio-settings', array(

    ));

    $wp_customize->add_control('portfolio-control', array(

    ));

    //
    // About section customization
    //
    $wp_customize->add_section('about-section', array(

    ));

    $wp_customize->add_setting('about-settings', array(

    ));

    $wp_customize->add_control('about-control', array(

    ));

    //
    // Footer customization
    //
    $wp_customize->add_section('footer-section', array(

    ));

    $wp_customize->add_setting('footer-settings', array(

    ));

    $wp_customize->add_control('footer-control', array(

    ));
}

add_action('customize_register', 'wp_customizer', 1000);
