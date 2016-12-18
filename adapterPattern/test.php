<?php
//Bikramjeet Singh Sandhu

	include_once('coffee.php');
	include_once('coffeeAdapter.php');

	define('BR','<'.'BR'.'>');
	echo 'ADAPTER PATTERN:'.BR;
	echo BR;

	$cup = new coffee('Medium', '2');
	$coffeeAdapter = new $coffeeAdapter($cup);

	echo "Cup Size and Price: ".$coffeeAdapter->getCupDetails();

	echo BR.BR;
?>
