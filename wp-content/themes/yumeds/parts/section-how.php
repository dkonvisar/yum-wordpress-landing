<?php
// How fields
$how_section_id = get_field('how_section_id');
$how_text_content = get_field('how_text_content');
$how_boxes = get_field('how_boxes');
?>
<?php if ($how_text_content || $how_boxes) : ?>
    <section <?php section_id($how_section_id); ?> class="how">
        <div class="container">
            <?php if ($how_text_content) : ?>
                <div class="how__heading heading">
                    <?php echo $how_text_content; ?>
                </div>
            <?php endif; ?>
            <?php if ($how_boxes) : ?>
                <div class="how__boxes">
                    <?php foreach ($how_boxes as $box) :
                        $color = $box['color'];
                        $icon = $box['icon'];
                        $text = $box['text'];
                        $image = $box['image']; ?>
                        <div class="how__box color-bg <?php echo $color ?: ''; ?>">
                            <?php if ($icon) : ?>
                                <div class="how__icon">
                                    <?php display_svg($icon); ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($text) : ?>
                                <div class="how__text">
                                    <?php echo $text; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($image) : ?>
                                <div class="how__img">
                                    <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>