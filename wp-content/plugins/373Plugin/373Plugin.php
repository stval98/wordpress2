<?php
/**
 * Plugin Name: Plugin-373
 * Plugin URI:
 * Description: Read More - Click to Read! Swap
 * Version: 1.0
 * Author: Henry Casey
 **/

function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );