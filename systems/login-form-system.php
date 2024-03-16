<?php

/**
 * Login Form System
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_display_login_form()
{
    if (isset($_COOKIE['mm_last_visited'])) {
        $redirect_url = $_COOKIE['mm_last_visited'];
    } else {
        // Jika tidak ada cookie, gunakan URL halaman saat ini
        $redirect_url = (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

    $args = array(
        'echo'           => true,
        'redirect'       => $redirect_url, // Gunakan URL dari cookie sebagai redirect URL
        'form_id'        => 'loginform',
        'label_username' => __('Username'),
        'label_password' => __('Password'),
        'label_remember' => __('Remember Me'),
        'label_log_in'   => __('Log In'),
        'id_username'    => 'user_login',
        'id_password'    => 'user_pass',
        'id_remember'    => 'rememberme',
        'id_submit'      => 'wp-submit',
        'remember'       => true,
        'value_username' => NULL,
        'value_remember' => false,
    );

    wp_login_form($args);
}






// function mm_display_login_form()
// {
//     $args = array(
//         'echo'           => true,
//         'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], // Redirect kembali ke halaman saat ini
//         'form_id'        => 'loginform',
//         'label_username' => __('Username'),
//         'label_password' => __('Password'),
//         'label_remember' => __('Remember Me'),
//         'label_log_in'   => __('Log In'),
//         'id_username'    => 'user_login',
//         'id_password'    => 'user_pass',
//         'id_remember'    => 'rememberme',
//         'id_submit'      => 'wp-submit',
//         'remember'       => true,
//         'value_username' => NULL,
//         'value_remember' => false,
//     );

//     wp_login_form($args);
// }
