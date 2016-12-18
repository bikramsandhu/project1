<?php
	include_once('videoGameSingleton.php');
	class videoGameBorrower{
		private $borrowedGame;
		private $haveGame = FALSE;

		function __construct(){}

		function getTitleAndPlatform(){
			if(TRUE == $this->haveGame){
				return $this->borrowedGame->getTitleAndPlatform();
			}
			else {
				return "Game not in stock";
			}
	}
	function borrowGame(){
		$this->borrowedGame = videoGameSingleton::borrowGame();
		if ($this->borrowedGame == NULL){
			$this->haveGame = FALSE;
		}
		else{
			$this->haveGame = TRUE;
		}
	}
	function returnGame() {
		$this->borrowedGame->returnGame($this->borrowedGame);
	}
	}
?>
