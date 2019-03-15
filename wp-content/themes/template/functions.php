<?php
/**
@ Khai bao hang gia tri
	@ THEME_URL = lay duong dan thu muc theme
	@ CORE = lay duong dan cua thu muc /core
**/
define( 'THEME_URL', get_stylesheet_directory() );
define ( 'CORE', THEME_URL . "/core" );
/**
@ Nhung file /core/init.php
**/
require_once( CORE . "/init.php" );

/**
@ Thiet lap chieu rong noi dung
**/
if ( !isset($content_width) ) {
	$content_width = 620;
}

/**
@ Khai bao chuc nang cua theme
**/
if ( !function_exists('wp_theme_setup') ) {
	function wp_theme_setup() {

		/* Thiet lap textdomain */
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain( 'wp', $language_folder );
		/* Tu dong them link RSS len <head> **/
		add_theme_support( 'automatic-feed-links' );

		/* Them post thumbnail */
		add_theme_support( 'post-thumbnails' );

		/* Post Format */
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		) );

		/* Them title-tag */
		add_theme_support( 'title-tag' );

		/* Them custom background */
		$default_background = array(
			'default-color' => '#e8e8e8'
		);
		add_theme_support( 'custom-background', $default_background );

		/* Them menu */
		register_nav_menu( 'primary-menu', __('Primary Menu', 'wp') );
		register_nav_menu( 'about-menu', __('About Menu', 'wp') );
		register_nav_menu( 'footer-menu', __('Footer Menu', 'wp') );

		/* Tao sidebar */
		$sidebar = array(
			'name' => __('Main Sidebar', 'wp'),
			'id' => 'main-sidebar',
			'description' => __('Default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettitle">',
			'after_title' => '</h3>'
		);
		register_sidebar( $sidebar );

	}
	add_action( 'init', 'wp_theme_setup' );
}


/*--------
TEMPLATE FUNCTIONS */
if (!function_exists('wp_header')) {
	function wp_header() { ?>
		<div class="site-name">
			<?php
				global $tp_options;

				if( $tp_options['logo-on'] == 0 ) :
			?>
				<?php
					if ( is_home() ) {
						printf( '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						get_bloginfo('sitename') );
					} else {
						printf( '<p><a href="%1$s" title="%2$s">%3$s</a></p>',
						get_bloginfo('url'),
						get_bloginfo('description'),
						get_bloginfo('sitename') );
					}
				?>

			<?php
				else :
			?>
				<img src="<?php echo $tp_options['logo-image']['url']; ?>" />
		<?php endif; ?>
		</div>
		<div class="site-description"><?php bloginfo('description'); ?></div><?php
	}
}

/**
Thiet lap menu
**/
if ( !function_exists('wp_menu') ) {
	function wp_menu($menu) {
		$menu = array(
			'theme_location' => $menu,
			'container' => 'nav',
			'container_class' => $menu,
			'items_wrap' => '<ul id="%1$s" class="%2$s nav-menu nav navbar-nav">%3$s</ul>'
		);
		wp_nav_menu( $menu );
	}
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/**
Thiet lap menu footer
**/
if ( !function_exists('wp_menu_footer') ) {
	function wp_menu_footer($menu) {
		$menu = array(
			'theme_location' => $menu,
			'container' => 'nav',
			'container_class' => $menu,
			'items_wrap' => '<ul id="%1$s" class="%2$s footer-links">%3$s</ul>'
		);
		wp_nav_menu( $menu );
	}
}

add_filter('nav_menu_footer_css_class' , 'special_nav_footer_class' , 10 , 2);

function special_nav_footer_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

/**
Ham tao phan trang don gian
**/
if ( !function_exists('wp_pagination') ) {
	function wp_pagination() {
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return '';
		} ?>
		<nav class="pagination" role="navigation">
			<?php if ( get_next_posts_link() ) : ?>
				<div class="prev"><?php next_posts_link( __('Older Posts', 'wp') ); ?></div>
			<?php endif; ?>
			<?php if ( get_previous_posts_link() ) : ?>
				<div class="next"><?php previous_posts_link( __('Newest Posts', 'wp') ); ?></div>
			<?php endif; ?>
		</nav>
	<?php }
}

/**
Ham hien thi thumbnail
**/
if ( !function_exists('wp_thumbnail') ) {
	function wp_thumbnail($size) {
		if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
		<figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure>
	<?php endif; ?>
	<?php }
}

/**
wp_entry_header = hien thi tieu de post
**/
if ( !function_exists('wp_entry_header') ) {
	function wp_entry_header() { ?>
		<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
		<?php else : ?>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php endif; ?>
	<?php }
}

/**
wp_entry_meta = lay du lieu post
**/
if ( !function_exists('wp_entry_meta') ) {
	function wp_entry_meta() { ?>
		<?php if ( !is_page() ) : ?>
			<div class="entry-meta">
			<?php
				printf( __('<span class="author">Posted by %1$s', 'wp'),
				get_the_author() );

				printf( __('<span class="date-published"> at %1$s', 'wp'),
				get_the_date() );

				printf( __('<span class="category"> in %1$s ', 'wp'),
				get_the_category_list( ',' ) );

				if ( comments_open() ) :
					echo '<span class="meta-reply">';
						comments_popup_link(
							__('Leave a comment', 'wp'),
							__('One comment', 'wp'),
							__('% comments', 'wp'),
							__('Read all comments', 'wp')
							);
					echo '</span>';
				endif;
			?>
			</div>
		<?php endif; ?>
	<?php }
}

/**
wp_entry_content = ham hien thi noi dung cua post/page
**/
if ( !function_exists('wp_entry_content') ) {
	function wp_entry_content() {
		if( !is_single() && !is_page() ) {
			the_excerpt();
		} else {
			the_content();

			/* Phan trang trong single */
			$link_pages = array(
				'before' => __('<p>Page: ', 'wp'),
				'after' => '</p>',
				'nextpagelink' => __('Next Page', 'wp'),
				'previouspagelink' => __('Previous Page', 'wp')
			);
			wp_link_pages( $link_pages );
		}
	}
}

function wp_readmore() {
	return '<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">'.__('...[Read More]', 'wp').'</a>';
}
add_filter('excerpt_more', 'wp_readmore');


/**
wp_entry_tag = hien thi tag
**/
if ( !function_exists('wp_entry_tag') ) {
	function wp_entry_tag() {
		if ( has_tag() ) :
			echo '<div class="entry-tag">';
			printf( __('Tagged in %1$s', 'wp'), get_the_tag_list( '', ',' ) );
			echo '</div>';
		endif;
	}
}



/*=====Nhúng file style.css=====*/
function wp_style() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", 'all' );
	wp_enqueue_style('bootstrap');
	wp_register_style( 'awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", 'all' );
	wp_enqueue_style('awesome');
	wp_register_style( 'reset-style', get_template_directory_uri() . "/reset.css", 'all' );
	wp_enqueue_style('reset-style');
	wp_register_style( 'style-template', get_template_directory_uri() . "/assets/css/style.css", 'all' );
	wp_enqueue_style('style-template');
	wp_register_style( 'main-style', get_template_directory_uri() . "/style.css", 'all' );
	wp_enqueue_style('main-style');

	wp_register_script( 'jquery-script', get_template_directory_uri() . "/assets/js/jquery.min.js", array('jquery') );
	wp_enqueue_script('jquery-script');
	wp_register_script( 'bootstrap-script', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array('jquery') );
	wp_enqueue_script('bootstrap-script');
}
add_action('wp_enqueue_scripts', 'wp_style');

// create post project
add_action('init', 'create_post_type');
 
function create_post_type() {
    register_post_type('project', array(
            'labels' => array(
                'name' => __('Project'),
                'singular_name' => __('Project'),
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'book' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
            'supports'           => array( 'title', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
}

// create post info timeline
add_action('init', 'create_post_timeline');
 
function create_post_timeline() {
    register_post_type('timeline', array(
            'labels' => array(
                'name' => __('Timeline'),
                'singular_name' => __('Timeline'),
            ),
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'book' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
}

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

// search post
function Jam_SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','Jam_SearchFilter');

//Code phan trang
function custom_pagination($custom_query = null, $paged = null) {
    global $wp_query;
    if($custom_query) $main_query = $custom_query;
    else $main_query = $wp_query;
    $paged = ($paged) ? $paged : get_query_var('paged');
    $big = 999999999;
    $total = isset($main_query->max_num_pages)?$main_query->max_num_pages:'';
    if($total > 1) echo '<div class="pagenavi pagination">';
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, $paged ),
        'total' => $total,
        'mid_size' => '10', // Số trang hiển thị khi có nhiều trang trước khi hiển thị ...
        'prev_text'    => __('Prev','wp'),
        'next_text'    => __('Next','wp'),
    ) );
    if($total > 1) echo '</div>';
}