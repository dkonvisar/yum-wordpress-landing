<?php
// Hero fields
$hero_image_content = get_field('hero_image_content');
$hero_video_content = get_field('hero_video_content');
$hero_text_content = get_field('hero_text_content');
$hero_background_pattern = get_field('hero_background_pattern');
$hero_buttons = get_field('hero_buttons');
?>
<section
        class="hero" <?php echo $hero_background_pattern ? 'style="background-image: url(' . $hero_background_pattern['url'] . ')"' : ''; ?>>
    <div class="container--small">
        <?php if ($hero_image_content) :
            $image_class = $hero_video_content ? '' : 'no-video';
            $image = wp_get_attachment_image($hero_image_content['ID'], 'large', '', ['class' => $image_class]); ?>
            <div class="hero__left">
                <?php echo $image; ?>
                <?php if (!$image_class) :
                    $vide_url = $hero_video_content['url']; ?>
                    <?php if ($vide_url) : ?>
                        <video src="<?php echo $vide_url; ?>" autoplay loop muted></video>
                    <?php else :
                        echo $image; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($hero_text_content) : ?>
            <div class="hero__right">
                <div class="hero__text">
                    <?php echo $hero_text_content; ?>
                </div>
                <?php if ($hero_buttons) : ?>
                    <div class="hero__buttons">
                        <?php foreach ($hero_buttons as $button) :
                            $button_link = $button['button_link'];
                            $button_type = $button['button_type'] ? 'button button--secondary button--large' : 'button button--large'; ?>
                            <?php acf_link($button_link, "{$button_type}"); ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>