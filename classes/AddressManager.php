<?php
	
	/**
	 * Created by PhpStorm.
	 * User: ALEX
	 * Date: 24.05.2016
	 * Time: 8:11
	 */
	class AddressManager {
		public $title ="ok";
		private $addresses = [ "111.111.11.111", '222.222.22.222' ];

		public function outputResolve ( $resolve ) {
			
			foreach ( $this->addresses as $address ) {
				echo $address;
				if ( is_string ( $resolve ) ) {
					$resolve = (preg_match("/false|no|off|i/",$resolve)) ?
						false:true;
					echo gethostbyaddr ( $address );
				}
				echo "\n";
				
			}
			

		}
	}