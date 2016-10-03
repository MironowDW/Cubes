<?php

namespace PatternGif\Generator;

use PatternGif\Color;
use PatternGif\Element;

interface GeneratorInterface
{

    public function initImage($width, $height, Color $backgroundColor);

    public function drawRectangle(Element $cube, Color $backgroundColor);

    public function printImage();
    public function saveImage($path);
}