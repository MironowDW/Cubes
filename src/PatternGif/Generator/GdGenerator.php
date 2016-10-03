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

        imagefilledrectangle($this->resource, $cube->getX1(), $cube->getY1(), $cube->getX2(), $cube->getY2(), $color);
    }

    /**
     * TODO
     */
    public function drawEllipse(Element $cube, Color $color)
    {
        $color = $this->convertColor($color);
//$cx
//$cy
//$width
//$height
        imagefilledellipse(
            $this->resource,
            (($cube->getX2() - $cube->getX1()) / 2),
            (($cube->getY2() - $cube->getY1()) / 2),
            ($cube->getX2() - $cube->getX1()),
            ($cube->getY2() - $cube->getY1()),
            $color
        );
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