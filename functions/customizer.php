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
        'priority' => 10,
        'description' => _('Úprava horní sekce stránky.')
    ));

    // Logo settings
    $wp_customize->add_setting('header-logo-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/logo.png',
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
        'title' => 'Portfolio',
        'priority' => 11,
        'description' => _('Úprava sekce portfolio.')
    ));

    // Title settings
    $wp_customize->add_setting('portfolio-title-setting', array(
        'default' => 'Portfolio',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('portfolio-title-control', array(
        'label' => 'Nadpis sekce',
        'section' => 'portfolio-section',
        'settings' => 'portfolio-title-setting',
        'type' => 'textarea'
    ));
    
    // Item 1 settings
    $wp_customize->add_section('portfolio-section-item-1', array(
        'title' => 'Položka 1',
        'priority' => 12,
        'description' => _('Úprava první položky v sekci portfolio.')
    ));
    
    // Item 1 Title
    $wp_customize->add_setting('portfolio-item-1-title-setting', array(
        'default' => 'Projekt #1',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('portfolio-item-1-title-control', array(
        'label' => 'Nadpis první položky',
        'section' => 'portfolio-section-item-1',
        'settings' => 'portfolio-item-1-title-setting',
        'type' => 'textarea'
    ));

    // Item 1 Image
    $wp_customize->add_setting('portfolio-item-1-image-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/portfolio/cabin.png',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio-item-1-image-control', array(
        'label' => 'Obrázek 1',
        'section' => 'portfolio-section-item-1',
        'settings' => 'portfolio-item-1-image-setting',
        'width' => 900,
        'height' => 650
    )));

    // Item 1 Text
    $wp_customize->add_setting('portfolio-item-1-text-setting', array(
        'default' => 'Stručný nebo dlouhý popis položky.',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('portfolio-item-1-text-control', array(
        'label' => 'Popis první položky',
        'section' => 'portfolio-section-item-1',
        'settings' => 'portfolio-item-1-text-setting',
        'type' => 'textarea'
    ));

    // Item 2 settings
    $wp_customize->add_section('portfolio-section-item-2', array(
        'title' => 'Položka 2',
        'priority' => 13,
        'description' => _('Úprava druhé položky v sekci portfolio.')
    ));

    // Item 2 Image
    $wp_customize->add_setting('portfolio-item-2-image-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/portfolio/cake.png',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio-item-2-image-control', array(
        'label' => 'Obrázek 2',
        'section' => 'portfolio-section-item-2',
        'settings' => 'portfolio-item-2-image-setting',
        'width' => 900,
        'height' => 650
    )));

    // Item 3 settings
    $wp_customize->add_section('portfolio-section-item-3', array(
        'title' => 'Položka 3',
        'priority' => 14,
        'description' => _('Úprava třetí položky v sekci portfolio.')
    ));

    // Item 3 Image
    $wp_customize->add_setting('portfolio-item-3-image-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/portfolio/circus.png',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio-item-3-image-control', array(
        'label' => 'Obrázek 3',
        'section' => 'portfolio-section-item-3',
        'settings' => 'portfolio-item-3-image-setting',
        'width' => 900,
        'height' => 650
    )));

    // Item 4 settings
    $wp_customize->add_section('portfolio-section-item-4', array(
        'title' => 'Položka 4',
        'priority' => 15,
        'description' => _('Úprava čtvrté položky v sekci portfolio.')
    ));

    // Item 4 Image
    $wp_customize->add_setting('portfolio-item-4-image-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/portfolio/game.png',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio-item-4-image-control', array(
        'label' => 'Obrázek 4',
        'section' => 'portfolio-section-item-4',
        'settings' => 'portfolio-item-4-image-setting',
        'width' => 900,
        'height' => 650
    )));

    // Item 5 settings
    $wp_customize->add_section('portfolio-section-item-5', array(
        'title' => 'Položka 5',
        'priority' => 16,
        'description' => _('Úprava páté položky v sekci portfolio.')
    ));

    // Item 5 Image
    $wp_customize->add_setting('portfolio-item-5-image-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/portfolio/safe.png',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio-item-5-image-control', array(
        'label' => 'Obrázek 5',
        'section' => 'portfolio-section-item-5',
        'settings' => 'portfolio-item-5-image-setting',
        'width' => 900,
        'height' => 650
    )));

    // Item 6 settings
    $wp_customize->add_section('portfolio-section-item-6', array(
        'title' => 'Položka 6',
        'priority' => 17,
        'description' => _('Úprava šesté položky v sekci portfolio.')
    ));

    // Item 6 Image
    $wp_customize->add_setting('portfolio-item-6-image-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/portfolio/submarine.png',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio-item-6-image-control', array(
        'label' => 'Obrázek 6',
        'section' => 'portfolio-section-item-6',
        'settings' => 'portfolio-item-6-image-setting',
        'width' => 900,
        'height' => 650
    )));

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
