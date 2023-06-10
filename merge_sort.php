<?php
require_once "jamsortinterface.php";

class merge_sort implements jamsortinterface
{
    private $type = 1;

    public function jsortAZ($arr): array
    {
        $this->type = 1;
        return $this->split($arr);
    }

    public function jsortZA($arr): array
    {
        $this->type = 2;
        return $this->split($arr);
    }

    private function split($arr)
    {
        if (count($arr) == 1)
            return $arr;
        $mid = count($arr) / 2;
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);
        $left = $this->split($left);
        $right = $this->split($right);
        return $this->merg($left, $right);
    }

    private function merg($left, $right)
    {
        $res = array();
        while (count($left) > 0 && count($right) > 0) {
            if ($this->type == 1) {
                if ($left[0] > $right[0]) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                } else {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
            } else {
                if ($left[0] < $right[0]) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                } else {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
            }
        }
        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }
        return $res;
    }
}

?>