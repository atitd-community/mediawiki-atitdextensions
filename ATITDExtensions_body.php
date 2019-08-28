<?php

class ATITDExtensions
{
	/**
	 * All we're doing is adding an element to the existing array.
	 *
	 * @param array $extTypes
	 */
	public static function onExtensionTypes( &$extTypes ) {
		if ( !is_array( $extTypes ) ) {
			$extTypes = array();
		}

		$extTypes = array_merge(
			array( 'atitd' => 'A Tale in the Desert Specific' ),
			$extTypes
		);

		return true;
	}
}