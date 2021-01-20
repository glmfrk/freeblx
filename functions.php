<?php 





function freeblx_default(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-background');
	
	load_theme_textdomain('freeblx', get_template_directory_uri().'/languages');
	
	if(function_exists ('register_nav_menus')){
		register_nav_menus(array(
			'top' => __('Main Menu', 'freeblx'),
			'social' => __('Social Links Menu','freeblx'),
		));
	}
	
/* 	register_post_type ('freeblxslider', array(
		'labels' => array(
			'name'=> 'Freeblx Slider',
			'add_new_item' => 'Add New Slide Item',
		),
		'public' => true,
		'supports' => array('title','thumbnail',)
	
	)); 
*/
	

	
	function read_more($limit){
		$post_content = explode (" ", get_the_content());
		
		$less_content = array_slice ($post_content, 0, $limit);
		
		echo implode (" ", $less_content);
	}	
	function title($limit){
		$post_title = explode (" ", get_the_title());
		
		$less_title = array_slice ($post_title, 0, $limit);
		
		echo implode (" ", $less_title);
	}
}
add_action('after_setup_theme','freeblx_default');


// Footer Wedgets 

function ftr_widgets(){
	
	register_sidebar(array(
		'name' => __('Footer Widgets', 'freeblx'),
		'description' => __('Add or Remove Your Footer Widgets Item...', 'freeblx'),
		'id' => 'footer-sidebar',
		'before_widget' => '<div class="one_fourth">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',		
		
	
	));
	
	
}
add_action('widgets_init','ftr_widgets');



// Author Bio Wedgets 
// require_once("inc/templates/about_author.php");

require_once ('nav-menu.php');


