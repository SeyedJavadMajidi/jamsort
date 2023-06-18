<?php

namespace App\MyInterFace;
interface JamSortInterface
{
    public function jSortAZ(array $array): array;

    public function jSortZA(array $array): array;
}

?>