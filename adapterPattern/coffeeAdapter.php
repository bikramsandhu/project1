<?php
	include_once('coffee.php');

	class coffeeAdapter{
		private $cup;

		function __construct(coffee $cup_in){
			$this->cup = $cup_in;
		}

		function getCupDetails(){
			return $this->cup->getSize().' at '.$this->cup->getPrice();
		}
	}
?>
