<?php
class jsort{
	private $jsort;
	public function __construct($s){
		$this->jsort = $s;
	}
	
	public function jsortAZ($array){
		return $this->jsort->jsortAZ($array);
	}
	public function jsortZA($array){
		return $this->jsort->jsortZA($array);
	}
}
?>