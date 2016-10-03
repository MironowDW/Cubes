<?php

namespace PatternGif\Shape;

use PatternGif\Color;
use PatternGif\Element;
use PatternGif\Generator\GeneratorInterface;

interface ShapeInterface
{

    public function draw(GeneratorInterface $generator, Element $element, Color $color);
}
