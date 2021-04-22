<?php
/**
 * Prohibit direct script loading.
 *
 * @package Convert_Plus.
 */

// Add new input type "dropdown".
if ( function_exists( 'smile_add_input_type' ) ) {
	smile_add_input_type( 'dropdown', 'dropdown_settings_field' );
	add_action( 'admin_enqueue_scripts', 'framework_dropdown_admin_styles' );
}

/**
 * Function Name:framework_dropdown_admin_styles description.
 *
 * @param  array $hook ap page list.
 */
function framework_dropdown_admin_styles( $hook ) {
	$cp_page = strpos( $hook, CP_PLUS_SLUG );
	$data    = get_option( 'convert_plug_debug' );
	if ( false !== $cp_page && ( isset( $data['cp-dev-mode'] ) && '1' === $data['cp-dev-mode'] ) && isset( $_GET['style-view'] ) && ( 'edit' === $_GET['style-view'] || 'variant' === $_GET['style-view'] ) ) {
		wp_enqueue_script( 'smile-dropdown-script', SMILE_FRAMEWORK_URI . '/lib/fields/dropdown/dropdown.js', array(), '1.0.0', true );
	}
}

/**
 * Function Name:dropdown_settings_field Function to handle new input type "dropdown".
 *
 * @param  string $name     settings provided when using the input type "dropdown".
 * @param  string $settings holds the default / updated value.
 * @param  string $value    html output generated by the function.
 * @return string           html output generated by the function.
 */
function dropdown_settings_field( $name, $settings, $value ) {
	$input_name = $name;
	$type       = isset( $settings['type'] ) ? $settings['type'] : '';
	$class      = isset( $settings['class'] ) ? $settings['class'] : '';
	$options    = isset( $settings['options'] ) ? $settings['options'] : '';

	// Apply partials.
	$partials = generate_partial_atts( $settings );

	$output = '<p><select name="' . $input_name . '" id="smile_' . $input_name . '" class="form-control smile-input smile-select ' . $input_name . ' ' . $type . '" ' . $partials . '>';
	foreach ( $options as $text_val => $val ) {
		if ( is_numeric( $text_val ) && ( is_string( $val ) || is_numeric( $val ) ) ) {
			$text_val = $val;
		}
		$selected = '';
		if ( '' !== $value && (string) $val === (string) $value ) {
			$selected = ' selected="selected"';
		}
		$output .= '<option class="smile_' . $val . '" value="' . $val . '"' . $selected . '>' . htmlspecialchars( $text_val ) . '</option>';
	}
	$output .= '</select></p>';
	return $output;
}
