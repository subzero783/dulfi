
<div class="<?php echo $field['acf_fc_layout']; ?>_block">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php 
                    $cities_1 = $field['cities_1'];
                    get_city_locations($cities_1);
                ?>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <?php 
                    $cities_2 = $field['cities_2'];
                    get_city_locations($cities_2);
                ?>
            </div>
        </div>
    </div>
</div>