<?php
	
	/**
	 * Created by PhpStorm.
	 * User: ALEX
	 * Date: 24.05.2016
	 * Time: 8:37
	 */
	class ShopProductWrite {

		public function write ( Products $ShopProduct ) {

			$str = "{$ShopProduct->title}: "
				. $ShopProduct->getProducer ()
				. "({$ShopProduct->price})\n";
			echo $str;
		}

		
	}