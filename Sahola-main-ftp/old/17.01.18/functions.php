<?php
/**
 * butiko functions and definitions
 *
 * @package butiko
 */


define('BUTIKO_GOOGLE_FONT_KEY', 'your_keys');
define('BUTIKO_THEME_NAME', 'butiko');
define('BUTIKO_TEMPLATE_PATH', get_template_directory());
define('BUTIKO_INC_DIRECTORY', get_template_directory_uri(). "/inc");
define('BUTIKO_FRAMEWORK_DIRECTORY', get_template_directory_uri(). "/inc/reduxFramework");

function my_wp_default_styles($styles)
{
	//use release date for version
	$styles->default_version = "1.53";//"20170831";
}
add_action("wp_default_styles", "my_wp_default_styles");


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 850; /* pixels */
}

if ( ! function_exists( 'butiko_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function butiko_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on butiko, use a find and replace
	 * to change 'butiko' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'butiko', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'butiko' ),
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'secondary' => __( 'Secondary Menu', 'butiko' ),
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'mobile' => __( 'Mobile Menu', 'butiko' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'gallery', 'video', 'audio', 'quote'
		) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'butiko_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // butiko_setup
add_action( 'after_setup_theme', 'butiko_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function butiko_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'butiko' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="normal">',
		'after_title'   => '</span></h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'butiko' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="normal">',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'butiko' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="normal">',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'butiko' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="normal">',
		'after_title'   => '</span></h3>',
		) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'butiko' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="normal">',
		'after_title'   => '</span></h3>',
		) );
	
	//catalog widget area
	register_sidebar( array(
		'name'          => __( 'Shop Sidebar', 'butiko' ),
		'id'            => 'catalog-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span class="normal">',
		'after_title'   => '</span></h3>',
	) );

}
add_action( 'widgets_init', 'butiko_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function butiko_scripts() {
	// wp_enqueue_style( 'foundation-style', get_template_directory_uri() . '/css/foundation.css' );
	// wp_enqueue_style( 'normalize-style', get_template_directory_uri() . '/css/normalize.css' );
	// wp_enqueue_style( 'flaticon-style', get_template_directory_uri() . '/css/flaticon.css' );
	// wp_enqueue_style( 'owl-style', get_template_directory_uri() . '/css/owl.carousel.css' );
	// wp_enqueue_style( 'nanoslider-style', get_template_directory_uri() . '/css/nanoslider.css' );
	// wp_enqueue_style( 'flex-skin', get_template_directory_uri() . '/css/flexslider.css');
	// wp_enqueue_style( 'featured-vertical-style', get_template_directory_uri() . '/css/vertical-slider.css' );
	// wp_enqueue_style( 'line-style', get_template_directory_uri() . '/css/line.css' );
	// wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'together-style', get_template_directory_uri() . '/css/main.min.css' );
	wp_enqueue_style( 'butiko-style', get_stylesheet_uri() );
	
	
	wp_enqueue_script( 'jquery-mousewheel-3-0-6-pack', get_template_directory_uri() . '/js/jquery.mousewheel-3.0.6.pack.js', array('jquery'), '20141206', true );
	
	//wp_enqueue_script( 'jquery-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '20141206', true );
	//wp_enqueue_script( 'jquery-1-9-0-min', get_template_directory_uri() . '/js/jquery-1.9.0.min.js', array('jquery'), '20141206', true );
	
	// wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_enqueue_script( 'jquery-fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.js', array('jquery'), '20141206', true );
	//wp_enqueue_script( 'cssParser-js', get_template_directory_uri() . '/js/cssParser.js', array(), '20141206', true );
	//wp_enqueue_script( 'css-filters-polyfill-js', get_template_directory_uri() . '/js/css-filters-polyfill.js', array(), '20141206', true );
	
	wp_enqueue_script( 'modalEffects-js', get_template_directory_uri() . '/js/modalEffects.js', array(), '20141206', true );
	wp_enqueue_script( 'classie-js', get_template_directory_uri() . '/js/helpers/classie.js', array(), '20141206', true );
	
	// wp_enqueue_style( 'jquery-fancybox-buttons-css', get_template_directory_uri() . '/css/jquery.fancybox-buttons.css' );
	wp_enqueue_script( 'jquery-fancybox-buttons-js', get_template_directory_uri() . '/js/helpers/jquery.fancybox-buttons.js', array('jquery'), '20141206', true );
	
	// wp_enqueue_style(  'jquery-fancybox-thumbs-css', get_template_directory_uri() . '/css/jquery.fancybox-thumbs.css' );
	wp_enqueue_script( 'jquery-fancybox-thumbs-js', get_template_directory_uri() . '/js/helpers/jquery.fancybox-thumbs.js', array('jquery'), '20141206', true );
	
	//wp_enqueue_script( 'jquery-fancybox-media-js', get_template_directory_uri() . '/js/helpers/jquery.fancybox-media.js', array('jquery'), '20141206', true );
	
	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '20141206', true );
	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.js', array('jquery'), '20141206', true );
	wp_enqueue_script( 'hoverintent-js', get_template_directory_uri() . '/js/hoverIntent.js', array(), '20141206', true );
	
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.10.1', true);
	wp_enqueue_script( 'nanoscroller-js', get_template_directory_uri() . '/js/jquery.nanoscroller.min.js', array(), '20141206', true );
	wp_enqueue_script( 'flex-slider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '20141206', true );
	wp_enqueue_script( 'stellar-js', get_template_directory_uri() . '/js/jquery.stellar.js', array('jquery'), '20141206', true );
	wp_enqueue_script( 'featured-vertical-slider', get_template_directory_uri() . '/js/vertical-slider.js', array(), '20141206', true );
	wp_enqueue_script( 'magnific-js', get_template_directory_uri() .'/js/jquery.magnific-popup.js', array("jquery"), true);
    // wp_enqueue_style( 'magnific-skin', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_script( 'line-js', get_template_directory_uri() . '/js/line.js', array("jquery"), true);
	wp_enqueue_script( 'butiko-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array('jquery'), '20141206', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '20160302', true );
	
	if( is_page('shop') ){
		//wp_enqueue_style( 'magnific-skin', get_template_directory_uri() . '/css/magnific-popup.css');
	}

	if( $_SERVER['REQUEST_URI']=='/' ){
		wp_enqueue_style( 'index-css', get_template_directory_uri() . '/css/index.css');
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'butiko_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Showed product in analytics product list
 * @param $cat_name
 */
function analytics_ec_total_product_item($cat_name){
    global $product, $product_category;
    global $analytics_code, $analytics_product_position;
    $product_category = $cat_name;
	if(!isset($analytics_product_position)) $analytics_product_position = 1;
	else $analytics_product_position++;
	$code = "
	ga('ec:addImpression',{
		'id':$product->id,
		'name':\"".htmlspecialchars($product->post->post_title)."\",
		'category':\"".htmlspecialchars($product_category)."\",
		'list':'Category showed',
		'position':$analytics_product_position
	});";

	if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
    $analytics_code = $analytics_code.$code;
}

function analytics_ec_view_details($link){
    global $product, $product_category;
    global $analytics_code, $analytics_product_position;
    $func_name = "onProductClick".$product->id;
    if(!isset($analytics_product_position)) $analytics_product_position = 1;
    else $analytics_product_position++;
    if(strlen($product_category)<=0){
        $product_category = trim(strip_tags($product->get_categories( ', ', ' ' . _n( ' ', '  ', 1, 'woocommerce' ) . ' ', ' ' )));
    }
    $code = "
	// Called when a link to a product is clicked.
	function $func_name() {
	  ga('ec:addProduct', {
		'id':$product->id,
		'name':\"".htmlspecialchars($product->post->post_title)."\",
		'category':\"".htmlspecialchars($product_category)."\",
		'list':'Category showed',
		'position':$analytics_product_position
      });
      ga('ec:setAction', 'click');
      
      // Send click with an event, then send user to product page.
      ga('send', 'event', 'UX', 'click', 'Results', {
        hitCallback: function() {
          document.location = '$link';
        }
      });
    }";

    if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
    $analytics_code = $analytics_code.$code;
    return $func_name;
}

/**
 * @param $link
 * @return string
 */
function analytics_ec_add_to_card(){
    global $product, $analytics_product_position, $analytics_code2, $product_category;
    $position = $analytics_product_position;
    $func_name = "onAddToCartClick".$product->id;
    if(strlen($product_category)<=0){
        $product_category = trim(strip_tags($product->get_categories( ', ', ' ' . _n( ' ', '  ', 1, 'woocommerce' ) . ' ', ' ' )));
    }
    $code = "
    // Called when a product is added to a shopping cart.
    function $func_name(qty, variation_id){
      var variation_id = variation_id || null;
      var price = '".$product->get_price()."';
      if(variation_id!=null){
        jQuery('.variations_form').data('product_variations').forEach(function(variation, i, arr){
            if( variation.variation_id==variation_id ) price = variation.display_price;
        });
        console.log(variation_id, price);
      }
      ga('ec:addProduct', {
        'id': $product->id,
        'name': \"".htmlspecialchars($product->post->post_title)."\",
        'category': \"".htmlspecialchars($product_category)."\",
        'price': price,
        'variant': variation_id,
        'quantity': qty
      });
      ga('ec:setAction', 'add');
      ga('send', 'event', 'UX', 'click', 'add to cart', {
        hitCallback: function() {
          //document.location.reload();
        }
      });     // Send data using an event.
      jQuery('.modal-shop__text.lbl').html(\"".htmlspecialchars($product->post->post_title)."\");
      openModalShop();
    }";

    if(!isset($analytics_code2)) $analytics_code2 = "";
    $analytics_code2 = $analytics_code2.$code;
    return $func_name;
}

/**
 * @param $link
 * @return string
 */
function analytics_ec_remove_from_card($product, $key){
	global $analytics_product_position, $analytics_code2, $product_category;
	$position = $analytics_product_position;
	$func_name = "removeFromCart".$key;
	$code = "
    // Called when a product is added to a shopping cart.
    function $func_name(){
      var price = '".$product->get_price()."';
      ga('ec:addProduct', {
        'id': $product->id,
        'name': \"".htmlspecialchars($product->post->post_title)."\",
        'category': \"".htmlspecialchars($product_category)."\",
        'price': price
      });
      ga('ec:setAction', 'remove');
      ga('send', 'event', 'UX', 'click', 'remove from cart', {
        hitCallback: function() {
          //document.location.reload();
        }
      });     // Send data using an event.
    }";

	if(!isset($analytics_code2)) $analytics_code2 = "";
	$analytics_code2 = $analytics_code2.$code;
	return $func_name;
}

/**
 * Showed product in analytics product list
 */
function analytics_ec_product_item(){
    global $analytics_breadcrumb_category;  //from breadcrumb
    global $product, $product_category;
    $product_category = $analytics_breadcrumb_category;
    global $analytics_code, $analytics_product_position;
    if(!isset($analytics_product_position)) $analytics_product_position = 1;
    else $analytics_product_position++;
    $code = "
	ga('ec:addProduct',{
		'id':$product->id,
		'name':\"".htmlspecialchars($product->post->post_title)."\",
		'category':\"".htmlspecialchars($product_category)."\",
	});
	ga('ec:setAction', 'detail');";

    if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
    $analytics_code = $analytics_code.$code;
}

/**
 * checkout cart
 */
function analytics_ec_cart(){
	global $analytics_breadcrumb_category;  //from breadcrumb
	global $product, $product_category;
	$product_category = $analytics_breadcrumb_category;
	global $analytics_code, $analytics_product_position;
	if(!isset($analytics_product_position)) $analytics_product_position = 1;
	else $analytics_product_position++;
	$code = "
	ga('ec:addProduct',{
		'id':$product->id,
		'name':\"".htmlspecialchars($product->post->post_title)."\",
		'category':\"".htmlspecialchars($product_category)."\",
	});
	ga('ec:setAction', 'detail');";

	if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
	$analytics_code = $analytics_code.$code;
}

/**
 * Showed product in analytics product list
 * @param $product
 */
function analytics_ec_promo_item($product){
    global $analytics_breadcrumb_category;  //from breadcrumb
    global $analytics_code, $analytics_product_position_banner;
    if(!isset($analytics_product_position_banner)) $analytics_product_position_banner = 1;
    else $analytics_product_position_banner++;
    $code = "
	ga('ec:addProduct',{
		'id':".$product->post->ID.",
		'name':\"".htmlspecialchars($product->post->post_title)."\",
		'creative':'bottom banner',
		'position':'banner_slot".$analytics_product_position_banner."'
	});
	";

    if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
    $analytics_code = $analytics_code.$code;
}

/**
 * Click product in analytics product list
 * @param $product
 * @return string
 */
function analytics_ec_promo_item_click($product){
    global $analytics_breadcrumb_category;  //from breadcrumb
    global $analytics_code, $analytics_product_position_banner;
    if(!isset($analytics_product_position_banner)) $analytics_product_position_banner = 1;
    $func_name = "promoClick".$product->post->ID;
    $code = "
	function $func_name() {
	  ga('ec:addPromo', {
        'id': ".$product->post->ID.",
        'name': \"".htmlspecialchars($product->post->post_title)."\",
        'creative': 'bottom banner',
        'position': 'banner_slot".$analytics_product_position_banner."'
      });
      // Send the promo_click action with an event.
      ga('ec:setAction', 'promo_click');
      ga('send', 'event', 'Internal Promotions', 'click', 'Summer Sale');
    }";

    if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
    $analytics_code = $analytics_code.$code;
    return $func_name;
}

/**
 * Click product in analytics product list
 * @param $product
 * @return string
 */
function analytics_ec_order_checkout($order_id, $product, $qty, $total){
    global $analytics_breadcrumb_category;  //from breadcrumb
    global $analytics_code, $analytics_code2;
    $code = "
	  ga('ec:addProduct', {
        'id': ".$product->post->ID.",
        'name': \"".htmlspecialchars($product->post->post_title)."\",
        'price': \"".str_replace('&#36;', '', strip_tags($total))."\",
        'quantity': '".$qty."',
      });
      function onClickCheckout(){
        var spans = jQuery('.order_details > tfoot > tr > td > span.amount');
        var tax = spans.length>3 ? 3 : 2, shipping = spans.length>3 ? 2 : 1;
        ga('ec:setAction', 'purchase', {
            'id': $order_id,
            'tax': jQuery(spans[tax]).html(),
            'shipping': jQuery(spans[shipping]).html()
        });
        ga('send', 'pageview');
      }
      ";

    if(!isset($analytics_code)) $analytics_code = "ga('require','ec')";
    $analytics_code = $analytics_code.$code;
}