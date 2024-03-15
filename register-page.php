<?php

/**
 * Template Name: Register Page
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();

?>

<section id="register-page" class="section medium">
    <div class="container h100">
        <div id="register-page-wr" class="h100">
            <div id="register-left" class="h100">

                <h3 class="head smaller">Register As Subscriber</h3>
                <span>Give rating to any product you know.</span>

                <?php
                mm_get_register_form_subscriber();
                ?>

            </div>
            <div id="register-right" class="h100">

                <h3 class="head smaller">Register As Contributor</h3>
                <span>Post product to get rating from user</span>

                <?php
                mm_get_register_form_contributor();
                ?>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
