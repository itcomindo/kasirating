<?php

/**
 * Registration System
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_user_register()
{
    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        if (!empty($_POST['action']) && $_POST['action'] == 'mm_user_registration') {
            $user_login = $_POST['email']; // Menggunakan email sebagai username
            $user_email = $_POST['email'];
            $user_pass  = $_POST['password'];
            $pass_confirm = $_POST['confirm-password'];

            // Validasi sederhana
            if ($user_pass == $pass_confirm) {
                $userdata = array(
                    'user_login' => $user_login,
                    'user_email' => $user_email,
                    'user_pass'  => $user_pass,
                );

                $user_id = wp_insert_user($userdata);

                // Setelah berhasil, redirect ke halaman login atau lainnya
                if (!is_wp_error($user_id)) {
                    wp_redirect(home_url('/login')); // Sesuaikan dengan URL tujuan
                    exit;
                }
            }
        }
    }
}
add_action('init', 'mm_user_register');



/**
 *  Registration as Contributor
 */

function mm_user_register_contributor()
{
    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        if (!empty($_POST['action']) && $_POST['action'] == 'mm_user_registration_contributor') {
            $user_login = $_POST['email']; // Menggunakan email sebagai username
            $user_email = $_POST['email'];
            $user_pass  = $_POST['password'];
            $pass_confirm = $_POST['confirm-password'];

            // Validasi sederhana
            if ($user_pass == $pass_confirm) {
                $userdata = array(
                    'user_login' => $user_login,
                    'user_email' => $user_email,
                    'user_pass'  => $user_pass,
                    'role'       => 'contributor' // Menetapkan peran sebagai contributor
                );

                $user_id = wp_insert_user($userdata);

                // Setelah berhasil, redirect ke halaman login atau lainnya
                if (!is_wp_error($user_id)) {
                    wp_redirect(home_url('/login')); // Sesuaikan dengan URL tujuan
                    exit;
                }
            }
        }
    }
}
add_action('init', 'mm_user_register_contributor');


function mm_redirect_after_login()
{
    $redirect_to = home_url(); // Ganti dengan URL tujuan setelah login
    return $redirect_to;
}
add_filter('login_redirect', 'mm_redirect_after_login', 10, 3);
