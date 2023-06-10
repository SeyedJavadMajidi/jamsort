<?php
class jsort{
	private $jsort;
	public function __construct($s){
		$this->jsort = $s;
	}
	
	public function jsort($array){
		return $this->jsort->jsort($array);
	}
}
?>