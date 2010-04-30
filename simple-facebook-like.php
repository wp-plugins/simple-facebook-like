<?php
/*
Plugin Name: Simple Facebook Like
Plugin URI: http://nxsn.com/projects/simple-facebook-like
Description: 
Adds "Facebook Like Button" after or before your post content. This plugin have an admin page so you can easily configure it. 
Facebook Like Button introduced on http://developers.facebook.com/docs/reference/plugins/like 
Version: 1.0.1
Author: Huseyin Berberoglu
Author URI: http://nxsn.com
 */

function sfl_content_filter($content) {
    $sfb_like_options = get_option('sfb_like_options');
    $pos = $sfb_like_options['position'];
    if ($pos == 'after') {
        $content .= get_simple_fb_like();
    } else if ($pos == 'before'){
        $content = get_simple_fb_like() . $content;
    }
    return $content;
}
add_filter('the_content','sfl_content_filter');

function the_simple_fb_like() {
    echo get_simple_fb_like();
}

function get_simple_fb_like() {
    global $post;
    $sfb_like_options = get_option('sfb_like_options');
    $layout = $sfb_like_options['layout'];
    $colorscheme = $sfb_like_options['colorscheme'];
    $width = $sfb_like_options['width'];
    $height = $sfb_like_options['height'];
    $show_faces = $sfb_like_options['show_faces'] ? 1 : 0;
    $font = $sfb_like_options['font'];
    $action = $sfb_like_options['action'];
    $url = get_permalink();
    $html = '<iframe src="http://www.facebook.com/plugins/like.php?href='.$url.'&amp;layout='.$layout.'&amp;show_faces='.$show_faces.'&amp;width='.$width.'&amp;action='.$action.'&amp;colorscheme='.$colorscheme.'&amp;font='.$font.'" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:'.$width.'px; height:'.$height.'px"></iframe>';
    return apply_filters('simple_fb_like', $html);
}

function sfl_init() {
    $sfb_like_options = array();
	$sfb_like_options['position'] = "before";		
	$sfb_like_options['width'] = "450";
	$sfb_like_options['height'] = "25";
	$sfb_like_options['show_faces'] = true;
	$sfb_like_options['colorscheme'] = "light";
	$sfb_like_options['layout'] = 'standard';
	$sfb_like_options['font'] = '';
	$sfb_like_options['action'] = 'like';
    add_option('sfb_like_options', $sfb_like_options, 'Simple FB Like Options');
}
add_action('activate_simple-facebook-like/simple-facebook-like.php', 'sfl_init');


/* for admin page */
function sfl_config() { include('sfl-admin.php'); }
function sfl_config_page() {
    if ( function_exists('add_submenu_page') )
        add_options_page(__('Simple Facebook Like'), __('Simple Facebook Like'), 'manage_options', 'sfl-admin', 'sfl_config');
}
add_action('admin_menu', 'sfl_config_page');
/* eof for admin page */
?>
