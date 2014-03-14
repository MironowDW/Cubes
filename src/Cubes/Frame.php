<?php

namespace Cubes;

use Cubes\Config;

class Frame
{
    private $config;

    private $height;
    private $width;

    /** @var Cube[] */
    private $cubes = array();

    public function __construct(array $matrix, Config $config)
    {
        $this->config = $config;
        $this->matrix = $matrix;
    }

    public function generate()
    {
        $this->calculateHeight();
        $this->calculateWidth();

        $margin = $this->getConfig()->getMargin();

        $nullY = 0;
        foreach($this->matrix as $row) {
            $nullX = 0;
            foreach($row as $cube) {
                $this->cubes[] = new Cube(
                    $cube,
                    $nullX + $margin,
                    $nullY + $margin,
                    $nullX + $this->getConfig()->getCubeWidth() - 1 + $margin,
                    $nullY + $this->getConfig()->getCubeHeight() - 1 + $margin
                );
                $nullX += $this->getConfig()->getCubeWidth() + $margin;
            }
            $nullY += $this->getConfig()->getCubeHeight() + $margin;
        }
    }

    private function calculateHeight()
    {
        $colCount = count($this->matrix[0]);
        $margin = $this->getConfig()->getMargin();

        $height = $colCount * $this->getConfig()->getCubeHeight();
        $height += ($colCount * $margin) + $margin;

        $this->setHeight($height);
    }

    private function calculateWidth()
    {
        $rowCount = count($this->matrix);
        $margin = $this->getConfig()->getMargin();

        $width = $rowCount * $this->getConfig()->getCubeWidth();
        $width += ($rowCount * $margin) + $margin;

        $this->setWidth($width);
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function getCubes()
    {
        return $this->cubes;
    }

}