<?php

/**
 * Rating Data
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_rating_data()
{
    global $post;
    $data = array();

    //get rating from acf field produk_rating
    $data['rating'] = get_field('produk_rating');




    return $data;
}
