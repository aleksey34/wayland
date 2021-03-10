<?php
defined("ABSPATH") || exit();

add_shortcode( 'main_custom_logo', 'electric_custom_logo_shortcode' );

function electric_custom_logo_shortcode( $atts ){
    if(is_front_page()){
        $logo = '<div class="logo-wrapper">
                    <a class="logo">
                        <img src="'.get_stylesheet_directory_uri().'/img/logo.png" alt="logo">
                    </a>
                </div>';
    }else{
        $logo = '<div class="logo-wrapper">
                    <a  href="'.home_url().'" class="logo">
                       <img src="'.get_stylesheet_directory_uri().'/img/logo.png" alt="logo">
                    </a>
                </div>';
    }



    return $logo;
}


