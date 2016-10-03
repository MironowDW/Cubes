<?php

namespace PatternGif\Shape;

use PatternGif\Color;
use PatternGif\Element;
use PatternGif\Generator\GeneratorInterface;

/**
 * ######
 *  #   #
 *    # #
 *      #
 * Class TriangleBottomLeftShape
 * @package PatternGif\Shape
 */
class ShapeTriangleTopRight implements ShapeInterface
{

    public function draw(GeneratorInterface $generator, Element $element, Color $color)
    {
        $points = [
            $element->getX1(), $element->getY1(),
            $element->getX2(), $element->getY1(),
            $element->getX2(), $element->getY2(),
        ];

        $generator->drawPolygon($points, 3, $color);
    }
}
