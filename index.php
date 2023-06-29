<?php
require_once "vendor\autoload.php";

use App\JSort\JSort;

$x = [1134, 2, 3, 4, 5, 6, 7, 8, 9, 10, 1032, 9, 8, 7, 6, 5, 4, 3, 2, 1, 45, 153];

$j = new JSort(JSort::HeapSort);

echo implode("<br>", $j->jSortZA($x));
