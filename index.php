<?php
require_once "jsort.php";
require_once "HeapSort.php";
$x = [1,2,3,4,5,6,7,8,9,10,1032,9,8,7,6,5,4,3,2,1,45,153];

$j = new JSort(new HeapSort());
echo implode("<br>",$j->jSortAZ($x));
