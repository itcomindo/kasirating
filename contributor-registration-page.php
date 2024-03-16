<?php

/**
 * Template Name: Contributor Registration Page
 */

defined('ABSPATH') or die('No script kiddies please!');


get_header();
?>
<section class="reg-pr section small">
    <div class="container">
        <div class="reg-wr">
            <?php
            mm_get_register_form_contributor();
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
