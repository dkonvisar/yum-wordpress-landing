<?php
// Features fields
$features_section_id = get_field('features_section_id');
$features_text_content = get_field('features_text_content');
$features_image_desktop = get_field('features_image_desktop');
$features_image_second_desktop = get_field('features_image_second_desktop');
$features_boxes = get_field('features_boxes');
$features_button = get_field('features_button');
?>
<section <?php section_id($features_section_id); ?> class="features section">
    <?php if ($features_text_content) : ?>
        <div class="features__heading-wrapper">
            <div class="container features__heading">
                <?php echo $features_text_content; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="features__main">
        <div class="container--small features__content">
            <div class="features__left">
                <?php if ($features_boxes) : ?>
                    <div class="container">
                        <div class="features__boxes">
                            <?php foreach ($features_boxes as $box) :
                                $color = $box['color'];
                                $icon = $box['icon'];
                                $title = $box['title'];
                                $text = $box['text']; ?>
                                <?php if ($icon || $text) : ?>
                                <div class="features__box <?php echo $color ?: ''; ?>">
                                    <?php if ($icon) : ?>
                                        <div class="features__icon color-bg">
                                            <?php display_svg($icon); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($title || $text) : ?>
                                        <div class="features__text">
                                            <?php if ($title) : ?>
                                                <h5><?php echo $title; ?></h5>
                                            <?php endif; ?>
                                            <?php if ($text) : ?>
                                                <span class="no-color"><?php echo $text; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $features_button ? acf_link($features_button, 'button button--large') : null; ?>
            </div>
            <div class="features__right">
                <?php if ($features_image_desktop) : ?>
                    <div class="features__images">
                        <img class="features__image" src="<?php echo $features_image_desktop['sizes']['large']; ?>" alt="<?php echo $features_image_desktop['alt']; ?>">
                        <?php if ($features_image_second_desktop) : ?>
                            <img class="features__sub-image" src="<?php echo $features_image_second_desktop['sizes']['large']; ?>" alt="<?php echo $features_image_second_desktop['alt']; ?>">
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<div class="container button-wrapper">
    <?php $features_button ? acf_link($features_button, 'button button--large') : null; ?>
</div>
