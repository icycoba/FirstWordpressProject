<?php
// Get data with the WP Loop
if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('includes/header');
?>
        <main>
            <article>
                <h1><?php the_title() ?></h1>
                <?php the_content(); ?>
            </article>
        </main>
<?php
    endwhile;
else : wp_redirect(get_bloginfo('siteurl') . '/404', 404);
    exit;
endif;
?>