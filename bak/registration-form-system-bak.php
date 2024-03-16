<?php

/**
 * Registration Form System
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_register_form_subscriber()
{
?>
    <div class="reg-form-wr reg-form">
        <form action="" method="post">
            <input type="hidden" name="action" value="mm_user_registration">

            <!-- name -->
            <div class="form-item">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>

            <!-- email -->
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <small>this will be use as your username</small>
            </div>

            <!-- password -->
            <div class="form-item">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <span class="toggle-password" style="cursor: pointer;"><i class="fas fa-eye"></i></span>
            </div>

            <!-- confirm password -->
            <div class="form-item">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>

            <!-- checkbox to agree term and condition -->
            <div class="form-item checkbox">
                <input type="checkbox" id="agree-term" name="agree-term">
                <label for="agree-term">I agree to the <a href="#">term and condition</a></label>
            </div>

            <!-- submit -->
            <div class="form-item">
                <button type="submit" class="btn">Register as Subscriber</button>
            </div>
        </form>
    </div>

<?php
}


function mm_get_register_form_contributor()
{
?>
    <div class="reg-form-wr reg-form">
        <form action="" method="post">
            <input type="hidden" name="action" value="mm_user_registration_contributor">

            <!-- name -->
            <div class="form-item">
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
            </div>

            <!-- email -->
            <div class="form-item">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <small>this will be use as your username</small>
            </div>

            <!-- password -->
            <div class="form-item">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <span class="toggle-password" style="cursor: pointer;"><i class="fas fa-eye"></i></span>
            </div>

            <!-- confirm password -->
            <div class="form-item">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>

            <!-- checkbox to agree term and condition -->
            <div class="form-item checkbox">
                <input type="checkbox" id="agree-term" name="agree-term">
                <label for="agree-term">I agree to the <a href="#">term and condition</a></label>
            </div>

            <!-- submit -->
            <div class="form-item">
                <button type="submit" class="btn">Register as Contributor</button>
            </div>
        </form>
    </div>

<?php
}
