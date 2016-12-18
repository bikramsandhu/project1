<?php
	class Decorator {
		protected $book;
		protected $title;
		public function __construct(Book $book_input){
			$this->book = $book_in;
			$this->resetTitle();
		}

		function resetTitle(){
			$this->title = $this->book->getTitle();
		}
		function showTitle(){
			return $this->title;
		}
	}
?>
