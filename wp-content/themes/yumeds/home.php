<?php
/**
 * Home (loop for Blog page)
 */
get_header();
?>
    <main class="page-content">
        <div class="container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) :
                    the_post(); ?>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
<?php
get_footer();
