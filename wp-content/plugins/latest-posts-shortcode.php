<?php
/*
Plugin Name: Latest Posts Shortcode
Description: Adds a shortcode to display the five most recent posts.
Version: 1.0
*/

function lps_show_latest_posts() {
    $recent_posts = new WP_Query(array(
        'posts_per_page' => 5,
        'post_status'    => 'publish'
    ));

    if ( ! $recent_posts->have_posts() ) {
        return '<p>No posts found.</p>';
    }

    $output = '<ul class="latest-posts">';
    while ( $recent_posts->have_posts() ) {
        $recent_posts->the_post();
        $output .= '<li><a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></li>';
    }
    wp_reset_postdata();

    $output .= '</ul>';
    return $output;
}
add_shortcode('latest_posts', 'lps_show_latest_posts');
?>
