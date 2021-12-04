


<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="container">
        <div class="row">
            <div class="col col-12 co-sm-12 col-md-4 col-lg-4 col-xl-4">
                <?php get_title_1($field['title_1']); ?>             
                <?php get_paragraph_text($field['text_1']); ?>
            </div>  
            <div class="col col-12 co-sm-12 col-md-4 col-lg-4 col-xl-4">
                <?php get_title_1($field['title_2']); ?>             
                <?php get_paragraph_text($field['text_2']); ?>
            </div>  
            <div class="col col-12 co-sm-12 col-md-4 col-lg-4 col-xl-4">
                <?php get_title_1($field['title_3']); ?>             
                <?php get_paragraph_text($field['text_3']); ?>
            </div>  
        </div>
    </div>
</div>