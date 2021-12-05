
<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12-col-xl-12">
                <?php get_content($field['text']); ?>
                <?php echo do_shortcode($field['contact_form_shortcode']); ?>
                <?php get_image($field['image']); ?>
            </div>
        </div>
    </div>
</div>