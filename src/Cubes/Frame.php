<?php

namespace Cubes;

use Cubes\Config\Config;
use Cubes\Config\Standart;

class Frame
{
    private $config;

    private $height;
    private $width;

    private $rows = array();

    public function __construct(array $matrix, Config $config = null)
    {
        $this->config = (!is_null($config)) ? $config : new Standart();
        $this->matrix = $matrix;
    }

    public function generate()
    {
        $this->calculateHeight();
        $this->calculateWidth();

        $nullY = 0;
        $rowCount = 1;
        $isFirstRow = true;
        $countRow = 1;
        foreach($this->matrix as $row) {
            $countCube = 1;
            $isFirstCube = true;
            $isLasRow = count($this->matrix) == $countRow;
            $nullX = 0;
            $_row = array();
            $cubeCount = 1;
            foreach($row as $cube) {
                $isLastCube = count($row) == $countCube;
                $_row[] = new Cube(
                    $cube,
                    $nullX,
                    $nullY,
                    $nullX + $this->getConfig()->getCubeWidth() - 1,
                    $nullY + $this->getConfig()->getCubeHeight() - 1
                );
                $nullX += $this->getConfig()->getCubeWidth();
                $cubeCount++;
                $isFirstCube = false;
            }
            $nullY += $this->getConfig()->getCubeHeight();
            $this->rows[] = $_row;
            $rowCount++;
            $isFirstRow = false;
        }
    }

    private function calculateHeight()
    {
        $colCount = count($this->matrix[0]);

        $height = $colCount * $this->getConfig()->getCubeHeight();
        $height += ($this->getConfig()->getMargin() * 2) + (($colCount > 1) ? ($this->getConfig()->getMargin() * ($colCount - 2)) : 0);

        $this->setHeight($height);
    }

    private function calculateWidth()
    {
        $rowCount = count($this->matrix);

        $width = $rowCount * $this->getConfig()->getCubeWidth();
        $width += ($this->getConfig()->getMargin() * 2) + (($rowCount > 1) ? ($this->getConfig()->getMargin() * ($rowCount - 2)) : 0);

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

    public function getRows()
    {
        return $this->rows;
    }

}