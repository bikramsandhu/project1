<?php
	class Book {
		private $author;
		private $title;

		function __construct($Tit_input, $Aut_input){
			$this->title = $Tit_input;
			$this->author = $Aut_input;
		}
		function getTitle(){
			return $this->title;
		}
		function getAuthor(){
			return $this->author;
		}
		function getTitleAndAuthor(){
			return $this->getTitle().' by '.$this->getAuthor();
		}
	}
?>
