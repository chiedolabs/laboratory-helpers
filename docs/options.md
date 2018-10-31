## Options Helpers

Option Value Helpers if your theme utilizes [Redux Framework](https://reduxframework.com/)

* Return a boolean from a Redux Checkbox: `is_option_checked( $value )`
* Return your value of a Redux Option: `get_theme_option( $option_id, $theme_options, $default )`
	* $option_id - The Id you set your option as
	* $theme_options - Your array of Redux Options.
	* $default - a default value.