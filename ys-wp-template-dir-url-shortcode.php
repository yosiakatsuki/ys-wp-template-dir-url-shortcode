<?php
/**
 * Plugin Name:     Ys WP Template Dir Uri Shortcode
 * Plugin URI:      https://github.com/yosiakatsuki/ys-wp-template-dir-url-shortcode
 * Description:     [ystemplatedirurl],[ysstylesheetdirurl]でテーマフォルダまでのURLを返すショートコードを提供するプラグイン
 * Author:          yosiakatsuki
 * Author URI:      https://yosiakatsuki.net/
 * Version:         1.0.0
 *
 * @package         ys-wp-template-dir-url-shortcode
 */


function ysts_template_dir_url_shortcode() {
		return get_template_directory_uri();
}
add_shortcode('ystemplatedirurl', 'ysts_template_dir_url_shortcode');

function ysts_stylesheet_dir_url_shortcode() {
		return get_stylesheet_directory_uri();
}
add_shortcode('ysstylesheetdirurl', 'ysts_stylesheet_dir_url_shortcode');

add_filter( 'widget_text', 'do_shortcode' );