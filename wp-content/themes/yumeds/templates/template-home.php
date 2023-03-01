<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
    <main>
        <?php get_template_part('parts/section', 'hero'); ?>
        <?php get_template_part('parts/section', 'intro'); ?>
        <?php get_template_part('parts/section', 'biometrics'); ?>
        <?php get_template_part('parts/section', 'how'); ?>
        <?php get_template_part('parts/section', 'features'); ?>
        <?php get_template_part('parts/section', 'faq'); ?>
        <?php get_template_part('parts/section', 'signup'); ?>
    </main>
<?php
get_footer();
