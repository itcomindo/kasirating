<?php

/**
 * Template Name: Login Page
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();

?>

<section id="login-page" class="section medium">
    <div class="container">
        <div id="login-page-wr">
            <?php
            mm_display_login_form();
            ?>
        </div>
    </div>
</section>

<?php


get_footer();
