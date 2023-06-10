<?php
require_once "jamsortinterface.php";
class quick_sort implements jamsortinterface{
	public function jsort($arr):array{
		if(count($arr)<2)
			return $arr;
		$pivot = $arr[0];
		$left = [];
		$right = [];
		for($i=1;$i<count($arr);$i++){
			if($pivot>$arr[$i])
				$left[] = $arr[$i];
			else
				$right[] = $arr[$i];
		}
		return array_merge($this->jsort($left),[$pivot],$this->jsort($right));
	}
}
?>