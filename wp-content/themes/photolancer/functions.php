<?php
if (!defined('PHOTOLANCER_VERSION')) {
    // Replace the version number of the theme on each release.
    define('PHOTOLANCER_VERSION', wp_get_theme()->get('Version'));
}
define('PHOTOLANCER_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('PHOTOLANCER_DIR', trailingslashit(get_template_directory()));
define('PHOTOLANCER_URL', trailingslashit(get_template_directory_uri()));

if (!function_exists('photolancer_support')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since walker_fse 1.0.0
     *
     * @return void
     */
    function photolancer_support()
    {
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        // Add support for block styles.
        add_theme_support('wp-block-styles');
        add_theme_support('post-thumbnails');
        // Enqueue editor styles.
        add_editor_style('style.css');
        // Removing default patterns.
        remove_theme_support('core-block-patterns');
    }

endif;
add_action('after_setup_theme', 'photolancer_support');

/*----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (!function_exists('photolancer_styles')) :
    function photolancer_styles()
    {
        // registering style for theme
        wp_enqueue_style('photolancer-style', get_stylesheet_uri(), array(), PHOTOLANCER_VERSION);
        wp_enqueue_style('photolancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
        wp_enqueue_style('photolancer-aos-style', get_template_directory_uri() . '/assets/css/aos.css');
        if (is_rtl()) {
            wp_enqueue_style('photolancer-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css');
        }
        wp_enqueue_script('jquery');
        wp_enqueue_script('photolancer-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), PHOTOLANCER_VERSION, true);
        wp_enqueue_script('photolancer-scripts', get_template_directory_uri() . '/assets/js/photolancer-scripts.js', array(), PHOTOLANCER_VERSION, true);
    }
endif;

add_action('wp_enqueue_scripts', 'photolancer_styles');

/**
 * Enqueue scripts for admin area
 */
function photolancer_admin_style()
{
    $hello_notice_current_screen = get_current_screen();
    if (!empty($_GET['page']) && 'about-photolancer' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard') {
        wp_enqueue_style('photolancer-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', array(), PHOTOLANCER_VERSION, 'all');
        wp_enqueue_script('photolancer-admin-scripts', get_template_directory_uri() . '/assets/js/photolancer-admin-scripts.js', array(), PHOTOLANCER_VERSION, true);
        wp_localize_script('photolancer-admin-scripts', 'photolancer_admin_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('photolancer_admin_nonce')
        ));
        wp_enqueue_script('photolancer-welcome-notice', get_template_directory_uri() . '/inc/admin/js/photolancer-welcome-notice.js', array('jquery'), PHOTOLANCER_VERSION, true);
        wp_localize_script('photolancer-welcome-notice', 'photolancer_localize', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('photolancer_welcome_nonce'),
            'redirect_url' => admin_url('themes.php?page=_cozy_companions')
        ));
    }
}
add_action('admin_enqueue_scripts', 'photolancer_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function photolancer_block_assets()
{
    wp_enqueue_style('photolancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
}
add_action('enqueue_block_assets', 'photolancer_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (!function_exists('photolancer_excerpt_more_postfix')) {
    function photolancer_excerpt_more_postfix($more)
    {
        if (is_admin()) {
            return $more;
        }
        return '...';
    }
    add_filter('excerpt_more', 'photolancer_excerpt_more_postfix');
}
function photolancer_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'photolancer_add_woocommerce_support');
