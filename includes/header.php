<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <?php wp_head(); ?>
</head>

<body id="page-top"> <?php //body_class(); ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger text-headfooter" href="#page-top"><?php echo nl2br(get_theme_mod('header-name-setting', 'DCSoft'));?></a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white text-headfooter rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-headfooter py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Portfolio</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-headfooter py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">O nás</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link text-headfooter py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
    