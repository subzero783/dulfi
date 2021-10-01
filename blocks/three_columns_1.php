<div class="<?php echo $field['acf_fc_layout']; ?>_block container">
    <div class="row">
        <div class="col col-12 co-sm-12 col-md-4 col-lg-4 col-xl-4">
            <a href="<?php echo !empty($field['image_1_link']['url']) ? $field['image_1_link']['url'] : '';?>" target="<?php echo !empty($field['image_1_link']['target']) ? $field>['image_1_link']['target'] : '';?>" title="<?php echo !empty($field['image_1_link']['title']) ? $field['image_1_link']['title'] : '';?>">
                <img class="<?php echo $field['acf_fc_layout']; ?>_block_image_1 lazyload" src="<?php echo $field['image_1']['url']; ?>" alt="<?php echo $field['image_1']['alt']; ?>" />
            </a>
        </div>
        <div class="col col-12 co-sm-12 col-md-4 col-lg-4 col-xl-4">
            <a href="<?php echo !empty($field['image_2_link']['url']) ? $field['image_2_link']['url'] : '';?>" target="<?php echo !empty($field['image_2_link']['target']) ? $field>['image_2_link']['target'] : '';?>" title="<?php echo !empty($field['image_2_link']['title']) ? $field['image_2_link']['title'] : '';?>">
                <img class="<?php echo $field['acf_fc_layout']; ?>_block_image_2 lazyload" src="<?php echo $field['image_2']['url']; ?>" alt="<?php echo $field['image_2']['alt']; ?>" />
            </a>
        </div>
        <div class="col col-12 co-sm-12 col-md-4 col-lg-4 col-xl-4">
            <a href="<?php echo !empty($field['image_3_link']['url']) ? $field['image_3_link']['url'] : '';?>" target="<?php echo !empty($field['image_3_link']['target']) ? $field>['image_3_link']['target'] : '';?>" title="<?php echo !empty($field['image_3_link']['title']) ? $field['image_3_link']['title'] : '';?>">
                <img class="<?php echo $field['acf_fc_layout']; ?>_block_image_3 lazyload" src="<?php echo $field['image_3']['url']; ?>" alt="<?php echo $field['image_3']['alt']; ?>" />
            </a>
        </div>
    </div>
</div>