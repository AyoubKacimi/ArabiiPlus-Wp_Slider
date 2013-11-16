<?php 
  // register Slider Post Type
  function abi_ArabiSliderPost() {
    // Set Labels Of The costum Post
    $labels = array(
    'add_new'       =>  __( 'اضف سلايدر', 'abi_arabislider' ),
    'not_found'     =>  __( 'لا يوجد اي سلايدر', 'abi_arabislider' ),
    'add_new_item'  =>  __( 'اضف سلايدر جديد', 'abi_arabislider' ) ,
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
?>