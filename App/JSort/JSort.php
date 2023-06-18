<?php

namespace App\JSort;

use App\MyInterFace\JamSortInterface;

class JSort
{
    private JamSortInterface $jsort;

    public function __construct(JamSortInterface $s)
    {
        $this->jsort = $s;
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