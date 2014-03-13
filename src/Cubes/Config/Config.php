<?php

namespace Cubes\Config;

class Config
{

    protected $colorExchange = array();
    protected $cubeHeight = 30;
    protected $cubeWidth = 30;
    protected $margin = 0;

    public function __construct($cubeHeight, $cubeWidth, $margin, array $colorExchange = array())
    {
        $this->cubeHeight = $cubeHeight;
        $this->cubeWidth = $cubeWidth;
        $this->margin = $margin;
        $this->colorExchange = $colorExchange;
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

    public function addColor($key, array $color)
    {
        $this->colorExchange[$key] = $color;
    }

    public function getColor($key)
    {
        if(!array_key_exists($key, $this->colorExchange)) {
            throw new \ErrorException('Unknown color');
        }

        return $this->colorExchange[$key];
    }


}