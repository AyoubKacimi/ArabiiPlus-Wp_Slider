<?php 
 /*
 Plugin Name: العربي درس سلايدر
 Description: سلايدر العربي 
 Plugin URI: https://github.com/AyoubKacimi/Arabi_Slider_Wordpress_Plugin
 Author: العربي للبرمجة و التصميم
 Author URI: http://www.arabiplus.com/
 Version: 0.1
 License: GPL2
 */
 
 /*
     Copyright (C) Year  Author  Email
 
     This program is free software; you can redistribute it and/or modify
     it under the terms of the GNU General Public License, version 2, as
     published by the Free Software Foundation.
 
     This program is distributed in the hope that it will be useful,
     but WITHOUT ANY WARRANTY; without even the implied warranty of
     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     GNU General Public License for more details.
 
     You should have received a copy of the GNU General Public License
     along with this program; if not, write to the Free Software
     Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
	// includes Files
	require_once('core/slider.php');
	add_shortcode('arabi_renderSlider','arabi_sliderLoop');

  // register Slider Post Type
  function abi_ArabiSliderPost() {
  // Set Labels Of The costum Post
  $labels = array(
  'add_new'       => 'اضف سلايدر',
  'not_found'     => 'لا يوجد اي سلايدر',
  'add_new_item'  => 'اضف سلايدر جديد',
  );
  // Set the Slider itmes
  $args = array(
  'labels'        => $labels,
  'public'        => true,
  'label'         => 'سلايدر العربي',
  'supports'      => array( 'title', 'editor','thumbnail')
  );
  // Register The post type Named : abi_sliderPost
  register_post_type( 'abi_sliderPost', $args );
  }
  // Init : Add the Post type to worpdress Core 
  add_action( 'init', 'abi_ArabiSliderPost' );

  
  wp_deregister_script('jquery');
  
  function abi_arabiStyle() {
    wp_enqueue_style( 'abi_Files',plugins_url('/style.css',__FILE__));
    wp_enqueue_script('abi_jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js','1.10.2',false,true );
    wp_enqueue_script('abi_Files',plugins_url('/jquery.carouFredSel-6.2.1-packed.js',__FILE__)
    ,array('jquery'),'6.2.1',true );
    wp_enqueue_script('abi_easing',plugins_url('/easing.js',__FILE__),array('jquery'),'3.2',true );
    wp_enqueue_script('abi_easing_name',plugins_url('/easing_name.js',__FILE__),array('jquery'),'3.2',true );
    
  }
  add_action( 'wp_enqueue_scripts', 'abi_arabiStyle');


    function RunSlider_Arabi(){ ?>
     <script>
         $("#run_slider").carouFredSel({

            circular: true,
            infinite: true,
            auto  : true,
            auto : {
              fx : "scroll",
              easing : "easeInElastic",
              duration: 800
            },
            prev  : { 
              button  : ".left_side",
              key   : "left",
              fx : "scroll",easing : "easeInElastic", duration: 800
            },
            next  : { 
              button  : ".right_side",
              key   : "right",
              fx : "scroll",easing : "easeInElastic", duration: 800
            },
            pagination  : ".pagination"
          });
     </script>
    <?php } 
    add_action('wp_footer','RunSlider_Arabi',50 );
?>
  