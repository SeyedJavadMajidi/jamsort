<?php

namespace App\JSort;

use App\MyInterFace\JamSortInterface;

class JSort
{
    public const HeapSort = "App\HeapSort\HeapSort";
    public const MergeSort = "App\MergeSort\MergeSort";
    public const QuickSort = "App\QuickSort\QuickSort";
    public const SelectionSort = "App\SelectionSort\SelectionSort";
    private JamSortInterface $jsort;

    public function __construct(string $s)
    {
        $this->jsort = new $s;
    }

    public function jSortAZ(array $array): array
    {
        return $this->jsort->jsortAZ($array);
    }

    public function jSortZA(array $array): array
    {
        return $this->jsort->jsortZA($array);
    }
}

?>