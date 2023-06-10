<?php
require_once "jsort.php";
require_once "quick_sort.php";
$x = [12,34,12,2,43,65,21,3,2,5,1,4,3];

$j = new jsort(new quick_sort());
echo implode("<br>",$j->jsortAZ($x));
