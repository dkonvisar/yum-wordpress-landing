<?php
$faq_section_id = get_field('faq_section_id');
$faq_image_content = get_field('faq_image_content');
$faq_text_content = get_field('faq_text_content');
$faqs = get_field('faqs');
?>
<section <?php section_id($faq_section_id) ?> class="faq">
    <div class="container">
        <?php if ($faq_image_content) : ?>
            <div class="faq__left">
                <img src="<?php echo $faq_image_content['sizes']['large']; ?>" alt="<?php echo $faq_image_content['alt']; ?>">
            </div>
        <?php endif; ?>
        <?php if ($faq_text_content || $faqs) : ?>
            <div class="faq__right">
                <?php if ($faq_text_content) : ?>
                    <div class="faq__heading">
                        <?php echo $faq_text_content; ?>
                    </div>
                <?php endif; ?>
                <?php if ($faqs) : ?>
                    <div class="faq__faqs">
                        <?php foreach ($faqs as $key => $faq) :
                            $question = $faq['question'];
                            $answer = $faq['answer']; ?>
                            <?php if ($question && $answer) : ?>
                                <div class="tab">
                                    <input type="checkbox" id="checkbox-<?php echo $key; ?>">
                                    <label class="tab__label h5" for="checkbox-<?php echo $key; ?>">
                                        <?php echo $question; ?>
                                    </label>
                                    <div class="tab__content">
                                        <?php echo $answer; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
