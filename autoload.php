<?php
	/**
	 * @param $class
	 *  method 1
	 */
//
//	function myAutoloader ( $class ) {
//		include 'classes/' . $class . '.php';
//	}
//
//	spl_autoload_register ( 'myAutoload' );

	/**
	 * method 2
	 */

	spl_autoload_register ( function ( $class ) {

		include 'classes/' . $class . '.php';
	} );
