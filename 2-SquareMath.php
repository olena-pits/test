<?php


class SquareMath
{
    public static function addition(int $a, int $b): int
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException('Numbers must be greater than zero');
        }

        return $a ** 2 + $b ** 2;

    }

    public static function subtraction(int $a, int $b): int
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException('Numbers must be greater than zero');
        }

        return $a ** 2 - $b ** 2;
    }

    public static function multiplication(int $a, int $b): int
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException('Numbers must be greater than zero');
        }

        return $a ** 2 * $b ** 2;
    }

    public static function division(int $a, int $b): int
    {
        if ($a <= 0 || $b <= 0) {
            throw new InvalidArgumentException('Numbers must be greater than zero');
        }

        return $a ** 2 / $b ** 2;
    }
}