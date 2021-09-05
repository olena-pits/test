<?php

    function getSum(int $startNumber, int $endNumber): int
    {
        $sum = 0;

        if ($startNumber >= $endNumber) {
            throw new InvalidArgumentException('Start number must be less than end number');
        }

        for ($i = $startNumber; $i <= $endNumber; $i++) {
            $sum += $i;
        }

        return $sum;
    }