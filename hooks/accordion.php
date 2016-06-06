<?php

/**
 * Sets offset for scrolling accordion items to ensure they don't fall
 * behind our fixed header. See: https://wordpress.org/plugins/accordion-shortcodes/other_notes/
 */
add_filter('shortcode_atts_accordion', function($atts) {
    if (isset($atts['scroll']) && $atts['scroll']) {
        $atts['scroll'] = 80;
    }
    return $atts;
}, 10, 3);
