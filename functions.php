<?php

/**
 * Functions and definitions
 */

defined('ABSPATH') or die('No script kiddies please!');

/**
 * Add theme Supports
 */

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

//disable gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);


/**
 * get Theme version from the style.css
 */
function mm_get_theme_version()
{
    $theme = wp_get_theme();
    return $theme->get('Version');
}


/**
 * Check if the current environment is development mode or on production
 * development mode is when the server is localhost
 * output: boolean
 */
function mm_is_devmode()
{
    if (isset($_SERVER['REMOTE_ADDR']) && in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'), true)) {
        return true;
    }
    return false;
}



/**
 * Load the Carbon Fields
 * define the container and fields
 */
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}


/**
 * Load the Required Files
 */

//call that require_once function to load
// require_once get_template_directory() . '/options/options.php';
require_once get_template_directory() . '/assets/assets.php';
require_once get_template_directory() . '/systems/systems.php';
require_once get_template_directory() . '/queries/queries.php';
require_once get_template_directory() . '/data/data.php';
require_once get_template_directory() . '/components/components.php';
require_once get_template_directory() . '/assets/images/images.php';
// require_once get_template_directory() . '/inc/inc.php';
// require_once get_template_directory() . '/sections/sections.php';
// require_once get_template_directory() . '/plugins/plugins.php';
// require_once get_template_directory() . '/widgets/widgets.php';
// require_once get_template_directory() . '/sidebars/sidebars.php';
// require_once get_template_directory() . '/fields/fields.php';
// require_once get_template_directory() . '/ads/ads.php';


// experimental 1 start
add_filter('login_redirect', 'mm_custom_login_redirect', 10, 3);
function mm_custom_login_redirect($redirect_to, $requested_redirect_to, $user)
{
    // Hanya lakukan pengalihan kustom jika login berhasil dan bukan error
    if (!is_wp_error($user)) {
        // Periksa apakah login berasal dari halaman khusus login
        if (isset($_COOKIE['mm_last_visited'])) {
            $login_page_url = home_url('/login/'); // Sesuaikan dengan URL halaman login Anda
            $last_visited = $_COOKIE['mm_last_visited'];

            // Jika melakukan login dari halaman /login/, alihkan ke homepage
            if (strpos($last_visited, $login_page_url) !== false) {
                return home_url();
            } else {
                // Jika login dari halaman lain, gunakan URL dari cookie sebagai URL pengalihan
                return $last_visited;
            }
        }
    }

    // Jika tidak ada cookie atau terjadi error, lanjutkan menggunakan URL pengalihan standar
    return $redirect_to;
}





// add_action('init', 'mm_set_last_visited_cookie');
function mm_set_last_visited_cookie()
{
    if (!is_user_logged_in()) {
        $script_name = basename($_SERVER['SCRIPT_FILENAME']);
        if (!in_array($script_name, ['wp-login.php', 'wp-register.php'])) {
            setcookie('mm_last_visited', 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], time() + 3600, COOKIEPATH, COOKIE_DOMAIN, is_ssl());
        }
    }
}


// experimental 1 end


//experimental 2 start

// experimental 2 end

//experimental 3 start
// experimental 3 end
