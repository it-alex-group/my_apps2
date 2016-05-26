<?php
	
	/**
	 * Created by PhpStorm.
	 * User: ALEX
	 * Date: 24.05.2016
	 * Time: 9:12
	 */
	class CDProduct {

		public $playLength;
		public $title;
		public $producerMainName;
		public $producerFirstName;
		public $price;

		/**
		 * CDProduct constructor.
		 *
		 * @param $playLength
		 * @param $title
		 * @param $producerMainName
		 * @param $producerFirstName
		 * @param $price
		 */
		public function __construct ( $playLength, $title, $producerMainName, $producerFirstName, $price ) {

			$this->playLength = $playLength;
			$this->title = $title;
			$this->producerMainName = $producerMainName;
			$this->producerFirstName = $producerFirstName;
			$this->price = $price;
		}

		/**
		 * @return mixed
		 */
		public function getPlayLength () {

			return $this->playLength;
		}
		
		public function getSummaryLine () {

			$base = "{$this->title} ( {$this->producerMainName}, )";
			$base .= "{$this->producerFirstName}";
			$base .= ": Time line - {$this->playLength}";
			return $base;
		}
		
		public function getProducer (  ) {
			return "{$this->producerFirstName} " . "{$this->producerMainName}";
		}


	}