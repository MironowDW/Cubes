<?php

namespace PatternGif\Generator;

use PatternGif\Color;
use PatternGif\Element;

interface GeneratorInterface
{

    public function initImage($width, $height, Color $backgroundColor);

    public function drawRectangle(Element $cube, Color $backgroundColor);

    public function print();
    public function save($path);
}