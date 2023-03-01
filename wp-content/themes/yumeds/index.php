<?php
/**
 * Index
 *
 * Standard loop for the front-page
 */
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
    }
}

get_footer();
