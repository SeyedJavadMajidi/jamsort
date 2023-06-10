<?php
require_once "jamsortinterface.php";

class quick_sort implements jamsortinterface
{
    private $type = 1;

    public function jsortAZ($arr): array
    {
        $this->type = 1;
        return $this->qsort($arr);
    }

    public function jsortZA($arr): array
    {
        $this->type = 2;
        return $this->qsort($arr);
    }

    private function qsort($arr)
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