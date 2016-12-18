<?php
	class VideoGameSingleton{
		private $title = 'Call of Duty Infinite Warfare';
		private $platform = 'Xbox One';
		private static $game = NULL;
		private static $isLoanedOut = FALSE;

		private function __construct(){}

		static function borrowGame(){
			if(FALSE == self::$isLoanedOut){
				if(NULL == self::$game){
					self::$game = new VideoGameSingleton();
				}
				self::$isLoanedOut = TRUE;
				return self::$game;
			}
			else{
				return NULL;
			}
		}

	function returnGame(VideoGameSingleton $gameReturned){
		self::$isLoanedOut = FALSE;
	}

	function getPlatform(){
		return $this->platform;
	}

	function getTitle(){
		return $this->title;
	}

	function getTitleAndPlatform(){
		return $this->getTitle().' for '.$this->getPlatform();
	}
	}
	

?>
