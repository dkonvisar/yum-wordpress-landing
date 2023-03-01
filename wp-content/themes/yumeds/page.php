<?php
/**
 * Page
 */
get_header();
?>
    <main class="page-content">
        <section>
            <div class="container">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) :
                        the_post(); ?>
                        <h1 class="h2"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </main>
<?php
get_footer();
