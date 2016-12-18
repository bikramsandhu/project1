<?php
	include_once('book.php');
	include_once('bookTitleDecorator.php');
	include_once('bookTitleExclaimDecorator.php');
	
	echo 'Testing Decorator Pattern: '.'<br>';
	$randomBook = new Book('Dreaming In Code', 'Scott Rosenberg');
	$decoratorFunc - new Decorator($randomBook);
	$exclaimDecoratorFunc = new addExlaim($decoratorFunc);
	echo '<br><br>';

	echo 'Show Title: '.$decoratorFunc->showTitle().'<br><br>';

	echo 'Show Title With Two Exclaims: '.$exclaimDecoratorFunc->addExclaim().$decoratorFunc->showTitle();

?>
