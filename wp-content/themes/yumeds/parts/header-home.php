<?php
// Home Header fields
$home = get_field('home', 'options');
$home_logo = $home['logo'];
$home_logo_mobile = $home['logo_mobile'];
$home_right_button = $home['right_button'];
?>
<!--Mobile Menu-->
<?php if (has_nav_menu('header-menu-home')) : ?>
    <div id="hamburger-icon" class="hamburger-icon" onclick="toggleMobileMenu(this)">
        <span class="bar-1 icon"></span>
        <span class="bar-2 icon"></span>
        <span class="bar-3 icon"></span>
        <?php wp_nav_menu([
            'theme_location' => 'header-menu-home',
            'menu_class' => 'menu mobile-menu'
        ]); ?>
    </div>
<?php endif; ?>
<!--Mobile Menu-->
<!--Logo-->
<div class="header__logo">
    <?php if (!empty($home_logo)) : ?>
        <a href="<?php echo home_url(); ?>">
            <?php picture($home_logo_mobile, $home_logo); ?>
        </a>
    <?php else : ?>
        <?php the_custom_logo(); ?>
    <?php endif; ?>
</div>
<!--Logo-->
<!--Desktop Menu-->
<?php if (has_nav_menu('header-menu-home')) : ?>
    <nav class="header__menu">
        <?php wp_nav_menu([
            'theme_location' => 'header-menu-home',
            'menu_class' => 'menu header-menu'
        ]); ?>
    </nav>
<?php endif; ?>
<!--Desktop Menu-->
<!--Right Button-->
<?php if (!empty($home_right_button)) : ?>
    <div class="header__button">
        <?php acf_link($home_right_button, 'button'); ?>
    </div>
<?php endif; ?>
<!--Right Button-->
