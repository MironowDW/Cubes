<?php

namespace PatternGif\Generator;

use PatternGif\Color;
use PatternGif\Element;

class GdGenerator implements GeneratorInterface
{

    protected $resource;

    public function initImage($width, $height, Color $backgroundColor)
    {
        $this->resource = imagecreatetruecolor($width, $height);

        $background = $this->convertColor($backgroundColor);

        imagefilledrectangle($this->resource, 0, 0, $width, $height, $background);
    }

    public function drawRectangle(Element $cube, Color $color)
    {
        $color = $this->convertColor($color);

        imagefilledrectangle($this->resource, $cube->getPointX1(), $cube->getPointY1(), $cube->getPointX2(), $cube->getPointY2(), $color);
    }

    public function drawPolygon(array $points, $pointsCount, Color $color)
    {
        $color = $this->convertColor($color);

        imagefilledpolygon($this->resource, $points, $pointsCount, $color);
    }

    public function printImage()
    {
        imagepng($this->resource);
        imagedestroy($this->resource);
    }

    public function saveImage($path)
    {
        imagepng($this->resource, $path);
        imagedestroy($this->resource);
    }

    protected function convertColor(Color $color)
    {
        return imagecolorallocate($this->resource, $color->getRed(), $color->getGreen(), $color->getBlue());
    }
}