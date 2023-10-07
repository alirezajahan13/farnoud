<?php
/***********************************************************************************************************************/
/**************************************** Registering Custom Post Type *************************************************/
/***********************************************************************************************************************/
function custom_post_type_question() {
 // Labels
     $labels = array(
         'name'                => _x( 'پرسش‌ها', 'Post Type General Name', 'twentythirteen' ),
         'singular_name'       => _x( 'پرسش', 'Post Type Singular Name', 'twentythirteen' ),
         'menu_name'           => __( 'پرسش‌ها', 'twentythirteen' ),
         'parent_item_colon'   => __( 'پرسش مادر', 'twentythirteen' ),
         'all_items'           => __( 'همه پرسش‌ها', 'twentythirteen' ),
         'view_item'           => __( 'مشاهده پرسش', 'twentythirteen' ),
         'add_new_item'        => __( 'افزودن پرسش جدید', 'twentythirteen' ),
         'add_new'             => __( 'افزودن', 'twentythirteen' ),
         'edit_item'           => __( 'ویرایش پرسش', 'twentythirteen' ),
         'update_item'         => __( 'بروزرسانی پرسش', 'twentythirteen' ),
         'search_items'        => __( 'جست‌وجوی پرسش‌ها', 'twentythirteen' ),
         'not_found'           => __( 'پیدا نشد', 'twentythirteen' ),
         'not_found_in_trash'  => __( 'در زباله دان پیدا نشد', 'twentythirteen' ),
     );
 //Options
     $args = array(
         'label'               => __( 'پرسش‌ها', 'twentythirteen' ),
         'description'         => __( 'پرسش‌ها دادصا', 'twentythirteen' ),
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
         'taxonomies'          => array( 'question-cat' , 'question-tag' ),
     );
      
     // Registering Custom Post Type
     register_post_type( 'question', $args );
  
 }
 add_action( 'init', 'custom_post_type_question', 0 );


/***********************************************************************************************************************/
/*************************************** Registering Category and Tag Taxonomy *****************************************/
/***********************************************************************************************************************/
function custom_create_question_taxonomies() {
    //Category
    $labels = array(
        'name'              => _x( 'دسته‌بندی‌های پرسش', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'دسته‌بندی پرسش', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'جست‌وجوی دسته‌بندی‌های پرسش', 'textdomain' ),
        'all_items'         => __( 'همه دسته‌بندی‌های پرسش', 'textdomain' ),
        'parent_item'       => __( 'دسته‌بندی‌ پرسش مادر', 'textdomain' ),
        'parent_item_colon' => __( 'دسته‌بندی‌ پرسش مادر', 'textdomain' ),
        'edit_item'         => __( 'ویرایش دسته‌بندی پرسش', 'textdomain' ),
        'update_item'       => __( 'به‌روزرسانی دسته‌بندی پرسش', 'textdomain' ),
        'add_new_item'      => __( 'افزودن دسته‌بندی پرسش جدید', 'textdomain' ),
        'new_item_name'     => __( 'نام دسته‌بندی پرسش جدید', 'textdomain' ),
        'menu_name'         => __( 'دسته‌بندی پرسش', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rewrite'           => array( 'slug' => 'question-cat' ),
    );
 
    register_taxonomy( 'question-cat', array('question'), $args );
 
    unset( $args );
    unset( $labels );
 
    //Tag
    $labels = array(
        'name'                       => _x( 'برچسب‌های پرسش', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'برچسب پرسش', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'جست‌وجوی برچسب‌های پرسش', 'textdomain' ),
        'popular_items'              => __( 'برچسب‌های پرسش محبوب', 'textdomain' ),
        'all_items'                  => __( 'همه برچسب‌ها', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'ویرایش برچسب پرسش', 'textdomain' ),
        'update_item'                => __( 'به‌روزرسانی برچسب پرسش', 'textdomain' ),
        'add_new_item'               => __( 'افزودن برچسب پرسش جدید', 'textdomain' ),
        'new_item_name'              => __( 'نام برچسب پرسش جدید', 'textdomain' ),
        'separate_items_with_commas' => __( 'برچسب‌های پرسش را با کاما جدا کنید', 'textdomain' ),
        'add_or_remove_items'        => __( 'افزودن یا حذف برچسب پرسش', 'textdomain' ),
        'choose_from_most_used'      => __( 'انتخاب از برچسب‌های پرسش پر استفاده', 'textdomain' ),
        'not_found'                  => __( 'برچسب پرسش یافت نشد', 'textdomain' ),
        'menu_name'                  => __( 'برچسب‌های پرسش', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'show_in_rest' => true,
        'rewrite'               => array( 'slug' => 'question-tag' ),
    );
 
    register_taxonomy( 'question-tag', array( 'question'), $args );
}
add_action( 'init', 'custom_create_question_taxonomies', 0 );

