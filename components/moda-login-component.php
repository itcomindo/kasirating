<?php

/**
 * Modal Login Component
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<div id="modal-login">
    <div id="modal-login-close" class="cursor-pointer flex-col align-center justify-center color-light-2 bg-dark-1 w25">X</div>
    <span>Please login or create account before submit review.</span>
    <?php
    mm_display_login_form();
    ?>
</div>