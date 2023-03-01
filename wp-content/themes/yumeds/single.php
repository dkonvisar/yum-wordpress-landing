<?php
/**
 * Single
 */
get_header();
?>
    <main class="page-content">
        <article>
            <div class="container">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) :
                        the_post(); ?>
                        <h1 class="h2"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </article>
    </main>
<?php
get_footer();
