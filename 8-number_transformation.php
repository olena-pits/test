<?php

    function numberTransformation(int $number): int
    {
        $i = 0;

        if ($number < 1 || $number > 109) {
           throw new InvalidArgumentException('Number must be between 1 and 109');
        }

        while ($number > 1)  {
            if ($number % 2 === 0) {
                $number = $number / 2;
            } else {
                $number = $number + 1;
            }
            $i++;
        };

        return $i;
    }