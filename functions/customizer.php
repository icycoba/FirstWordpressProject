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

    // 
    // Header customization
    //
    $wp_customize->add_section('header-section', array(
        'title' => 'Hlavička',
        'priority' => 21,
        'description' => _('Úprava horní sekce stránky.')
    ));

    // Logo settings
    $wp_customize->add_setting('header-logo-setting', array(
        'default' => get_template_directory_uri() . '/assets/img/logo.png',
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

    // Name settings
    $wp_customize->add_setting('header-name-setting', array(
        'default' => 'DCSoft',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('header-name-control', array(
        'label' => 'Nadpis stránky',
        'section' => 'header-section',
        'settings' => 'header-name-setting',
        'type' => 'textbox'
    ));

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
    // About section customization
    //
    $wp_customize->add_section('about-section', array(
        'title' => 'O nás',
        'priority' => 23,
        'description' => _('Úprava sekce "O nás".')
    ));

    $wp_customize->add_setting('about-text-setting', array(
        'default' => 'Stručný nebo dlouhý popis služby/webové stránky.',
        'sanitize_callback' => 'sanitize_header_text'
    ));

    $wp_customize->add_control('about-text-control', array(
        'label' => 'Popis služby/webové stránky',
        'section' => 'about-section',
        'settings' => 'about-text-setting',
        'type' => 'textarea'
    ));

    //
    // Footer customization
    //
    $wp_customize->add_section('footer-section', array(
        'title' => 'Patička',
        'description' => _('Úprava spodní části stránky.'),
        'priority' => 24
    ));

    $wp_customize->add_setting('footer-address-setting', array(
        'default' => 'Ulice 123/45
        616 00 Brno'
    ));

    $wp_customize->add_control('footer-address-control', array(
        'label' => 'Úprava adresy',
        'section' => 'footer-section',
        'settings' => 'footer-address-setting',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting('footer-socials-1-link-setting', array(
        'default' => ''
    ));

    $wp_customize->add_control('footer-socials-1-link-control', array(
        'label' => 'Úprava odkazu Facebook',
        'section' => 'footer-section',
        'settings' => 'footer-socials-1-link-setting',
        'type' => 'textbox'
    ));

    $wp_customize->add_setting('footer-socials-2-link-setting', array(
        'default' => ''
    ));

    $wp_customize->add_control('footer-socials-2-link-control', array(
        'label' => 'Úprava odkazu Twitter',
        'section' => 'footer-section',
        'settings' => 'footer-socials-2-link-setting',
        'type' => 'textbox'
    ));

    $wp_customize->add_setting('footer-socials-3-link-setting', array(
        'default' => ''
    ));

    $wp_customize->add_control('footer-socials-3-link-control', array(
        'label' => 'Úprava odkazu LinkedIn',
        'section' => 'footer-section',
        'settings' => 'footer-socials-3-link-setting',
        'type' => 'textbox'
    ));

    $wp_customize->add_setting('footer-socials-4-link-setting', array(
        'default' => ''
    ));

    $wp_customize->add_control('footer-socials-4-link-control', array(
        'label' => 'Úprava odkazu Dribbble',
        'section' => 'footer-section',
        'settings' => 'footer-socials-4-link-setting',
        'type' => 'textbox'
    ));

    $wp_customize->add_setting('footer-link-setting', array(
        'default' => 'Více informací naleznete na
        <a href="https://dcsoft.cz/">dcsoft.cz</a>'
    ));

    $wp_customize->add_control('footer-link-control', array(
        'label' => 'Úprava obecného odkazu',
        'section' => 'footer-section',
        'settings' => 'footer-link-setting',
        'type' => 'textarea'
    ));

    //
    // Color Customization
    //
    $wp_customize->add_section('colcustomizer-section', array(
        'title' => 'Barevné schéma',
        'priority' => 30,
        'description' => 'Úprava barevného schématu webové stránky'
    ));

    // Primary color settings
    $wp_customize->add_setting('colcustomizer-primary-setting', array(
        'default' => '#039be5'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colcustomizer-primary-control', array(
        'label' => 'Primární barva stránky',
        'section' => 'colcustomizer-section',
        'settings' => 'colcustomizer-primary-setting'
    )));

    // Secondary color settings
    $wp_customize->add_setting('colcustomizer-secondary-setting', array(
        'default' => '#2c3e50'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colcustomizer-secondary-control', array(
        // Secondary because of bg-secondary class of div.
        'label' => 'Sekundární barva stránky',
        'section' => 'colcustomizer-section',
        'settings' => 'colcustomizer-secondary-setting'
    )));

    // Tertiary color settings
    $wp_customize->add_setting('colcustomizer-tertiary-setting', array(
        'default' => '#ffffff'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colcustomizer-tertiary-control', array(
        'label' => 'Terciární barva stránky',
        'section' => 'colcustomizer-section',
        'settings' => 'colcustomizer-tertiary-setting'
    )));

    $wp_customize->add_section('general-section', array(
        'title' => 'Obecné',
        'priority' => 20,
        'description' => 'Úprava nadpisů sekcí'
    ));

    $wp_customize->add_setting('general-section-1-setting', array(
        'default' => 'Portfolio'
    ));

    $wp_customize->add_control('general-section-1-control', array(
        'label' => 'Nadpis sekce 1',
        'section' => 'general-section',
        'settings' => 'general-section-1-setting'
    ));

    $wp_customize->add_setting('general-section-2-setting', array(
        'default' => 'O nás'
    ));

    $wp_customize->add_control('general-section-2-control', array(
        'label' => 'Nadpis sekce 2',
        'section' => 'general-section',
        'settings' => 'general-section-2-setting'
    ));

    $wp_customize->add_setting('general-section-3-setting', array(
        'default' => 'Kontaktujte nás'
    ));

    $wp_customize->add_control('general-section-3-control', array(
        'label' => 'Nadpis sekce 3',
        'section' => 'general-section',
        'settings' => 'general-section-3-setting'
    ));

    /*
    //  Commented in case the automatic text colors don't satisfy the user's customization needs.
    //  These settings broke the text_color_determine() function and if you selected 'default',
    //  it didn't work as it should. (Even after adding the function in 'default' variable, which is
    //  also the reason that it's a set color now.)

    // Primary text color settings
    $wp_customize->add_setting('colcustomizer-primary-text-setting', array(
        'default' => '#ffffff'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colcustomizer-primary-text-control', array(
        'label' => 'Primární barva textu stránky',
        'section' => 'colcustomizer-section',
        'settings' => 'colcustomizer-primary-text-setting'
    )));

    // Secondary text color settings
    $wp_customize->add_setting('colcustomizer-secondary-text-setting', array(
        'default' => '#ffffff'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colcustomizer-secondary-text-control', array(
        'label' => 'Sekundární barva textu stránky',
        'section' => 'colcustomizer-section',
        'settings' => 'colcustomizer-secondary-text-setting'
    )));

    // Tertiary text color settings
    $wp_customize->add_setting('colcustomizer-tertiary-text-setting', array(
        'default' => '#2c3e50'
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'colcustomizer-tertiary-text-control', array(
        'label' => 'Terciární barva textu stránky',
        'section' => 'colcustomizer-section',
        'settings' => 'colcustomizer-tertiary-text-setting'
    )));
    */
}

add_action('customize_register', 'wp_customizer', 1000);
