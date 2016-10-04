<?php

namespace PatternGif\Shape;

use PatternGif\Color;
use PatternGif\Element;
use PatternGif\Generator\GeneratorInterface;

/**
 *      #
 *    # #
 *  #   #
 * ######
 *
 * Class TriangleBottomLeftShape
 * @package PatternGif\Shape
 */
class ShapeTriangleBottomRight implements ShapeInterface
{

    public function draw(GeneratorInterface $generator, Element $element, Color $color)
    {
        $points = [
            $element->getPointX2(), $element->getPointY1(),
            $element->getPointX2(), $element->getPointY2(),
            $element->getPointX1(), $element->getPointY2(),
        ];

        $generator->drawPolygon($points, 3, $color);
    }
}
