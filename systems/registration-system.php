<?php

/**
 * Registration System
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_user_register()
{
    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        if (!empty($_POST['action']) && $_POST['action'] == 'mm_user_registration') {
            $user_name = $_POST['name']; // sebagai user first name dan display name
            $user_login = $_POST['email']; // Menggunakan email sebagai username
            $user_email = $_POST['email'];
            $user_pass  = $_POST['password'];
            $pass_confirm = $_POST['confirm-password'];

            // Validasi sederhana
            if ($user_pass == $pass_confirm) {
                $userdata = array(
                    'user_login'    => $user_login,
                    'user_email'    => $user_email,
                    'user_pass'     => $user_pass,
                    'first_name'    => $user_name, // Menambahkan 'first_name'
                    'display_name'  => $user_name, // Menggunakan 'name' untuk 'display_name'
                );

                $user_id = wp_insert_user($userdata);

                // Setelah berhasil, redirect ke halaman login atau lainnya
                if (!is_wp_error($user_id)) {
                    // Mengatur nama tampilan publik pengguna
                    wp_update_user(
                        array(
                            'ID'           => $user_id,
                            'display_name' => $user_name
                        )
                    );

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
            $user_name = $_POST['name']; // Menambahkan variabel untuk nama depan
            $user_login = $_POST['email']; // Menggunakan email sebagai username
            $user_email = $_POST['email'];
            $user_pass  = $_POST['password'];
            $pass_confirm = $_POST['confirm-password'];

            // Validasi sederhana
            if ($user_pass == $pass_confirm) {
                $userdata = array(
                    'user_login'    => $user_login,
                    'user_email'    => $user_email,
                    'user_pass'     => $user_pass,
                    'first_name'    => $user_name, // Menambahkan 'first_name'
                    'display_name'  => $user_name, // Menambahkan 'display_name'
                    'role'          => 'contributor' // Menetapkan peran sebagai contributor
                );

                $user_id = wp_insert_user($userdata);

                // Setelah berhasil, redirect ke halaman login atau lainnya
                if (!is_wp_error($user_id)) {
                    // Mengatur nama tampilan publik pengguna
                    wp_update_user(
                        array(
                            'ID'           => $user_id,
                            'display_name' => $user_name
                        )
                    );

                    wp_redirect(home_url('/login')); // Sesuaikan dengan URL tujuan
                    exit;
                }
            }
        }
    }
}
add_action('init', 'mm_user_register_contributor');
