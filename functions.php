<?php 
	
	function add_scripts(){
		wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() .'/assets/css/font-awesome/css/font-awesome.min.css'); 
		wp_enqueue_style('style', get_stylesheet_directory_uri().'/style.css');
				
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', get_stylesheet_directory_uri().'/assets/js/jquery-2.2.3.min.js');
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'main', get_stylesheet_directory_uri().'/assets/js/main.js');
	}

	add_action('wp_enqueue_scripts','add_scripts');


	function trecho_post($length){
    	return 10;
	}
	add_filter( 'excerpt_length', 'trecho_post', 999 );	


	add_action( 'after_setup_theme', 'meu_tema_configuracoes' );
	function meu_tema_configuracoes(){
   		add_image_size( 'miniatura', 350, 250, array('center','center') );
   		add_image_size( 'curriculo', 500, 500, array('center','center') );
   		add_image_size( 'single', 700, 400, array('center','center') );
	}
