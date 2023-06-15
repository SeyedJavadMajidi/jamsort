<?php
require_once "jamsortinterface.php";

class HeapSort implements JamSortInterface
{
    private int $check = -1;
    private int $type = 1;
    private int $remove = -999999;

    public function jsortZA(array $array): array
    {
        $this->type = 2;
        $a = count($array);
        if ($a % 2 != 0) {
            $array[] = $this->remove;
            $this->check = 1;
        }
        $array = $this->heapSort($array, $a);
        if ($this->check == 1)
            $array = array_diff($array, [$this->remove]);
        return $array;
    }

    public function jSortAZ(array $array): array
    {
        $this->type = 1;
        $a = count($array);
        if ($a % 2 != 0) {
            $array[] = $this->remove;
            $this->check = 1;
        }
        $array = $this->heapSort($array, $a);
        if ($this->check == 1)
            $array = array_diff($array, [$this->remove]);
        return $array;
    }

    private function heapify($arr, $N, $i): array
    {
        $largest = $i; // Initialize largest as root
        $l = 2 * $i + 1; // left = 2*i + 1
        $r = 2 * $i + 2; // right = 2*i + 2

        if ($this->type == 1) {
            // If left child is larger than root
            if ($l < $N && $arr[$l] > $arr[$largest])
                $largest = $l;

            // If right child is larger than largest so far
            if ($r < $N && $arr[$r] > $arr[$largest])
                $largest = $r;
        } else {

            // If left child is larger than root
            if ($l < $N && $arr[$l] < $arr[$largest])
                $largest = $l;

            // If right child is larger than largest so far
            if ($r < $N && $arr[$r] < $arr[$largest])
                $largest = $r;
        }

        // If largest is not root
        if ($largest != $i) {
            $swap = $arr[$i];
            $arr[$i] = $arr[$largest];
            $arr[$largest] = $swap;

            // Recursively heapify the affected sub-tree
            $arr = $this->heapify($arr, $N, $largest);
        }
        return $arr;
    }

// main function to do heap sort
    private function heapSort($arr, $N): array
    {
        // Build heap (rearrange array)
        for ($i = $N / 2 - 1; $i >= 0; $i--)
            $arr = $this->heapify($arr, $N, $i);

        // One by one extract an element from heap
        for ($i = $N - 1; $i > 0; $i--) {
            // Move current root to end
            $temp = $arr[0];
            $arr[0] = $arr[$i];
            $arr[$i] = $temp;

            // call max heapify on the reduced heap
            $arr = $this->heapify($arr, $i, 0);
        }
        return $arr;
    }

}

?>