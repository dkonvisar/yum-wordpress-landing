<?php
// Signup fields
$signup_section_id = get_field('signup_section_id');
$signup_text_content = get_field('signup_text_content');
$signup_image_content = get_field('signup_image_content');
$signup_form_shortcode = get_field('signup_form_shortcode');
?>
<section <?php section_id($signup_section_id); ?> class="signup">
    <div class="container">
        <?php if ($signup_text_content || $signup_form_shortcode) : ?>
            <div class="signup__left">
                <?php if ($signup_text_content) : ?>
                    <div class="signup__heading">
                        <?php echo $signup_text_content; ?>
                    </div>
                <?php endif; ?>
                <?php if ($signup_form_shortcode) : ?>
                    <div class="signup__form">
                        <?php echo do_shortcode($signup_form_shortcode); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($signup_image_content) : ?>
            <div class="signup__right">
                <img src="<?php echo $signup_image_content['sizes']['large']; ?>" alt="<?php echo $signup_image_content['alt']; ?>">
            </div>
        <?php endif; ?>
    </div>
</section>
