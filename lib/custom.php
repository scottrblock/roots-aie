<?php
/**
 * Custom functions
 */

function aie_excerpt_more($more) {
  return ' <a href="' . get_permalink() . '">' . __('Read More&hellip;', 'roots') . '</a>';
}

add_filter('excerpt_more', 'aie_excerpt_more', 999);
