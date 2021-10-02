<?php 
/**
 *      NavHandler Class
 */

class NavHandler
{
    // Public Vars
    public $header_one = '';
    public $header_two = '';
    public $header_three = '';
    public $header_four = '';
    public $header_five = '';
    public $header_six = '';
    public $header_seven = '';
    public $header_eight = '';
    public $header_nine = '';
    public $header_ten = '';

    // Constructor
    function __construct(){
        $this->_init();
    }

    // Initialize
    function _init(){
        
        // get header field group
        $header = get_field('header','options');
        
        // look for a 'custom logo'
        $content_logo = '';
        // if we have a custom logo

        $logo_id =  get_field('logo_image', 'options')['id'];
        $logo_alt =  get_field('logo_image', 'options')['alt'];
        $logo_size = 'full';
        $logo_src = wp_get_attachment_image_src($logo_id, $logo_size);
        $logo_srcset = wp_get_attachment_image_srcset($logo_id);
        $format_logo = '
            <a class="header-logo" href="%s" title="Logo button">
                <img src="%s" srcset="%s" alt="%s" />
            </a>
        ';
        $content_logo .= sprintf(
            $format_logo
            ,get_home_url()
            ,$logo_src[0]
            ,$logo_srcset
            ,$logo_alt
        );

        $hamburger_icon = '<a class="site__bars" href="javascript:;" title="3 Line menu icon button"><span></span><span></span><span></span></a>';
        
        $company_address_br = 'Full Address with Break';
        $company_address = 'Full Address';
        $company_email = 'Email';

        $phone_number_1 = !empty(get_field('company_info', 'options')['telephone_1']) && !empty(get_field('company_info', 'options')['telephone_1_text']) ?
            '<span><span>'.get_field('company_info', 'options')['telephone_1_text'].'</span><span><i class="fas fa-phone-alt"></i> '.get_field('company_info', 'options')['telephone_1'].'</span></span>' : '';

        $phone_number_2 = 
            !empty(get_field('company_info', 'options')['telephone_2']) && !empty(get_field('company_info', 'options')['telephone_2_text']) ? 
                '<span><span>'.get_field('company_info', 'options')['telephone_2_text'].'</span><span><i class="fas fa-phone-alt"></i> '.get_field('company_info', 'options')['telephone_2'].'</span></span>' : '';

        
        
        $format_phone_1 = '
            <a id="header_phone_1" href="tel:%s">
                <div class="phone_text">%s</div>
            </a>
        ';

        $header_phone_1 = sprintf(
            $format_phone_1,
            !empty(get_field('company_info', 'options')['telephone_1']) ? get_field('company_info', 'options')['telephone_1'] : '',
            !empty(get_field('company_info', 'options')['telephone_1_text']) ? get_field('company_info', 'options')['telephone_1_text'] : ''
        );

        
        $format_phone_2 = '
            <a id="header_phone_2" href="tel:%s">
                <div class="phone_text">%s</div>
            </a>
        ';

        $header_phone_2 = sprintf(
            $format_phone_2,
            !empty(get_field('company_info', 'options')['telephone_2']) ? get_field('company_info', 'options')['telephone_2'] : '',
            !empty(get_field('company_info', 'options')['telephone_2_text']) ? get_field('company_info', 'options')['telephone_2_text'] : ''
        );

        
        
        /**
         * 
         * Start Header Style 1
         * 
         */


        $format_header = '
            <header class="header" id="ag_header_one">
                <div id="top_bar">
                    <div>%s %s %s</div>
                </div>
                <div id="bottom_bar">
                    <div id="logo">
                        %s
                    </div>
                    <div id="main_nav">
                        %s
                    </div>
                    <div></div>
                </div>
                <nav id="sticky_nav">
                    %s
                    %s
                </nav>
            </header>
        ';
        $this->header_one = sprintf( 
            $format_header,
            // $header['use_sticky_navigation_as_top_navigation'] === true ? 'sticky_nav_appear' : '',
            get_social_icons(),

            $header_phone_1,
            $header_phone_2,

            $content_logo,

            get_site_nav(),

            $content_logo,

            get_site_nav()
        );
        /**
         * 
         * End Header Style 1
         * 
         */

         

    }
}
?>