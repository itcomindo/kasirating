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
                <label for="name_sub">Name</label>
                <input type="text" id="name_sub" name="name">
            </div>

            <!-- email -->
            <div class="form-item">
                <label for="email_sub">Email</label>
                <input type="email" id="email_sub" name="email">
                <small>this will be use as your username</small>
            </div>

            <!-- password -->
            <div class="form-item">
                <label for="password_sub">Password</label>
                <input type="password" id="password_sub" name="password">
                <span class="toggle-password" style="cursor: pointer;"><i class="fas fa-eye"></i></span>
            </div>

            <!-- confirm password -->
            <div class="form-item">
                <label for="confirm-password_sub">Confirm Password</label>
                <input type="password" id="confirm-password_sub" name="confirm-password">
            </div>

            <!-- checkbox to agree term and condition -->
            <div class="form-item checkbox">
                <input type="checkbox" id="agree-term_sub" name="agree-term">
                <label for="agree-term_sub">I agree to the <a href="#">term and condition</a></label>
            </div>

            <!-- submit -->
            <div class="form-item">
                <button type="submit" class="btn" id="reg-btn">Register as Subscriber</button>
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
                <label for="name_cont">Name</label>
                <input type="text" id="name_cont" name="name">
            </div>

            <!-- email -->
            <div class="form-item">
                <label for="email_cont">Email</label>
                <input type="email" id="email_cont" name="email">
                <small>this will be use as your username</small>
            </div>

            <!-- password -->
            <div class="form-item">
                <label for="password_cont">Password</label>
                <input type="password" id="password_cont" name="password">
                <span class="toggle-password" style="cursor: pointer;"><i class="fas fa-eye"></i></span>
            </div>

            <!-- confirm password -->
            <div class="form-item">
                <label for="confirm-password_cont">Confirm Password</label>
                <input type="password" id="confirm-password_cont" name="confirm-password">
            </div>

            <!-- checkbox to agree term and condition -->
            <div class="form-item checkbox">
                <input type="checkbox" id="agree-term_cont" name="agree-term">
                <label for="agree-term_cont">I agree to the <a href="#">term and condition</a></label>
            </div>

            <!-- submit -->
            <div class="form-item">
                <button type="submit" class="btn" id="reg-btn">Register as Contributor</button>
            </div>
        </form>
    </div>
<?php
}
