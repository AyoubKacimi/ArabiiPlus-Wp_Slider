<?php
	wp_deregister_script('jquery');
	
	function abi_arabiStyle() {
		wp_enqueue_style( 'abi_Files',plugins_url('../style.css',__FILE__));
		wp_enqueue_script( 'abi_jquery',
		  'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'
		  ,'1.10.2', false , true);
		wp_enqueue_script( 'abi_caro',plugins_url('../jquery.carouFredSel-6.2.1-packed.js',__FILE__),
		  '6.2.1',array('jquery'),true);
		wp_enqueue_script( 'abi_easing',plugins_url('../easing.js',__FILE__),
		   '3.2.0',array('jquery'),true);
		wp_enqueue_script( 'abi_easing_name',plugins_url('../easing_name.js',__FILE__),
		   '3.2.0',array('jquery'),true);
	}
	
	add_action( 'wp_enqueue_scripts', 'abi_arabiStyle');
?>