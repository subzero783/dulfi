<?php
	$footer_info = get_field('footer', 'options');
    $company_info = get_field('company_info', 'options');

    $col_1_menu = wp_nav_menu(array(
        'menu' => $footer_info['menu_id_1'], 
        'container' => '', 
        'items_wrap' => '<ul class="nav-menu navlinks">%3$s</ul>',
        'echo' => false
    ));
    $col_2_menu = wp_nav_menu(array(
        'menu' => $footer_info['menu_id_2'], 
        'container' => '', 
        'items_wrap' => '<ul class="nav-menu navlinks">%3$s</ul>',
        'echo' => false
    ));
?>

<footer id="footer_1" role="contentinfo">
	<div class="container">
		<div class="row">
			<div id="footer_col_1" class="col col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
            <?php echo !empty($footer_info['image']) ? '<a href="'.$footer_info['image_link']['url'].'" target="'.$footer_info['image_link']['target'].'" title="'.$footer_info['image_link']['title'].'"><img src="'.$footer_info['image']['url'].'" alt="'.$footer_info['image']['alt'].'" /></a>' : ''; ?>
			</div>
			<div id="footer_col_2" class="col col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                <?php echo $col_1_menu; ?>
			</div>
			<div id="footer_col_3" class="col col-12 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                <?php echo $col_2_menu; ?>
			</div>
			<div id="footer_col_4" class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <?php echo !empty($footer_info['title']) ? '<p>'.$footer_info['title'].'</p>' : ''; ?>
                <?php echo do_shortcode($footer_info['shortcode_4']);?>
			</div>
		</div>

	</div>
    <div id="footer_bottom" class="container">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <?php if(!empty($company_info['rights_reserved_text']))
                        {
                    ?>
                            <p><?php echo date("Y") . $company_info['rights_reserved_text']; ?></p>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>
	<?php wp_footer(); ?>
</body>
</html>
