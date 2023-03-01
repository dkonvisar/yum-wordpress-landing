<?php
// Intro Fields
$intro_section_id = get_field('intro_section_id');
$intro_text_content = get_field('intro_text_content');
$intro_icons = get_field('intro_icons');
?>
<?php if ($intro_text_content || $intro_icons) : ?>
    <section <?php section_id($intro_section_id); ?> class="intro section">
        <?php if ($intro_text_content) : ?>
            <div class="container--small">
                <div class="intro__heading heading">
                    <?php echo $intro_text_content; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($intro_icons) : ?>
            <div class="container--small">
                <div class="intro__icons">
                    <?php foreach ($intro_icons as $item) :
                        $color = $item['color'];
                        $icon = $item['icon'];
                        $text = $item['text']; ?>
                        <?php if ($icon || $text) : ?>
                            <div class="intro__item <?php echo $color ?: ''; ?>">
                                <?php if ($icon) : ?>
                                    <div class="intro__icon color-bg">
                                        <?php display_svg($icon); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <span><?php echo $text; ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>
<?php endif; ?>

