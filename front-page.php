<?php get_template_part('includes/header'); ?>

    <!-- Masthead-->
    <header class="masthead bg-primary text-primary text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="<?php echo get_theme_mod('header-logo-setting')?>" alt="PHP" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">
                <?php echo nl2br(get_theme_mod('header-title-setting'));?>
            </h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">
                <?php echo nl2br(get_theme_mod('header-subtitle-setting'));?>
            </p>
        </div>
    </header>
    <!-- Portfolio Section-->
    <section class="page-section bg-tertiary portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
                <?php echo nl2br(get_theme_mod('portfolio-title-setting'));?>
            </h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <!--
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_theme_mod('portfolio-item-1-image-setting')?>" alt="" />
                    </div>
                </div>
                -->
                <!-- Portfolio Item 2-->
                <!--
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_theme_mod('portfolio-item-2-image-setting')?>" alt="" />
                    </div>
                </div>
                -->
                <!-- Portfolio Item 3-->
                <!--
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_theme_mod('portfolio-item-3-image-setting')?>" alt="" />
                    </div>
                </div>
                -->
                <!-- Portfolio Item 4-->
                <!--
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_theme_mod('portfolio-item-4-image-setting')?>" alt="" />
                    </div>
                </div>
                -->
                <!-- Portfolio Item 5-->
                <!--
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_theme_mod('portfolio-item-5-image-setting')?>" alt="" />
                    </div>
                </div>
                -->
                <!-- Portfolio Item 6-->
                <!--
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                        <div
                            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i
                                    class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="<?php echo get_theme_mod('portfolio-item-6-image-setting')?>" alt="" />
                    </div>
                </div>
                -->
                    <?php
                    global $post;
                    $args = array('numberposts' => '-1', 'category_name' => 'portfolio',);
                    $lastposts = get_posts($args);
                    foreach ($lastposts as $post) :
                        setup_postdata($post);
                    ?>
                        <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal<?php the_ID(); ?>">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white">
                                    <i class="fas fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
                        </div>
                        </div>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                    ?>
                
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary text-primary mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-primary">O nás</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-12 ml-auto">
                    <p class="lead text-center">
                        <?php echo nl2br(get_theme_mod('about-text-setting', 'Stručný nebo dlouhý popis služby/webové stránky.'));?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section bg-tertiary" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Kontaktujte nás</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <?php
                            echo apply_shortcodes( '[contact-form-7 id="12" title="Kontaktní formulář 1"]' );
                        ?>
                    </form>
                </div>
            </div>
            
            
        </div>
    </section>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal Generator -->
    <?php
        foreach ($lastposts as $post) :
            setup_postdata($post);
    ?>
            <div class="portfolio-modal modal fade" id="portfolioModal<?php the_ID(); ?>" tabindex="-1" role="dialog"
                aria-labelledby="portfolioModal<?php the_ID(); ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>
                        </button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal <?php the_ID(); ?> - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                            id="portfolioModal<?php the_ID(); ?>Label">
                                            <?php the_title();?>
                                        </h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal <?php the_ID(); ?> - Image-->
                                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded mb-5']); ?>
                                        <!-- Portfolio Modal <?php the_ID(); ?> - Text-->
                                        <div class="text-secondary mb-5">
                                            <?php the_content(['class' => 'text-secondary mb-5']); ?>
                                        </div>
                                        <button class="btn btn-primary" data-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endforeach;
        wp_reset_postdata();
    ?>
</body>

</html>
</main>
<?php get_template_part('includes/footer'); ?>