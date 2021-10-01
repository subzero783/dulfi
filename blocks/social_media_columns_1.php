<div class="<?php echo $field['acf_fc_layout'].'_block'; ?>">
    <div class="container">
        <div class="row">
            <div class="col col-12 co-sm-6 col-md-6 col-lg-6 col-xl-6">
                <?php 
                
                    echo '
                        <a href="'.$field['link_1']['url'].'" target="'.$field['link_1']['target'].'" title="'.$field['link_1']['title'].'">
                            '.$field['text_1'].'
                        </a>
                    ';

                ?>
            </div>
            <div class="col col-12 co-sm-6 col-md-6 col-lg-6 col-xl-6">
                <?php
                    echo $field['text_2'];
                ?>
            </div>
        </div>
    </div>
</div>