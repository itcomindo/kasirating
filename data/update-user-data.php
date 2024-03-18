<?php

/**
 * Update User Data
 */

defined('ABSPATH') or die('No script kiddies please!');





function xxxmm_update_user_data()
{
    //chat GPT buatkan form untuk mengupdate atau mangganti autor meta berdasarkan ketentuan berikut:


    //1. name untuk mengupdate display_name
    //2. phone untuk mengupdate user_phone dibuat menggunakan ACF
    //3. facebook untuk mengupdate user_facebook dibuat menggunakan ACF
    //4. instagram untuk mengupdate user_instagram dibuat menggunakan ACF
    //5. twitter untuk mengupdate user_x dibuat menggunakan ACF
    //6. linkedin untuk mengupdate user_linkedin dibuat menggunakan ACF
    //7. youtube untuk mengupdate user_youtube dibuat menggunakan ACF
    //8. tiktok untuk mengupdate user_tiktok dibuat menggunakan ACF
    //9. password
    //10.user_gender dibuat menggunakan ACF
    //11.user_birth_date dibuat menggunakan ACF
    //12.user_address dibuat menggunakan ACF
    //13.user_city dibuat menggunakan ACF
    //14.user_provincy dibuat menggunakan ACF
    //15.user_zip_code dibuat menggunakan ACF
    //16.user_country dibuat menggunakan ACF
    //18.user_bio
    //19.user website
    //20.user_email untuk mengupdate user_email
    //21.user_nickname untuk mengupdate user_nickname
    //22. tombol submit





}




function mm_update_user_data()
{
    if (isset($_POST['submit'])) {
        $user_id = get_current_user_id();
        if (!empty($_POST['name'])) {
            wp_update_user([
                'ID' => $user_id,
                'display_name' => sanitize_text_field($_POST['name'])
            ]);
        }
        if (!empty($_POST['password'])) {
            wp_set_password($_POST['password'], $user_id);
        }
        if (!empty($_POST['user_email'])) {
            wp_update_user([
                'ID' => $user_id,
                'user_email' => sanitize_email($_POST['user_email'])
            ]);
        }
        if (!empty($_POST['user_nickname'])) {
            update_user_meta($user_id, 'nickname', sanitize_text_field($_POST['user_nickname']));
        }
        $fields = [
            'phone' => 'user_phone',
            'facebook' => 'user_facebook',
            'instagram' => 'user_instagram',
            'twitter' => 'user_x',
            'linkedin' => 'user_linkedin',
            'youtube' => 'user_youtube',
            'tiktok' => 'user_tiktok',
            'user_gender' => 'user_gender',
            'user_birth_date' => 'user_birth_date',
            'user_address' => 'user_address',
            'user_city' => 'user_city',
            'user_provincy' => 'user_provincy',
            'user_zip_code' => 'user_zip_code',
            'user_country' => 'user_country',
            'user_bio' => 'description',
            'user_website' => 'user_url'
        ];
        foreach ($fields as $post_key => $meta_key) {
            if (isset($_POST[$post_key])) {
                update_field($meta_key, sanitize_text_field($_POST[$post_key]), 'user_' . $user_id);
            }
        }
    }
?>
    <form method="post">
        <input type="text" name="name" placeholder="Display Name">
        <input type="text" name="phone" placeholder="Phone">
        <input type="text" name="facebook" placeholder="Facebook">
        <input type="text" name="instagram" placeholder="Instagram">
        <input type="text" name="twitter" placeholder="Twitter">
        <input type="text" name="linkedin" placeholder="LinkedIn">
        <input type="text" name="youtube" placeholder="YouTube">
        <input type="text" name="tiktok" placeholder="TikTok">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="user_gender" placeholder="Gender">
        <input type="text" name="user_birth_date" placeholder="Birth Date">
        <input type="text" name="user_address" placeholder="Address">
        <input type="text" name="user_city" placeholder="City">
        <input type="text" name="user_provincy" placeholder="Province">
        <input type="text" name="user_zip_code" placeholder="Zip Code">
        <input type="text" name="user_country" placeholder="Country">
        <textarea name="user_bio" placeholder="Bio"></textarea>
        <input type="text" name="user_website" placeholder="Website">
        <input type="email" name="user_email" placeholder="Email">
        <input type="text" name="user_nickname" placeholder="Nickname">
        <input type="submit" name="submit" value="Submit">
    </form>
<?php
}
