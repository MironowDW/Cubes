<?php

require_once './autoloader.php';

$matrix = array(
    array(0),
);

$config = new \Cubes\Config\Config(100, 100, 10);
$config->addColor(0, array(255, 0, 0));
$config->addColor(1, array(255, 255, 255));

$image = new \Cubes\Image($matrix, $config);
$image->generate();
$image->printImage();