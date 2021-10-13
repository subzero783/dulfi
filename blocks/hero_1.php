

<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="hero_1_slider">
    <?php 
        $slides = $field['slides'];
        foreach($slides as $slide){
            echo '<img class="slide" src="'.$slide['slide']['url'].'" alt="'.$slide['slide']['alt'].'" />';
        }
    ?>
    </div>
    <div class="social_media_icons">
        <?php echo  get_social_icons_banner_1_block(); ?>
    </div>
</div>