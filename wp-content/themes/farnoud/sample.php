<?php
/***********************************************************************************************************************/
/**************************************** Registering Custom Post Type *************************************************/
/***********************************************************************************************************************/
function custom_post_type_sample() {
 // Labels
     $labels = array(
         'name'                => _x( 'نمونه‌ها', 'Post Type General Name', 'twentythirteen' ),
         'singular_name'       => _x( 'نمونه', 'Post Type Singular Name', 'twentythirteen' ),
         'menu_name'           => __( 'نمونه‌ها', 'twentythirteen' ),
         'parent_item_colon'   => __( 'نمونه مادر', 'twentythirteen' ),
         'all_items'           => __( 'همه نمونه‌ها', 'twentythirteen' ),
         'view_item'           => __( 'مشاهده نمونه', 'twentythirteen' ),
         'add_new_item'        => __( 'افزودن نمونه جدید', 'twentythirteen' ),
         'add_new'             => __( 'افزودن', 'twentythirteen' ),
         'edit_item'           => __( 'ویرایش نمونه', 'twentythirteen' ),
         'update_item'         => __( 'بروزرسانی نمونه', 'twentythirteen' ),
         'search_items'        => __( 'جست‌وجوی نمونه‌ها', 'twentythirteen' ),
         'not_found'           => __( 'پیدا نشد', 'twentythirteen' ),
         'not_found_in_trash'  => __( 'در زباله دان پیدا نشد', 'twentythirteen' ),
     );
 //Options
     $args = array(
         'label'               => __( 'نمونه‌ها', 'twentythirteen' ),
         'description'         => __( 'نمونه‌ها دادصا', 'twentythirteen' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'menu_position'       => 5,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
         'show_in_rest'        => true,
         //Add taxonomies to CPT
         'taxonomies'          => array( 'sample-cat' , 'sample-tag' ),
     );
      
     // Registering Custom Post Type
     register_post_type( 'sample', $args );
  
 }
 add_action( 'init', 'custom_post_type_sample', 0 );


/***********************************************************************************************************************/
/*************************************** Registering Category and Tag Taxonomy *****************************************/
/***********************************************************************************************************************/
function custom_create_sample_taxonomies() {
    //Category
    $labels = array(
        'name'              => _x( 'دسته‌بندی‌های نمونه', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'دسته‌بندی نمونه', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'جست‌وجوی دسته‌بندی‌های نمونه', 'textdomain' ),
        'all_items'         => __( 'همه دسته‌بندی‌های نمونه', 'textdomain' ),
        'parent_item'       => __( 'دسته‌بندی‌ نمونه مادر', 'textdomain' ),
        'parent_item_colon' => __( 'دسته‌بندی‌ نمونه مادر', 'textdomain' ),
        'edit_item'         => __( 'ویرایش دسته‌بندی نمونه', 'textdomain' ),
        'update_item'       => __( 'به‌روزرسانی دسته‌بندی نمونه', 'textdomain' ),
        'add_new_item'      => __( 'افزودن دسته‌بندی نمونه جدید', 'textdomain' ),
        'new_item_name'     => __( 'نام دسته‌بندی نمونه جدید', 'textdomain' ),
        'menu_name'         => __( 'دسته‌بندی نمونه', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rewrite'           => array( 'slug' => 'sample-cat' ),
    );
 
    register_taxonomy( 'sample-cat', array('sample'), $args );
 
    unset( $args );
    unset( $labels );
 
    //Tag
    $labels = array(
        'name'                       => _x( 'برچسب‌های نمونه', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'برچسب نمونه', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'جست‌وجوی برچسب‌های نمونه', 'textdomain' ),
        'popular_items'              => __( 'برچسب‌های نمونه محبوب', 'textdomain' ),
        'all_items'                  => __( 'همه برچسب‌ها', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'ویرایش برچسب نمونه', 'textdomain' ),
        'update_item'                => __( 'به‌روزرسانی برچسب نمونه', 'textdomain' ),
        'add_new_item'               => __( 'افزودن برچسب نمونه جدید', 'textdomain' ),
        'new_item_name'              => __( 'نام برچسب نمونه جدید', 'textdomain' ),
        'separate_items_with_commas' => __( 'برچسب‌های نمونه را با کاما جدا کنید', 'textdomain' ),
        'add_or_remove_items'        => __( 'افزودن یا حذف برچسب نمونه', 'textdomain' ),
        'choose_from_most_used'      => __( 'انتخاب از برچسب‌های نمونه پر استفاده', 'textdomain' ),
        'not_found'                  => __( 'برچسب نمونه یافت نشد', 'textdomain' ),
        'menu_name'                  => __( 'برچسب‌های نمونه', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'show_in_rest' => true,
        'rewrite'               => array( 'slug' => 'sample-tag' ),
    );
 
    register_taxonomy( 'sample-tag', array( 'sample'), $args );
}
add_action( 'init', 'custom_create_sample_taxonomies', 0 );

