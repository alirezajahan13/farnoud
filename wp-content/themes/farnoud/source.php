<?php
/***********************************************************************************************************************/
/**************************************** Registering Custom Post Type *************************************************/
/***********************************************************************************************************************/
function custom_post_type_source() {
 // Labels
     $labels = array(
         'name'                => _x( 'مراجع حقوقی', 'Post Type General Name', 'twentythirteen' ),
         'singular_name'       => _x( 'مرجع حقوقی', 'Post Type Singular Name', 'twentythirteen' ),
         'menu_name'           => __( 'مراجع حقوقی', 'twentythirteen' ),
         'parent_item_colon'   => __( 'مرجع حقوقی مادر', 'twentythirteen' ),
         'all_items'           => __( 'همه مراجع حقوقی', 'twentythirteen' ),
         'view_item'           => __( 'مشاهده مرجع حقوقی', 'twentythirteen' ),
         'add_new_item'        => __( 'افزودن مرجع حقوقی جدید', 'twentythirteen' ),
         'add_new'             => __( 'افزودن', 'twentythirteen' ),
         'edit_item'           => __( 'ویرایش مرجع حقوقی', 'twentythirteen' ),
         'update_item'         => __( 'بروزرسانی مرجع حقوقی', 'twentythirteen' ),
         'search_items'        => __( 'جست‌وجوی مراجع حقوقی', 'twentythirteen' ),
         'not_found'           => __( 'پیدا نشد', 'twentythirteen' ),
         'not_found_in_trash'  => __( 'در زباله دان پیدا نشد', 'twentythirteen' ),
     );
 //Options
     $args = array(
         'label'               => __( 'مراجع حقوقی', 'twentythirteen' ),
         'description'         => __( 'مراجع حقوقی دادصا', 'twentythirteen' ),
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
         'taxonomies'          => array( 'source-cat' , 'source-tag' ),
     );
      
     // Registering Custom Post Type
     register_post_type( 'source', $args );
  
 }
 add_action( 'init', 'custom_post_type_source', 0 );


/***********************************************************************************************************************/
/*************************************** Registering Category and Tag Taxonomy *****************************************/
/***********************************************************************************************************************/
function custom_create_source_taxonomies() {
    //Category
    $labels = array(
        'name'              => _x( 'دسته‌بندی‌های مرجع حقوقی', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'دسته‌بندی مرجع حقوقی', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'جست‌وجوی دسته‌بندی‌های مرجع حقوقی', 'textdomain' ),
        'all_items'         => __( 'همه دسته‌بندی‌های مرجع حقوقی', 'textdomain' ),
        'parent_item'       => __( 'دسته‌بندی‌ مرجع حقوقی مادر', 'textdomain' ),
        'parent_item_colon' => __( 'دسته‌بندی‌ مرجع حقوقی مادر', 'textdomain' ),
        'edit_item'         => __( 'ویرایش دسته‌بندی مرجع حقوقی', 'textdomain' ),
        'update_item'       => __( 'به‌روزرسانی دسته‌بندی مرجع حقوقی', 'textdomain' ),
        'add_new_item'      => __( 'افزودن دسته‌بندی مرجع حقوقی جدید', 'textdomain' ),
        'new_item_name'     => __( 'نام دسته‌بندی مرجع حقوقی جدید', 'textdomain' ),
        'menu_name'         => __( 'دسته‌بندی مرجع حقوقی', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rewrite'           => array( 'slug' => 'source-cat' ),
    );
 
    register_taxonomy( 'source-cat', array('source'), $args );
 
    unset( $args );
    unset( $labels );
 
    //Tag
    $labels = array(
        'name'                       => _x( 'برچسب‌های مرجع حقوقی', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'برچسب مرجع حقوقی', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'جست‌وجوی برچسب‌های مرجع حقوقی', 'textdomain' ),
        'popular_items'              => __( 'برچسب‌های مرجع حقوقی محبوب', 'textdomain' ),
        'all_items'                  => __( 'همه برچسب‌ها', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'ویرایش برچسب مرجع حقوقی', 'textdomain' ),
        'update_item'                => __( 'به‌روزرسانی برچسب مرجع حقوقی', 'textdomain' ),
        'add_new_item'               => __( 'افزودن برچسب مرجع حقوقی جدید', 'textdomain' ),
        'new_item_name'              => __( 'نام برچسب مرجع حقوقی جدید', 'textdomain' ),
        'separate_items_with_commas' => __( 'برچسب‌های مرجع حقوقی را با کاما جدا کنید', 'textdomain' ),
        'add_or_remove_items'        => __( 'افزودن یا حذف برچسب مرجع حقوقی', 'textdomain' ),
        'choose_from_most_used'      => __( 'انتخاب از برچسب‌های مرجع حقوقی پر استفاده', 'textdomain' ),
        'not_found'                  => __( 'برچسب مرجع حقوقی یافت نشد', 'textdomain' ),
        'menu_name'                  => __( 'برچسب‌های مرجع حقوقی', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'show_in_rest' => true,
        'rewrite'               => array( 'slug' => 'source-tag' ),
    );
 
    register_taxonomy( 'source-tag', array( 'source'), $args );
}
add_action( 'init', 'custom_create_source_taxonomies', 0 );

