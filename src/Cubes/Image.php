<?php

namespace Cubes;

use Cubes\Config;

class Image
{

    private $config;
    private $matrix;
    private $image;

    /** @var Color[] */
    private $colors = array();

    public function __construct(array $matrix, Config $config)
    {
        $this->config = $config;
        $this->matrix = $matrix;

        $this->addColor(0, new Color(0, 0, 0));
        $this->addColor(1, new Color(255, 255, 255));
    }

    public function generate()
    {
        $frame = new Frame($this->matrix, $this->getConfig());
        $frame->generate();

        $image = imagecreatetruecolor($frame->getHeight(), $frame->getWidth());
        imagefilledrectangle($image, 0, 0, $frame->getHeight(), $frame->getWidth(), imagecolorallocate($image, 255, 255, 255));

        foreach($frame->getCubes() as $cube) {
            $color = $this->getColor($cube->getKey());
            $color = imagecolorallocate($image, $color->getRed(), $color->getGreen(), $color->getBlue());

            imagefilledrectangle($image, $cube->getX1(), $cube->getY1(), $cube->getX2(), $cube->getY2(), $color);
        }

        $this->image = $image;
    }

    public function printImage()
    {
        header ('Content-Type: image/png');

        imagepng($this->image);
        imagedestroy($this->image);
    }

    public function addColor($key, Color $color)
    {
        $this->colors[$key] = $color;
    }

    public function getColor($key)
    {
        if(!array_key_exists($key, $this->colors)) {
            throw new \ErrorException('Unknown color');
        }

        return $this->colors[$key];
    }

    public function getConfig()
    {
        return $this->config;
    }

}