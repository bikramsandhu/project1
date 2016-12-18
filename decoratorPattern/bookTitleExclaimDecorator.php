<?php
	private $decorator;
	public function __construct(Decorator $decorator_input){
		$this->decorator = $decorator_input;
	}
	function addExclaim(){
		$this->decorator->title = "!". $this->decorator->title."!";
	}
?>
