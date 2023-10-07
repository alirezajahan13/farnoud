<?php
/***********************************************************************************************************************/
/**************************************** Registering Custom Post Type *************************************************/
/***********************************************************************************************************************/
function custom_post_type_service() {
 // Labels
     $labels = array(
         'name'                => _x( 'خدمات', 'Post Type General Name', 'twentythirteen' ),
         'singular_name'       => _x( 'خدمت', 'Post Type Singular Name', 'twentythirteen' ),
         'menu_name'           => __( 'خدمات', 'twentythirteen' ),
         'parent_item_colon'   => __( 'خدمت مادر', 'twentythirteen' ),
         'all_items'           => __( 'همه خدمات', 'twentythirteen' ),
         'view_item'           => __( 'مشاهده خدمت', 'twentythirteen' ),
         'add_new_item'        => __( 'افزودن خدمت جدید', 'twentythirteen' ),
         'add_new'             => __( 'افزودن', 'twentythirteen' ),
         'edit_item'           => __( 'ویرایش خدمت', 'twentythirteen' ),
         'update_item'         => __( 'بروزرسانی خدمت', 'twentythirteen' ),
         'search_items'        => __( 'جست‌وجوی خدمات', 'twentythirteen' ),
         'not_found'           => __( 'پیدا نشد', 'twentythirteen' ),
         'not_found_in_trash'  => __( 'در زباله دان پیدا نشد', 'twentythirteen' ),
     );
 //Options
     $args = array(
         'label'               => __( 'خدمات', 'twentythirteen' ),
         'description'         => __( 'خدمات دادصا', 'twentythirteen' ),
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
         'capability_type'     => 'post',
         'show_in_rest'        => true,
         //Add taxonomies to CPT
         'taxonomies'          => array( 'service-cat' , 'service-tag' ),
     );
      
     // Registering Custom Post Type
     register_post_type( 'service', $args );
  
 }
 add_action( 'init', 'custom_post_type_service', 0 );


/***********************************************************************************************************************/
/*************************************** Registering Category and Tag Taxonomy *****************************************/
/***********************************************************************************************************************/
function custom_create_service_taxonomies() {
    //Category
    $labels = array(
        'name'              => _x( 'دسته‌بندی‌های خدمت', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'دسته‌بندی خدمت', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'جست‌وجوی دسته‌بندی‌های خدمت', 'textdomain' ),
        'all_items'         => __( 'همه دسته‌بندی‌های خدمت', 'textdomain' ),
        'parent_item'       => __( 'دسته‌بندی‌ خدمت مادر', 'textdomain' ),
        'parent_item_colon' => __( 'دسته‌بندی‌ خدمت مادر', 'textdomain' ),
        'edit_item'         => __( 'ویرایش دسته‌بندی خدمت', 'textdomain' ),
        'update_item'       => __( 'به‌روزرسانی دسته‌بندی خدمت', 'textdomain' ),
        'add_new_item'      => __( 'افزودن دسته‌بندی خدمت جدید', 'textdomain' ),
        'new_item_name'     => __( 'نام دسته‌بندی خدمت جدید', 'textdomain' ),
        'menu_name'         => __( 'دسته‌بندی خدمت', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest' => true,
        'rewrite'           => array( 'slug' => 'service-cat' ),
    );
 
    register_taxonomy( 'service-cat', array('service'), $args );
 
    unset( $args );
    unset( $labels );
 
    //Tag
    $labels = array(
        'name'                       => _x( 'برچسب‌های خدمت', 'taxonomy general name', 'textdomain' ),
        'singular_name'              => _x( 'برچسب خدمت', 'taxonomy singular name', 'textdomain' ),
        'search_items'               => __( 'جست‌وجوی برچسب‌های خدمت', 'textdomain' ),
        'popular_items'              => __( 'برچسب‌های خدمت محبوب', 'textdomain' ),
        'all_items'                  => __( 'همه برچسب‌ها', 'textdomain' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'ویرایش برچسب خدمت', 'textdomain' ),
        'update_item'                => __( 'به‌روزرسانی برچسب خدمت', 'textdomain' ),
        'add_new_item'               => __( 'افزودن برچسب خدمت جدید', 'textdomain' ),
        'new_item_name'              => __( 'نام برچسب خدمت جدید', 'textdomain' ),
        'separate_items_with_commas' => __( 'برچسب‌های خدمت را با کاما جدا کنید', 'textdomain' ),
        'add_or_remove_items'        => __( 'افزودن یا حذف برچسب خدمت', 'textdomain' ),
        'choose_from_most_used'      => __( 'انتخاب از برچسب‌های خدمت پر استفاده', 'textdomain' ),
        'not_found'                  => __( 'برچسب خدمت یافت نشد', 'textdomain' ),
        'menu_name'                  => __( 'برچسب‌های خدمت', 'textdomain' ),
    );
 
    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'show_in_rest' => true,
        'rewrite'               => array( 'slug' => 'service-tag' ),
    );
 
    register_taxonomy( 'service-tag', array( 'service'), $args );
}
add_action( 'init', 'custom_create_service_taxonomies', 0 );


// function service_comments_default( $data ) {
//     if( $data['post_type'] == 'service' ) {
//         $data['comment_status'] = 'open';
//     }

//     return $data;
// }
// add_filter( 'wp_insert_post_data', 'default_comments_on' );

// function service_comments_default( $data ) {
//     if( $data['post_type'] == 'service' ) {
//         $data['comment_status'] = 1;
//     }

//     return $data;
// }
// add_filter( 'wp_insert_post_data', 'service_comments_default' );