<?php

namespace PatternGif\Generator;

use PatternGif\Color;
use PatternGif\Element;

interface GeneratorInterface
{

    public function initImage($width, $height, Color $color);

    public function drawRectangle(Element $cube, Color $color);
    public function drawPolygon(array $points, $pointsCount, Color $color);

    public function printImage();
    public function saveImage($path);
}