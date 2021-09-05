<?php

    function exponentiation(int $a): array
    {
        $result = $a * $a;
        $arr[] = $result;

        $result = $result * $result;
        $arr[] = $result;

        $result = $result * $result;
        $arr[] = $result;

        return $arr;
    }