<?php
// Pages Header fields
$pages = get_field('pages', 'options');
$pages_logo = $pages['logo'];
$pages_right_button = $pages['right_button'];
?>
<!--Mobile Menu-->
<?php if (has_nav_menu('header-menu-pages')) : ?>
    <div id="hamburger-icon" class="hamburger-icon" onclick="toggleMobileMenu(this)">
        <span class="bar-1 icon"></span>
        <span class="bar-2 icon"></span>
        <span class="bar-3 icon"></span>
        <?php wp_nav_menu([
            'theme_location' => 'header-menu-pages',
            'menu_class' => 'menu mobile-menu'
        ]); ?>
    </div>
<?php endif; ?>
<!--Mobile Menu-->
<!--Logo-->
<div class="header__logo">
    <?php if (!empty($pages_logo)) : ?>
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo $pages_logo['sizes']['medium']; ?>" alt="<?php echo $pages_logo['alt']; ?>">
        </a>
    <?php else : ?>
        <?php the_custom_logo(); ?>
    <?php endif; ?>
</div>
<!--Logo-->
<!--Desktop Menu-->
<?php if (has_nav_menu('header-menu-pages')) : ?>
    <nav class="header__menu">
        <?php wp_nav_menu([
            'theme_location' => 'header-menu-pages',
            'menu_class' => 'menu header-menu'
        ]); ?>
    </nav>
<?php endif; ?>
<!--Desktop Menu-->
<!--Right Button-->
<?php if (!empty($pages_right_button)) : ?>
    <div class="header__button">
        <?php acf_link($pages_right_button, 'button'); ?>
    </div>
<?php endif; ?>
<!--Right Button-->
