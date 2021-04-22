<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "tags".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'tags', 'tags_settings_field' );
}

/**
 * Function Name:txt_link_settings_field Function to handle new input type "tags".
 *
 * @param  string $name     settings provided when using the input type "tags".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function tags_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$value      = htmlentities( $value );
	$type       = isset( $settings['type'] ) ? $settings['type'] : '';
	$class      = isset( $settings['class'] ) ? $settings['class'] : '';
	$output     = '<p><input type="hidden" id="smile_' . $input_name . '" class="form-control smile-input smile-' . $type . ' ' . $input_name . ' ' . $type . ' ' . $class . '" name="' . $input_name . '" value="' . $value . '" /></p>';
	return $output;
}

add_action( 'admin_enqueue_scripts', 'cp_tags_footer', 99 );
/**
 * Function Name:cp_tags_footer description.
 *
 * @param  array $hook ap page list.
 */
function cp_tags_footer( $hook ) {

	if ( false !== strpos( $hook, CP_PLUS_SLUG ) ) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui' );
		wp_enqueue_script( 'jquery-ui-autocomplete' );
		wp_enqueue_script( 'smile-taggle', SMILE_FRAMEWORK_URI . '/lib/fields/tags/js/tag-it.js', false, false, array( 'jquery' ) );
		wp_enqueue_script( 'smile-tags', SMILE_FRAMEWORK_URI . '/lib/fields/tags/js/tags.js', false, false, array( 'smile-taggle' ) );
	}
}
