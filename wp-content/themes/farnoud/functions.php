<?php
/**
 * farnoud functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package farnoud
 */

 define( '_S_VERSION', '1.0.33' );

// if ( ! defined( '_S_VERSION' ) ) {
// 	// Replace the version number of the theme on each release.
// 	define( '_S_VERSION', '1.0.0' );
// }

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function farnoud_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on farnoud, use a find and replace
		* to change 'farnoud' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'farnoud', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'desktop', 'farnoud' ),
			'menu-2' => esc_html__( 'mobile', 'farnoud' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'farnoud_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'farnoud_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function farnoud_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'farnoud_content_width', 640 );
}
add_action( 'after_setup_theme', 'farnoud_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function farnoud_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'farnoud' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'farnoud' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'farnoud_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function farnoud_scripts() {
	wp_enqueue_style( 'farnoud-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'farnoud-style', 'rtl', 'replace' );
	wp_enqueue_style( 'additional-style', get_template_directory_uri() . '/additional.css', array(), _S_VERSION );
	wp_enqueue_style( 'layout-style', get_template_directory_uri() . '/layout.css', array(), _S_VERSION );
	wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/aos/aos.css', array(), _S_VERSION );
	wp_enqueue_script( 'aos-script', get_template_directory_uri() . '/aos/aos.js', array(), _S_VERSION  , true);
	wp_enqueue_script( 'scroll-teble', get_template_directory_uri() . '/js/tabel-scroll.js', array(), _S_VERSION  , true);
	wp_enqueue_script('general-script' , get_template_directory_uri().'/js/general.js' , array('jquery') , _S_VERSION ,true);
	if(is_front_page() || is_page('72')){
		wp_enqueue_script('home-script' , get_template_directory_uri().'/js/home.js' , array('jquery') , _S_VERSION ,true);
	}
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'farnoud-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'farnoud_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

require_once('services.php');
require_once('question.php');
require_once('sample.php');
require_once('source.php');

function prefix_category_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

function my_excerpt_length($length){
	return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

function farnoud_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
} 
add_filter( 'comment_form_fields', 'farnoud_move_comment_field_to_bottom');
function farnoud_remove_comment_url($arg) {
	$arg['url'] = '';
	return $arg;
}
add_filter('comment_form_default_fields', 'farnoud_remove_comment_url');

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width'    => 1080,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function farnoud_comment($comment, $args, $depth) {
	$commentIsVerified = get_field('question_comment_mb_is_verified',$comment);
	$commentShowAlt = get_field('question_comment_mb_show_alt_name',$comment);
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
	<div class="questionAuthor">
		<div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>
		<div class="questionAuthorMeta">
			<span><?php
			if($commentShowAlt == 1){
				?>
				<span><?php the_field('question_comment_mb_alt_name',$comment) ?></span>
				<span><?php the_field('question_comment_mb_alt_slogan',$comment) ?></span>
				<?php
			}
			else{
				printf( __( '<cite class="fn">%s</cite> <span class="says">:</span>' ), get_comment_author_link() );
			}
			?></span>
			<span><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                /* translators: 1: date, 2: time */
                printf( 
                    __('%1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a></span>
		</div>
        <div class="comment-meta commentmetadata">
            <?php 
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>
	</div>
        
		<div id="answer-<?php echo get_comment_ID() ?>" <?php echo ($commentIsVerified)?('itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer"'):('itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer"') ?> class="<?php echo ($commentIsVerified)?('siteMessage successMessage verifiedCommentBody'):('questionContent') ?>">
		<p itemprop="text"><?php echo get_comment_text(); ?></p>
		<a itemprop="url" href="<?php echo get_the_permalink().'#answer-'.get_comment_ID() ?>"></a>
		<div class="reply">
			<svg fill="#C39E37" width="15px" height="15px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M16 8c0-5-4.9-5-4.9-5H6V0L0 6l6 6V9h5.2c3.5 0 1.8 7 1.8 7s3-4.1 3-8z"/></svg>
			<?php 
                comment_reply_link( 
                    array_merge( 
                        $args, 
                        array( 
                            'add_below' => $add_below, 
                            'depth'     => $depth, 
                            'max_depth' => $args['max_depth'] 
                        ) 
                    ) 
                ); ?>
        </div>
		</div>

        <?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

function theCustomExcerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);

	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . ' ... ';
	} else {
		$excerpt = implode(" ", $excerpt);
	}

	$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

	return $excerpt;
}

function theCustomExcerptContent($limit) {
  $content = explode(' ', get_the_content(), $limit);

  if (count($content) >= $limit) {
	  array_pop($content);
	  $content = implode(" ", $content) . '...';
  } else {
	  $content = implode(" ", $content);
  }

  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);

  return $content;
}
function pagination_bar() {
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	if ($total_pages > 1){
		// $current_page = max(1, get_query_var('paged'));
		global $wp_query;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		echo paginate_links(array(
			'base' =>@add_query_arg('paged','%#%'),
			'format' => '/page/%#%',
			'current' => $current,
			'total' => $total_pages,
			'next_text' => '<span class="leftArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#3C3C3C" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m20.5 26.5-12-12 12-12"></path></svg></span>',
			'prev_text' => '<span class="rightArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#3C3C3C" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#3C3C3C" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m8.5 2.5 12 12-12 12"></path></svg></span>'
		));
	}
}






function my_mce_before_init_insert_formats( $init_array ) {  

    // Define the style_formats array
    
        $style_formats = array(  
    /*
    * Each array child is a format with it's own settings
    * Notice that each array has title, block, classes, and wrapper arguments
    * Title is the label which will be visible in Formats menu
    * Block defines whether it is a span, div, selector, or inline style
    * Classes allows you to define CSS classes
    * Wrapper whether or not to add a new block-level element around any selected elements
    */
            array(  
                'title' => 'لینک داخلی',  
                'block' => 'div',  
                'classes' => 'innerLinkBtn',
                'wrapper' => true,  
            ),
        );  
        // Insert the array, JSON ENCODED, into 'style_formats'
        $init_array['style_formats'] = json_encode( $style_formats );  
        
        return $init_array;  
      
    } 
    // Attach callback to 'tiny_mce_before_init' 
    add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

