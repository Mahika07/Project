<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
class FrmColorpickerStyleComponent extends FrmStyleComponent {

	/**
	 * The view file name.
	 *
	 * @since 6.14
	 *
	 * @var string
	 */
	protected $view_name = 'colorpicker';

	/**
	 * Construct FrmColorpickerStyleComponent.
	 *
	 * @since 6.14
	 */
	public function __construct( $field_name, $field_value, $data ) {
		$this->init( $data, $field_name, $field_value );
	}
}
