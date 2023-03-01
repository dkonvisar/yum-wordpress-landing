<?php
/**
 * Footer
 */
$logo = get_field('logo', 'options');
$copyright = get_field('copyright', 'options');
$socials = get_field('socials', 'options');
?>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <?php if ($logo) : ?>
                <div class="footer__logo">
                    <img src="<?php echo $logo['sizes']['medium']; ?>" alt="<?php echo $logo['alt']; ?>">
                </div>
            <?php endif; ?>
            <?php if ($copyright) : ?>
                <div class="footer__copyright">
                    <?php echo $copyright; ?>
                </div>
            <?php endif; ?>
            <?php if ($socials) : ?>
                <div class="footer__socials">
                    <?php foreach ($socials as $social) :
                        $icon = $social['icon'];
                        $link = $social['link'];
                        $link_url = $link['url'];
                        $link_target = $link['target'] ? 'target="' . $link['target'] . '"' : '';
                        ?>
                        <?php if ($link_url) : ?>
                            <a href="<?php echo $link_url; ?>" <?php echo $link_target; ?>>
                                <?php if ($icon) : ?>
                                    <img src="<?php echo $icon['sizes']['thumbnail']; ?>" alt="<?php echo $icon['alt']; ?>">
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if (has_nav_menu('footer-menu')) : ?>
            <div class="footer__bottom">
                <?php wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'menu footer-menu'
                ]); ?>
            </div>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

