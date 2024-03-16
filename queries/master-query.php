<?php

/**
 * Master Query
 */

defined('ABSPATH') or die('No script kiddies please!');

/**
 * what? : get the master query
 * @param string $post_type : the post type to query
 * @param int $post_perpage : the number of post to query
 * @param boolean $eclude_cat : whether to exclude a category or not
 * @param string $cat_to_exclude : the category to exclude if $eclude_cat is true
 * @return WP_Query
 */
function mm_get_master_query($post_type = 'post', $post_perpage = 10, $eclude_cat = false, $cat_to_exclude = 'blog')
{
    if ($eclude_cat) {
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $post_perpage,
            'orderby' => 'date',
            'order' => 'DESC',
            'category__not_in' => array(get_cat_ID($cat_to_exclude)),
        );
        return new WP_Query($args);
    } else {
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => $post_perpage,
            'orderby' => 'date',
            'order' => 'DESC',
        );
    }

    return new WP_Query($args);
}
