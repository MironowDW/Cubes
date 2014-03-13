<?php

namespace Cubes\Config;

class Standart extends Config
{

    public function __construct()
    {
        parent::__construct(100, 100, 0);

        $this->addColor(0, array(255, 0, 0));
        $this->addColor(1, array(255, 255, 255));
    }

}