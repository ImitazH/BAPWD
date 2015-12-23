<?php

function ebit_theme_init(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	
	add_image_size('post-thumb',600,400,true);//parameters:name, width(px), height(px), true/false (true hole crop korbe, false hole crop korbena. jodi cai pic kothao na katu, jevabe debo sevabei thakuk tahole false kore debo. Means crop korbena. R jodi cai ratio inujai size koruk tahole true debo means crop korbe.)
	
	register_nav_menus(array(
		
		'header_menu' => 'Main Menu',
		'footer_menu' => 'Bottom Menu',
		'primary_menu'=>  'Primary Menu'
		
	)); // eti parameter gulo array akare receive kore. Egulo Theme Location er show korbe. Ekhane last er tar same key and same value hole better.

}

add_action('after_setup_theme','ebit_theme_init');// after_setup_theme is a wordpress hook




	function ebit_css_js(){

		wp_enqueue_style('main_style',get_stylesheet_uri(),array('ebit-test-style'),'v2.003','all');  // er maddhome amra style.css ke add korlam. Er jono amader dependency, version esob dorkarnai. ekhane version na dile wordpress er je verison ache seta dekhabe. media 'all' na dileo hoy bcz by default all dya thake.

	    wp_enqueue_style('ebit-test-style',get_template_directory_uri().'/css/test.css',null,'v1.001','all');  // parameters: handle, source, dependency, version, media
		// Note: null use kore '' use korte hobena. get_template_directory_uri() function ke '' er moddhe use korte hobena.



		wp_enqueue_script('ebit-test-script',get_template_directory_uri().'/js/javascript.js',array('jquery'),'v1.003',false);// parameters: handle, source, dependency, version,footer/header(Boolearn: true korle footer a jabe and flase korle header e jabe)
		// nul and true/false er jonno '' hobena.

	    wp_enqueue_script('jquery');  // jehetu jquery ke sobar age pete hobe R amara jani jeta dependent banabo seta upore thakbe tai amra etake dependent baniye javascript.js er hander er place e bosabo. fole eti upre thakbe.

	}

add_action('wp_enqueue_scripts','ebit_css_js');
