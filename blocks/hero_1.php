

<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <?php 
        $slides = $field['slides'];
        foreach($slides as $slide){
            echo '<img class="slide" src="'.$slide['slide']['url'].'" alt="'.$slide['slide']['alt'].'" />';
        }
    ?>
</div>