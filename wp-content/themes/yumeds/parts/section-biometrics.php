<?php
// Biometrics fields
$bio_section_id = get_field('bio_section_id');
$bio_text_content = get_field('bio_text_content');
$bio_image_mobile = get_field('bio_image_mobile');
$bio_image_desktop = get_field('bio_image_desktop');
$bio_button = get_field('bio_button');
?>
<section <?php section_id($bio_section_id); ?> class="biometrics section">
    <div class="container--small">
        <div class="biometrics__left">
            <?php if ($bio_text_content) {
                echo $bio_text_content;
            } ?>
            <?php $bio_button ? acf_link($bio_button, 'button button--large') : null; ?>
        </div>
        <div class="biometrics__right">
            <?php picture($bio_image_mobile, $bio_image_desktop); ?>
        </div>
    </div>
</section>
<div class="container button-wrapper">
    <?php $bio_button ? acf_link($bio_button, 'button button--large') : null; ?>
</div>
