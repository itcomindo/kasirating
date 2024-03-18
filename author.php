<?php

/**
 * Author
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();

?>
<section id="author" class="section medium">
    <div class="container">
        <div id="author-wr">
            <div id="author-left">
                <div class="gravatar-wr">
                    <!-- gravatar -->
                    <?php echo mm_get_user_data()['gravatar']; ?>
                </div>
                <small>Update your avatar use gravatar <a class="text-link" href="#">click here</a></small>
            </div>
            <div id="author-right" class="flex-col">

                <?php
                mm_update_user_data();
                ?>



            </div>
        </div>
    </div>
</section>
<?php

get_footer();
