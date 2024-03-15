<?php

/**
 * Login Logout System
 */

defined('ABSPATH') or die('No script kiddies please!');




function mm_user_is_logged_in()
{
    //if user is logged in make return true
    if (is_user_logged_in()) {
        return true;
    } else {
        return false;
    }
}


function mm_get_login_button()
{
    if (!mm_user_is_logged_in()) {
        $button = '<a href="/login/" class="tb-login-btn">Login</a>';
        return $button;
    }
}

function mm_logout_button()
{
    if (is_user_logged_in()) { // Menggunakan fungsi bawaan WordPress untuk memeriksa login
        $logout_url = wp_logout_url(get_home_url()); // Mendapatkan URL logout yang aman dan mengarahkan kembali ke homepage setelah logout
        $button = '<a href="' . esc_url($logout_url) . '" class="tb-logout-btn">Logout</a>'; // Membuat tombol logout
        return $button;
    }
    return ''; // Mengembalikan string kosong jika pengguna belum login
}

function mm_get_register_button()
{
    if (!mm_user_is_logged_in()) {
        $button = '<a href="/register/" class="tb-register-btn">Register</a>';
        return $button;
    }
}
