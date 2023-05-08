<?php

function tmm_stylesheets() {
wp_enqueue_style('style', get_stylesheet_uri() );
wp_enqueue_style('body', get_theme_file_uri('/css/sections/body.css'));
wp_enqueue_style('home', get_theme_file_uri('/css/sections/home.css'));
wp_enqueue_style('layout', get_theme_file_uri('/css/sections/layout.css'));
wp_enqueue_style('popup', get_theme_file_uri('/css/sections/popup.css'));
wp_enqueue_style('contact', get_theme_file_uri('/css/sections/contact.css'));
wp_enqueue_style('btn', get_theme_file_uri('/css/elements/btn.css'));

// fonts
wp_enqueue_style('fonts', get_theme_file_uri('/css/elements/fonts.css'));
wp_enqueue_style('open-sans', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap');

}
add_action('wp_enqueue_scripts', 'tmm_stylesheets');

// for footer
function tmm_stylesheets_footer() {
	wp_enqueue_script('popup-js', get_theme_file_uri('/js/popup.js'));
	
		if(is_single()){
			wp_enqueue_script('blog-js', get_theme_file_uri('/js/blog.js'));
		}
	}
	
add_action('get_footer', 'tmm_stylesheets_footer');

// loads enqueued javascript files deferred
function mind_defer_scripts( $tag, $handle, $src ) {
	$defer = array( 
	  'blog-js',
	  'popup-js'
	);
	if ( in_array( $handle, $defer ) ) {
	   return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	  
	  return $tag;
  } 
  add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );

function tmm_menus() {
 register_nav_menus( array(
   'primary' => __( 'Primary' )));
register_nav_menus( array(
'secondary' => __( 'Secondary' )));
 register_nav_menu('footer',__( 'Footer' ));
 add_theme_support('title-tag');
 add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'tmm_menus');

function divider_shortcode( $atts, $content = null ) {

	$a = shortcode_atts( array(

		'class' => '',

		'style' => ''

	), $atts );

	return '<div class="divider ' . esc_attr($a['class']) . '" style="' . esc_attr($a['style']) . '"></div>';

	// [divider class="" style=""]
}

add_shortcode( 'divider', 'divider_shortcode' );

function btn_shortcode( $atts, $content = null ) {

	$a = shortcode_atts( array(
	
	'class' => '',
	
	'href' => '#',
	
	'style' => '',
	
	'target' => '',

	'aria-label' => ''
	
	), $atts );
	
	return '<a class="btn-main ' . esc_attr($a['class']) . '" href="' . esc_attr($a['href']) . '" aria-label="' . esc_attr($a['aria-label']) . '" style="' . esc_attr($a['style']) . '" target="' . esc_attr($a['target']) . '">' . $content . '</a>';
	
	// [button href="#" class="btn-main" style=""]Learn More[/button]
	
	}
	
	add_shortcode( 'button', 'btn_shortcode' );


function text_link( $atts, $content = null ) {

	$a = shortcode_atts( array(

		'class' => '',

		'style' => '',

		'href' => '',

		'aria-label' => ''

	), $atts );

	$output = "";

	$output .= "<div class='d-flex align-items-center'>";
	$output .= '<a href="' . esc_attr($a['href']) . '" class="text-link ' . esc_attr($a['class']) . '" aria-label="' . esc_attr($a['aria-label']) . '" style="' . esc_attr($a['style']) . '">';
	$output .= "<span class='text-link-content' style='padding-right:9px;'>";
	$output .= "<strong>";
	$output .= $content;
	$output .= "</strong>";
	$output .= "</span>";
	$output .= "<span class='text-link-svg-icon'>";
	$output .= '<svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
	<g clip-path="url(#clip0_1_794)">
	<path d="M12.1181 0.184451C11.8723 -0.0614837 11.4665 -0.0614837 11.2093 0.184451C10.9635 0.424797 10.9635 0.821646 11.2093 1.06199L15.8107 5.56148H0.634487C0.280089 5.56148 0 5.83537 0 6.18191C0 6.52846 0.280089 6.81352 0.634487 6.81352H15.8107L11.2093 11.3018C10.9635 11.5478 10.9635 11.9502 11.2093 12.1905C11.4608 12.4365 11.8723 12.4365 12.1181 12.1905L17.8057 6.62907C18.0572 6.38872 18.0572 5.99187 17.8057 5.75152L12.1181 0.184451Z" fill="#BB1133"/>
	</g>
	<defs>
	<clipPath id="clip0_1_794">
	<rect width="18" height="12.375" fill="white"/>
	</clipPath>
	</defs>
	</svg>';
	$output .= "</span>";
	$output .= '</a>';
	$output .= '</div>';

	return $output;

	// [spacer class="" style=""]
}

add_shortcode( 'textlink', 'text_link' );

function current_year( $atts, $content = null ) {

	$current_year = date("Y");

	return $current_year;

	// [currentyear]
}

add_shortcode( 'currentyear', 'current_year' );

/*Base URL shorcode*/
add_shortcode( 'base_url', 'baseurl_shortcode' );
function baseurl_shortcode( $atts ) {

    return site_url();
	// [base_url]

}