<?php

/**
 * Stars
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_stars($element_class = 'rating')
{
    //show stars based on rating
    $nilai = get_field('produk_rating');

    if ($nilai !== false) {
        $rating = '<div class="' . $element_class . '">';
        for ($i = 0; $i < $nilai; $i++) {
            $rating .= '<i class="fa-solid fa-star"></i>';
        }
        $rating .= '</div>';
    }
    return $rating;
}
