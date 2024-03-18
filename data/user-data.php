<?php

/**
 * User Data
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_user_data()
{
    global $wp_query;
    // Mendapatkan ID pengguna dari halaman author yang sedang dilihat.
    $user_id = $wp_query->get_queried_object_id();

    // Prefix untuk ACF field yang mengacu pada user.
    $user_prefix = 'user_' . $user_id;

    $ud = array(
        //name
        'name' => get_the_author_meta('display_name', $user_id),

        //phone
        'phone' => get_field('user_phone', $user_prefix),

        //facebook
        'facebook' => get_field('user_facebook', $user_prefix),

        //gravatar
        'gravatar' => get_avatar(get_the_author_meta('user_email', $user_id), 150),

        //tiktok
        'tiktok' => get_field('user_tiktok', $user_prefix),

        //instagram
        'instagram' => get_field('user_instagram', $user_prefix),

        //x
        'x' => get_field('user_x', $user_prefix),

        //linkedin
        'linkedin' => get_field('user_linkedin', $user_prefix),

        //youtube
        'youtube' => get_field('user_youtube', $user_prefix),

        //gender
        'gender' => get_field('user_gender', $user_prefix),






    );




    return $ud;
}
