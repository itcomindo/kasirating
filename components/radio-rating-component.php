<?php

/**
 * Radio Rating Component
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_effectiveness_rating($post_id)
{
    global $post;
    $post_id = $post->ID;
    for ($i = 0; $i < 5; $i++) {
        $checked = '';
        if (get_post_meta($post_id, 'effectiveness', true) == $i) {
            $checked = 'checked';
        }
        echo '<input type="radio" id="efec-' . $i . '" name="therat" value="' . $i . '" ' . $checked . '>';
        echo '<label for="efec-' . $i . '"></label>';
    }
}
