<?php

    function getSum(int $a, int $b, int $c): int
    {
        $array = [$a, $b, $c];
        $minValue = min($array);

        return array_sum(array_diff($array, [$minValue]));
    }