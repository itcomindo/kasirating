<?php

/**
 * Buttons
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_button()
{
    $button = array();

    if (mm_is_user_logged_in()) {
        $button['submit-review'] = '<button class="btn primary add-review"><i class="far fa-paper-plane"></i> Add Review</button>';
    } else {
        $button['submit-review'] = '<button class="btn primary not-logged-in"><i class="far fa-paper-plane"></i> Add Reviews</button>';
    }

    return $button;
}
