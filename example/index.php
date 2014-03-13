<?php

require_once './autoloader.php';

$matrix = array(
    array(0, 0, 1, 0, 0),
    array(1, 0, 0, 0, 1),
    array(0, 1, 0, 1, 0),
    array(0, 1, 1, 1, 0),
    array(1, 1, 1, 1, 1),
);

$config = new \Cubes\Config\Config(30, 30, 2);
$config->addColor(0, array(255, 0, 0));
$config->addColor(1, array(255, 255, 255));

$image = new \Cubes\Image($matrix, $config);
$image->generate();
$image->printImage();