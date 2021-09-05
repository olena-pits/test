<?php

function getCentury(int $year): int
{
    return ceil($year / 100);
}