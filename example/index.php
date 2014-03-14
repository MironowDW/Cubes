<?php

require_once './autoloader.php';

$matrix = array(
    array(0, 1, 2, 3, 4),
    array(1, 2, 3, 4, 5),
    array(2, 3, 4, 5, 6),
    array(3, 4, 5, 6, 7),
    array(4, 5, 6, 7, 8),
);

$image = new \Cubes\Image($matrix, new \Cubes\Config(30, 30, 1));
$image->addColor(0, new \Cubes\Color(204, 229, 255));
$image->addColor(1, new \Cubes\Color(153, 204, 255));
$image->addColor(2, new \Cubes\Color(102, 178, 255));
$image->addColor(3, new \Cubes\Color(51, 153, 255));
$image->addColor(4, new \Cubes\Color(0, 128, 255));
$image->addColor(5, new \Cubes\Color(0, 102, 204));
$image->addColor(6, new \Cubes\Color(0, 76, 153));
$image->addColor(7, new \Cubes\Color(0, 51, 102));
$image->addColor(8, new \Cubes\Color(0, 25, 51));
$image->generate();
$image->printImage();