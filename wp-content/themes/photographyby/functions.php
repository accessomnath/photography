<?php
include('walker.php');


add_theme_support('post-thumbnails');
//This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'primary' => __('Primary Menu', 'nolist'),
    'social' => __('Social Links Menu', 'nolist'),
));
//<-------------- custom logo----------------->

add_action('customize_register', 'themeslug_theme_customizer');
function themeslug_theme_customizer($wp_customize)
{
    $wp_customize->add_section('themeslug_logo_section', array(
        'title' => __('Logo', 'themeslug'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));
    $wp_customize->add_setting('themeslug_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
        'label' => __('Logo', 'themeslug'),
        'section' => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    )));
}

//<-------------- custom logo----------------->
/**
 * Register Post Type video
 */
add_action('init', 'codex_video_init');
function codex_video_init()
{
    $labels = array(
        'name' => _x('Videos', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Video', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Video',
        'all_items' => 'All Video',
        'edit_item' => 'Edit Video',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'video'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'custom-fields','thumbnail')
    );
    register_post_type('video', $args);
}


/**
 * Register Post Type photo
 */
add_action('init', 'codex_photo_init');
function codex_photo_init()
{
    $labels = array(
        'name' => _x('Photos', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Photo', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Photo',
        'all_items' => 'All Photo',
        'edit_item' => 'Edit Photo',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'photo'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments')
    );
    register_post_type('photo', $args);
}

/**
 * Register taxonomy Type airport
 */
add_action('init', 'create_airport_taxonomy');
function create_airport_taxonomy()
{
    register_taxonomy(
        'categories',
        'photo',
        array(
            'label' => 'Photo Categories',
            'hierarchical' => true,
        )
    );
}

/**
 * Register Post Type testimonial
 */
add_action('init', 'codex_testimonial_init');
function codex_testimonial_init()
{
    $labels = array(
        'name' => _x('Testimonials', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Testimonial', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Testimonial',
        'all_items' => 'All Testimonial',
        'edit_item' => 'Edit Testimonial',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'testimonial'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail', 'editor', 'custom-fields')
    );
    register_post_type('testimonial', $args);
}

/**
 * Register Post Type slider
 */
add_action('init', 'codex_slider_init');
function codex_slider_init()
{
    $labels = array(
        'name' => _x('Sliders', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Slider', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Slider',
        'all_items' => 'All Slider',
        'edit_item' => 'Edit Slider',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'slider'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail')
    );
    register_post_type('slider', $args);
}

/*add action for member registration.............start..............*/
add_action('wp_ajax_create_user', 'it_create_user');
add_action('wp_ajax_nopriv_create_user', 'it_create_user');
function it_create_user()
{
    global $wpdb;

    // Handle request then generate response using WP_Ajax_Response
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $phone = $_POST['phone1'];
    $password = $_POST['password1'];

    //Add a zero at begining of phone number
    if (email_exists($email)) {
        $save_value = 'email_exists';
    } else if (username_exists($name)) {
        $save_value = 'username_exists';
    } else {
//        $password =  wp_generate_password( 10, true, true );

        $user_id = wp_create_user($name, $password, $email);

//        $user_name=  sanitize_title_with_dashes($name);

        add_user_meta($user_id, 'name', $name);
        add_user_meta($user_id, 'email', $email);
        add_user_meta($user_id, 'phone', $phone);
        add_user_meta($user_id, 'password', $password);


        $save_value = "Registration Successful";
    }
    echo $save_value;
    //echo "success==============".$user_id;
    die;

}

/**
 * Register Post Type gallery
 */
add_action( 'init', 'codex_gallery_init' );
function codex_gallery_init() {
    $labels = array(
        'name'               => _x( 'Gallerys', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Gallery', 'post type singular name', 'your-plugin-textdomain' ),
        'add_new'            => 'Add Gallery',
        'all_items'          => 'All Gallery',
        'edit_item'          =>'Edit Gallery',
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'comments' )
    );
    register_post_type( 'gallery', $args );
}


