<?php

namespace Cubes;

class Color
{

    private $red;
    private $green;
    private $blue;

    function __construct($red, $green, $blue)
    {
        $this->blue = $blue;
        $this->green = $green;
        $this->red = $red;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function getRed()
    {
        return $this->red;
    }

}