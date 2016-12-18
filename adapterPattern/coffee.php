<?php
	class coffee{
		private $size;
		private $price;

		function __construct($sizeOfCup, $priceOfCup){
			$this->$size = $sizeOfCup;
			$this->$price = $priceOfCup;
		}

		function getSize(){
			$this->size;
		}

		function getPrice(){
			$this->price;
		}
	}
?>
