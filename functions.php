<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION


/**
* 
*/
// 
// libs
require('includes/acf.extensions.php');     // php extensions for acf (options pages, manually defined fields, other stuff?)
require('classes/class.NavWalker.php');     // wordpress built in nav
require('classes/class.NavHandler.php');    // handler for creating theme headers

// Add excerpt field for pages
// Adding excerpt for page
add_post_type_support( 'page', 'excerpt' );

add_theme_support( 'custom-logo' );

function get_social_icons()
{
    $company_info = get_field('company_info', 'options');

    $content_social_icons = '';

    // if we have social media icons
    if (!empty($company_info['social_media'])) {

        $content_social_icons .= '<ul class="site__social-media">';

        $format_social_icons = '
			<li>
				<a class="hover-to-background-change-01" href="%s" title="%s" target="_blank">
					%s
				</a>
			</li>
		';

        foreach ($company_info['social_media'] as $social_icon) {

            $url = $social_icon['url'];
            
            $icon_html = $social_icon['icon'];

            $title = $social_icon['title'];
            
            if (!empty($url)) {
                $content_social_icons .= sprintf(
                    $format_social_icons,
                    $url,
                    $title,
                    $icon_html
                );
            }
        }
        $content_social_icons .= '</ul>';
    }
    return $content_social_icons;
}

function get_social_icons_top_nav(){
    $company_info = get_field('company_info', 'options');

    $content_social_icons = '';

    // if we have social media icons
    if (!empty($company_info['social_media'])) {

        $content_social_icons .= '<ul class="site__social-media">';

        $format_social_icons = '
			<li>
				<a class="hover-to-background-change-01" href="%s" title="%s" target="_blank">
					%s
				</a>
			</li>
		';

        foreach ($company_info['social_media'] as $social_icon) {

            if($social_icon['show_on_top_nav']){

                $url = $social_icon['url'];
                
                $icon_html = $social_icon['icon'];
                
                $title = $social_icon['title'];
            
                if (!empty($url)) {
                    $content_social_icons .= sprintf(
                        $format_social_icons,
                        $url,
                        $title,
                        $icon_html
                    );
                }
            }

        }
        $content_social_icons .= '</ul>';
    }
    return $content_social_icons;
}

function get_social_icons_banner_1_block(){
    $company_info = get_field('company_info', 'options');

    $content_social_icons = '';

    // if we have social media icons
    if (!empty($company_info['social_media'])) {

        $content_social_icons .= '<ul class="site__social-media">';

        $format_social_icons = '
			<li>
				<a href="%s" title="%s" target="_blank">
					%s
				</a>
			</li>
		';

        foreach ($company_info['social_media'] as $social_icon) {

            if($social_icon['show_on_banner_1_block']){

                $url = $social_icon['url'];
                
                $icon_html = $social_icon['icon'];
                
                $title = $social_icon['title'];
            
                if (!empty($url)) {
                    $content_social_icons .= sprintf(
                        $format_social_icons,
                        $url,
                        $title,
                        $icon_html
                    );
                }
            }

        }
        $content_social_icons .= '</ul>';
    }
    return $content_social_icons;
}

function get_site_food_logo()
{
    // look for a 'custom logo'
    $content_logo = '';
    // if we have a custom logo

    $sitename = json_encode(get_bloginfo('name'));

    $logo_id =  get_field('logo_image', 'options')['id'];
    $logo_alt =  get_field('logo_image', 'options')['alt'];
    $logo_size = 'full';
    $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
    $logo_srcset = wp_get_attachment_image_srcset($logo_id);
    $format_logo = '
        <img class="food_logo" src="%s" srcset="%s" alt="%s">
    ';
    $content_logo .= sprintf(
        $format_logo,
        $logo_src,
        $logo_srcset, 
        $logo_alt
    );
    return $content_logo;
}



function get_site_logo()
{
    $content_logo = '';

    $logo_id =  get_field('logo_image', 'options')['id'];
    $logo_alt =  get_field('logo_image', 'options')['alt'];
    $logo_size = 'full';
    $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
    $logo_srcset = wp_get_attachment_image_srcset($logo_id);
    

    $format_logo = '
        <a class="site__custom_logo" href="%s" title="Logo button">
            <img src="%s" srcset="%s" alt="%s">
        </a>
    ';
    $content_logo .= sprintf(
        $format_logo,
        get_home_url(),
        $logo_src,
        $logo_srcset,
        $logo_alt
    );
    return $content_logo;
}

/**
 * Returns the SITE NAV
 *
 * @param string $pre
 * @return void
 */
function get_site_nav($pre = 'navlinks')
{
    // create an unwrapped site nav
    $site__nav = wp_nav_menu(array(
        // 'menu' => 'nav__header', 
        'menu' => '2', 
        'container' => '', 
        'items_wrap' => '<ul class="nav-menu navlinks">%3$s</ul>', 
        'walker' => new NavWalker, 
        'echo' => false
    ));
    return $site__nav;
}

function get_site_nav_mobile($pre = 'navlinks')
{
    $site__nav = wp_nav_menu(array(
        'menu' => '2', 
        'container' => '', 
        'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>', 
        'walker' => new NavWalker, 
        'echo' => false
    ));
    return $site__nav;
}


add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
    // wp_enqueue_style('blankslate-style', get_stylesheet_directory_uri());
    wp_enqueue_style('blankslate-style', get_stylesheet_directory_uri().'/style.css');
    
    wp_enqueue_style('custom-styles', get_stylesheet_directory_uri() . '/assets/dist/css/main.min.css?r='.rand(10,1000), array() );
    
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/dist/js/main.min.js?r='.rand(10,1000), array('jquery'), '3.6.0', true);
}

// add_action('wp_footer', 'my_custom_footer_code');

function my_custom_footer_code()
{
    ?>
        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
        //]]></script>
    <?php
};

add_action('wp_head', 'google_tag_manager');
function google_tag_manager(){
?>
        
<?php
}

// Content functions
function get_city_locations($cities){

    $location_guide = '
        <li class="location">
            <i class="fas fa-map-marker-alt"></i>
            <div class="location_info">
                <h3>%s</h3>
                <a href="tel:%s">Tel: %s</a>
                <a class="map-link" href="%s" target="_blank">Ver Mapa</a>
            </div>
        </li>
    ';

    foreach($cities as $city){

        echo '<div class="city"><h2 class="line-under-heading">'.$city['city_name'].'</h2>';

        if(!empty($city['locations'])){
            $locations_content = '<ul class="city_locations">';
            foreach($city['locations'] as $location ){
                $locations_content .= sprintf(
                    $location_guide,
                    $location['title'],
                    $location['telephone'],
                    $location['telephone'],
                    $location['map_link']
                );
            }
            $locations_content .= '</ul></div>';
            echo $locations_content;
        }
    }
}
function get_content( $field ){
    echo '<div>'.$field.'</div>';
}
function get_image($field){
    echo !empty($field) ? '<img src="'.$field['url'].'" alt="'.$field['alt'].'" />' : '';
}
function get_title_1( $field ){
    $guide = '
        <h2 class="line-under-heading">%s</h2>
    ';
    $content = sprintf(
        $guide, 
        !empty($field) ? $field : ''
    );
    echo $content;
}

function get_paragraph_text( $field ){
    $guide = '
        <p>%s</p>
    ';
    $content = sprintf(
        $guide, 
        !empty($field)? $field : ''
    );
    echo $content;
}

// Woocommerce

add_theme_support('woocommerce');

