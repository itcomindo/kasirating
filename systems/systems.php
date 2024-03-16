<?php

/**
 * Systems
 */

defined('ABSPATH') or die('No script kiddies please!');


/**
 * function to check user logged in or not
 */
function mm_is_user_logged_in()
{
    if (is_user_logged_in()) {
        return true;
    }
    return false;
}




require_once get_template_directory() . '/systems/registration-system.php';
require_once get_template_directory() . '/systems/registration-form-system.php';
require_once get_template_directory() . '/systems/login-form-system.php';
require_once get_template_directory() . '/systems/login-logout-system.php';
