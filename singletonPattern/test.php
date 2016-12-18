<?php
	include_once('videoGameBorrower.php');
	include_once('videoGameSingleton.php');

	echo 'Singleton Testing...'.'<br><br><br>';
	$videoGameBorrower1 = new videoGameBorrower();
	$videoGameBorrower2 = new videoGameBorrower();

	$videoGameBorrower1->borrowGame();
	echo 'Borrower 1 asked to borrow the game, Title and Platform:
	'.'<br>'.$videoGameBorrower1->getTitleAndPlatform();
	echo '<br><br>';

	$videoGameBorrower2->borrowGame();
	echo 'Borrower 2 asked to borrow the game, Title and Platform:
	'.'<br>'.$videoGameBorrower2->getTitleAndPlatform();
	echo '<br><br>';

	$videoGameBorrower1->returnGame();
	echo 'Borrower 1 returned the game';
	echo '<br><br>';

	$videoGameBorrower2->borrowGame();
	echo 'Borrower 2 Title and Platform: '.'<br>'.$videoGameBorrower1->getTitleAndPlatform();
	

?>
