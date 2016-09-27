<?php

namespace Cubes\Generator;

use Cubes\Color;
use Cubes\Element;

interface GeneratorInterface
{

    public function initImage($width, $height, Color $backgroundColor);

    public function drawRectangle(Element $cube, Color $backgroundColor);

    public function print();
    public function save($path);
}