<?php

namespace Cubes;

class Config
{

    protected $cubeHeight = 30;
    protected $cubeWidth = 30;
    protected $margin = 0;

    public function __construct($cubeHeight, $cubeWidth, $margin)
    {
        $this->cubeHeight = $cubeHeight;
        $this->cubeWidth = $cubeWidth;
        $this->margin = $margin;
    }

    public function setCubeHeight($cubeHeight)
    {
        $this->cubeHeight = $cubeHeight;
    }

    public function getCubeHeight()
    {
        return $this->cubeHeight;
    }

    public function setCubeWidth($cubeWidth)
    {
        $this->cubeWidth = $cubeWidth;
    }

    public function getCubeWidth()
    {
        return $this->cubeWidth;
    }

    public function setMargin($margin)
    {
        $this->margin = $margin;
    }

    public function getMargin()
    {
        return $this->margin;
    }

}