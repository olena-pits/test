<?php


class Rectangle
{
    private int $height;
    private int $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function square(): int
    {
        return $this->height * $this->width;
    }

    public function perimeter(): int
    {
        return 2 * ($this->height + $this->width);
    }
}