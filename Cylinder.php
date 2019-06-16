<?php


class Cylinder
{
    public $radius;
    public $width;
    public $height;

    public function __construct($radius, $height, $width)
    {
        $this->radius = $radius;
        $this->height = $height;
        $this->width = $width;
    }

    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    public function getPerimeter($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    public function getBaseArea($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
}