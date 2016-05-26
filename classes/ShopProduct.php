<?php
	
	/**
	 * Created by PhpStorm.
	 * User: ALEX
	 * Date: 24.05.2016
	 * Time: 7:16
	 */
	class ShopProduct implements Products {

		public $numPage;
		public $playLength;
		public $title = "Standart products";
		public $producerMainName = "SecondName author";
		public $produceFirstName = "Name author";
		public $price = 100;

		/**
		 * ShopProduct constructor.
		 *
		 * @param $numPage
		 * @param $playLength
		 * @param string $title
		 * @param string $producerMainName
		 * @param string $produceFirstName
		 * @param int $price
		 */
		public function __construct ( $numPage, $playLength, $title, $producerMainName, $produceFirstName, $price ) {

			$this->numPage = $numPage;
			$this->playLength = $playLength;
			$this->title = $title;
			$this->producerMainName = $producerMainName;
			$this->produceFirstName = $produceFirstName;
			$this->price = $price;
		}
		
		/**
		 * @return mixed
		 */
		public function getNumberOfPages () {

			return $this->numPage;
			
		}
		
		/**
		 * @return mixed
		 */
		public function getPlayLength () {

			return $this->playLength;
			
		}

		/**
		 * @return string
		 */
		public function getProducer () {

			return "{$this->produceFirstName} "
			. "{$this->producerMainName} ";
		}

		
	}

