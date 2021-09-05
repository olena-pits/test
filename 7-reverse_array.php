<?php

    function reverseArray(array $arr): array
    {
        $reversedArr = [];

        for ($i = count($arr); $i >= 1; $i--) {
            $reversedArr[] = $i;
        }

        return $reversedArr;
    }
