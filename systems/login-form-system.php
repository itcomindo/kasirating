<?php

/**
 * Login Form System
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_display_login_form()
{
    $args = array(
        'echo'           => true,
        'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], // Redirect kembali ke halaman saat ini
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
