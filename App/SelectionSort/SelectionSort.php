<?php

namespace App\SelectionSort;

use App\MyInterFace\JamSortInterface;
use http\Params;

class SelectionSort implements JamSortInterface
{

    public function jSortAZ(array $array): array
    {
        // TODO: Implement jSortAZ() method.
        return $this->selectionSortAZ($array, count($array));
    }

    public function jSortZA(array $array): array
    {
        // TODO: Implement jSortZA() method.
        return $this->selectionSortZA($array, count($array));
    }

    private function selectionSortAZ(array $arr, int $n): array
    {
        for ($i = 0; $i < $n; $i++) {
            $low = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$low]) {
                    $low = $j;
                }
            }

            // swap the minimum value to $ith node
            if ($arr[$i] > $arr[$low]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$low];
                $arr[$low] = $tmp;
            }
        }
        return $arr;
    }

    private function selectionSortZA(array $arr, int $n): array
    {
        for ($i = 0; $i < $n; $i++) {
            $low = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] > $arr[$low]) {
                    $low = $j;
                }
            }

            // swap the minimum value to $ith node
            if ($arr[$i] < $arr[$low]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$low];
                $arr[$low] = $tmp;
            }
        }
        return $arr;
    }
}