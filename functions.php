<?php
// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//function wp_register_styles(){
//  wp_enqueue_style('main-css',get_template_directory_uri().'/style.css',[],time(),'all');
//}
//add_action('wp_enqueue_scripts','wp_register_styles');
//
//function register_menus(){
//    $locations=array(
//      'primary'=>'top menubar',
//      'footer' =>'footer menu'
//    );
//    register_nav_menus($locations);
//}
//add_action('init','register_menus');
//
//function register_side(){
//    register_sidebar(
//        array([
//            'name'               => esc_html__('main sidebar','wphierarchy'),
//            'id'                 => 'main-sidebar',
//            'description'        =>esc_html__('add widget for main sidebar','wphierarchy'),
//            'before_widget'      => '<section class="widget">',
//            'after_widget'       => '</section>',
//            'before_title'       =>'<h2 class="widget-title">',
//            'after-title'        => '</h2>'
//
//
//        ] )
//    );
//}
//add_action( 'widgets_init','register_side');