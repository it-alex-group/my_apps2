<?php
	
	/**
	 * Created by PhpStorm.
	 * User: ALEX
	 * Date: 24.05.2016
	 * Time: 9:12
	 */
	class BookProduct {

		public $numPages;
		public $title;
		public $producerMainName;
		public $producerFirstName;
		public $price;

		/**
		 * BookProduct constructor.
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
		public function getNumberOfPages () {

			return $this->numPages;
		}

		public function getSummaryLine () {

			$base = "{$this->title} ( {$this->producerMainName}, )";
			$base .= "{$this->producerFirstName}";
			$base .= ": NumPages - {$this->numPages} pages.";
			return $base;
		}

		public function getProducer () {

			return "{$this->producerFirstName} " . "{$this->producerMainName}";
		}


	}
