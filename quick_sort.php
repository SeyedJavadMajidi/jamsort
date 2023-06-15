<?php
require_once "jamsortinterface.php";

class QuickSort implements JamSortInterface
{
    private $type = 1;

    public function jsortZA(array $array): array
    {
        $this->type = 2;
        return $this->qSort($array);
    }

    public function jSortAZ(array $array): array
    {
        $this->type = 1;
        return $this->qSort($array);
    }

    private function qSort($arr):array
    {
        if (count($arr) < 2)
            return $arr;
        $pivot = $arr[0];
        $left = [];
        $right = [];
        for ($i = 1; $i < count($arr); $i++) {
            if ($this->type == 1) {
                if ($pivot > $arr[$i])
                    $left[] = $arr[$i];
                else
                    $right[] = $arr[$i];
            } else {
                if ($pivot < $arr[$i])
                    $left[] = $arr[$i];
                else
                    $right[] = $arr[$i];
            }
        }
        return array_merge($this->qsort($left), [$pivot], $this->qsort($right));
    }
}

?>