<?php

namespace Cubes;

use Cubes\Config\Config;
use Cubes\Config\Standart;

class Image
{

    private $config;
    private $matrix;
    private $image;

    public function __construct(array $matrix, Config $config = null)
    {
        $this->config = (!is_null($config)) ? $config : new Standart();
        $this->matrix = $matrix;
    }

    public function generate()
    {
        $frame = new Frame($this->matrix, $this->getConfig());
        $frame->generate();

        $image = imagecreatetruecolor($frame->getHeight(), $frame->getWidth());
        imagefilledrectangle($image, 0, 0, $frame->getHeight(), $frame->getWidth(), imagecolorallocate($image, 0, 0, 0));

        /** @var $row Cube[] */
        foreach($frame->getRows() as $row) {
            foreach($row as $cube) {
                $color = $this->getConfig()->getColor($cube->getKey());
                $color = imagecolorallocate($image, $color[0], $color[1], $color[2]);
                imagefilledrectangle($image, $cube->getX1(), $cube->getY1(), $cube->getX2(), $cube->getY2(), $color);
            }
        }

        $this->image = $image;
    }

    public function printImage()
    {
        header ('Content-Type: image/png');

        imagepng($this->image);
        imagedestroy($this->image);
    }

    public function getConfig()
    {
        return $this->config;
    }

}