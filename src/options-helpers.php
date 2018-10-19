<?php
/**
 * Custom Options Helper Functions.
 *
 * @package LaboratoryHelpers
 */

if ( ! function_exists( 'is_option_checked' ) ) :
	/**
	 * Is a theme option checked or not?
	 *
	 * @param {string} $option_value - the option field value (in this case, checked or not).
	 * @return {boolean}
	 */
	function is_option_checked( $option_value ) {
		if (
			! isset( $option_value ) ||
			! $option_value
		) {
			return false;
		}
		return '1' === $option_value ||
			1 === $option_value ||
			true === $option_value;
	}
endif;

if ( ! function_exists( 'get_theme_option' ) ) :
	/**
	 * Retrieve a theme options value and avoid PHP "undefined index" errors
	 * NOTE - this method does nothing with the database; it merely works with data already pulled from db.
	 * $lab_theme_options global var is set in functions/setup-global-variables.php
	 *
	 * @param {string} $option_id - the option id.
	 * @param {string} $default - default value to use if option value is null.
	 * @return {string|false}
	 */
	function get_theme_option( $option_id, $default = null ) {
		global $lab_theme_options;
		if (
			! isset( $lab_theme_options ) ||
			! is_array( $lab_theme_options )
		) {
			return false;
		}

		if (
			isset( $lab_theme_options[ $option_id ] ) &&
			! empty( $lab_theme_options[ $option_id ] )
		) {
			return $lab_theme_options[ $option_id ];
		}

		if ( isset( $default ) ) {
			return $default;
		}

		return false;
	}
endif;
