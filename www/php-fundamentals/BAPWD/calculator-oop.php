<?php

class calculator{

	public $total; // we can keep it protected if we think we will not expand this property further.

	public function add($value){
		$this -> total += $value;
	}

	public function subtract($value){
		$this -> total -= $value;
	}


	public function getTotal(){
		return $this -> total;
	}
}


?>
