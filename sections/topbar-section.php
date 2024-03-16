<?php

/**
 * Topobar Section
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<div id="topbar" class="section h40">
    <div class="container h100">
        <div id="topbar-wr" class="h100">
            <div id="topbar-left">
                <a href="/">Contoh Aja</a>
            </div>
            <div id="topbar-right">
                <?php
                echo mm_get_login_button();
                echo mm_get_button()['modal-register'];
                echo mm_logout_button();
                ?>
            </div>
        </div>
    </div>
</div>