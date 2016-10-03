<?php

namespace PatternGif\Shape;

use PatternGif\Color;
use PatternGif\Element;
use PatternGif\Generator\GeneratorInterface;

class EmptyShape implements ShapeInterface
{

    public function draw(GeneratorInterface $generator, Element $element, Color $color)
    {

    }
}
