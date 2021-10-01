
<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="container">
        <?php 
            $images = $field['images'];
            $image_guide = '
                <div class="grid-item">
                    <a href="%s" target="%s" title="%s">
                        <img src="%s" alt="%s" />
                    </a>
                </div>
            ';
            $images_content = null;
            foreach( $images as $image ){
                $images_content .= sprintf(
                    $image_guide, 
                    !empty($image['image_link']) ? $image['image_link']['url'] : '',
                    !empty($image['image_link']) ? $image['image_link']['target'] : '',
                    !empty($image['image_link']) ? $image['image_link']['title'] : '',
                    !empty($image['image']) ? $image['image']['url'] : '',
                    !empty($image['image']) ? $image['image']['alt'] : ''
                );
            }
            echo !empty($field['title']) ? '<h2 class="text-align-center title-01">'.$field['title'].'</h2>' : '';
            echo '
                <div class="images_container masonry-grid">
                    '.$images_content.'
                </div>
            ';
        ?>
    </div>
</div>
