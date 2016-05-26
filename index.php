<?php require_once "init.php";
	/**
	 * test my BookWork
	 */
	$ShopProduct = new ShopProduct( 'None','None','None', 'Primakov', 'Alexey', '(500$)' );
//	echo $ShopProduct->getProducer ();
//	echo $ShopProduct->price;

//	$settings = simplexml_load_file ( "settings.xml" );
	$AddressManager = new AddressManager();
//	$AddressManager->outputResolve ( (string)$settings->resolvedomains );

$ShopProductWrite = new ShopProductWrite();
    $ShopProductWrite->write($ShopProduct);




