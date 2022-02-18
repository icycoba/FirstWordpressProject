<?php
// Theme functions

// Style setup
function firstproject_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('firstproject-montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,700", array('firstproject-style'), '1.0', 'all');
    wp_enqueue_style('firstproject-lato', "https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic", array('firstproject-style'), '1.0', 'all');
    wp_enqueue_style('firstproject-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'firstproject_register_styles');

// Javascript setup
function firstproject_register_scripts(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script('firstproject-fontawesome', "https://use.fontawesome.com/releases/v5.15.1/js/all.js", array(), '5.15.1', true);
    wp_enqueue_script('firstproject-jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', true);
    wp_enqueue_script('firstproject-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js", array(), '4.5.3', true);
    wp_enqueue_script('firstproject-jqueryeasing', "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", array(), '1.4.1', true);
    wp_enqueue_script('firstproject-script', get_template_directory_uri() . "/js/main.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'firstproject_register_scripts');

require_once locate_template('/functions/customizer.php');
require_once locate_template('/functions/widgets.php');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('firstproject_header_text');

// Simple regex taken from https://stackoverflow.com/a/69207369
function sanitize_header_text($input){
    return preg_replace('/\x00|<[^>]*>?/', '', $input);
}

function sanitize_header_logo($input){
    $output = $input;
    return $output;
}

function sanitize_portfolio_icon_count($input){
    $output = $input;
    return $output;
}

// Simple switch-case to determine which default icon is supposed to be used
function portfolio_default_icon($itemNumber){
    switch($itemNumber){
        case 1:
            $output = '/assets/img/portfolio/cabin.png';
            break;
        case 2:
            $output = '/assets/img/portfolio/cake.png';
            break;
        case 3:
            $output = '/assets/img/portfolio/circus.png';
            break;
        case 4:
            $output = '/assets/img/portfolio/game.png';
            break;
        case 5:
            $output = '/assets/img/portfolio/safe.png';
            break;
        case 6:
            $output = '/assets/img/portfolio/submarine.png';
            break;
        default:
            $output = '';
            break;
    }
    return $output;
}

// CSS "injection" so I don't have to edit the original .css files too much
function firstproject_customize_colors(){
    $primaryColor = get_theme_mod('colcustomizer-primary-setting', '#039be5');
    $secondaryColor = get_theme_mod('colcustomizer-secondary-setting', '#2c3e50');
    $tertiaryColor = get_theme_mod('colcustomizer-tertiary-setting', '#ffffff');

    $primaryTextColor = text_color_determine($primaryColor);
    $secondaryTextColor = text_color_determine($tertiaryColor); // Because secondary is header and footer in the original css
    ?>
    <style type="text/css">
        .text-primary{
            color: <?php echo $primaryTextColor?> !important;
        }

        .divider-custom-line {
            background-color: <?php echo $secondaryTextColor?> !important;
        }

        .divider-custom-icon {
            color: <?php echo $secondaryTextColor?> !important;
        }

        .divider-custom.divider-light .divider-custom-icon{
            color: <?php echo $primaryTextColor?> !important;
        }

        .divider-custom.divider-light .divider-custom-line {
            background-color: <?php echo $primaryTextColor?> !important;
        }

        .text-secondary{
            color: <?php echo $secondaryTextColor?> !important;
        }

        .bg-primary, .btn-primary, a.nav-link.active {
            background-color: <?php echo $primaryColor ?> !important;
            border-color: <?php echo $primaryColor ?> !important;
        }

        .bg-secondary {
            background-color: <?php echo $secondaryColor ?> !important;
        }

        .bg-tertiary {
            background-color: <?php echo $tertiaryColor ?> !important;
        }


    </style>
    
    <?php
    echo text_color_determine(get_theme_mod('colcustomizer-tertiary-setting', '#ffffff'));
}

add_action('wp_head', 'firstproject_customize_colors');

// Determine default color of text for a good contrast
function text_color_determine($input){
    return $input > "#7" ? "#2c3e50" : "#ffffff";
}