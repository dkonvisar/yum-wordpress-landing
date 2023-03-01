<?php
/**
 * 404
 */
get_header();
?>
    <div class="page-content not-found">
        <div class="container">
            <h1><?php echo __('404: Page not found', 'default'); ?></h1>
            <h3><?php echo __('Take me back to', 'default'); ?>
                <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
            </h3>
        </div>
    </div>
<?php
get_footer();
