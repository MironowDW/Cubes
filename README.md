PatternGif
![Travis](https://travis-ci.org/MironowDW/PatternGif.svg?branch=master)
========

PatternGif - это библиотека для генерации картинок состоящих из квадратов

Пример генерации картинки:

![Example](http://cs14107.vk.me/c614721/v614721749/771c/A52D_c0tkTc.jpg)

```php
<?php

$pattern = [
    [0, 1, 2, 3, 4],
    [1, 2, 3, 4, 5],
    [2, 3, 4, 5, 6],
    [3, 4, 5, 6, 7],
    [4, 5, 6, 7, 8],
];

$image = new \PatternGif\Image($pattern);
$image->addColor(0, new \PatternGif\Color(204, 229, 255));
$image->addColor(1, new \PatternGif\Color(153, 204, 255));
$image->addColor(2, new \PatternGif\Color(102, 178, 255));
$image->addColor(3, new \PatternGif\Color(51, 153, 255));
$image->addColor(4, new \PatternGif\Color(0, 128, 255));
$image->addColor(5, new \PatternGif\Color(0, 102, 204));
$image->addColor(6, new \PatternGif\Color(0, 76, 153));
$image->addColor(7, new \PatternGif\Color(0, 51, 102));
$image->addColor(8, new \PatternGif\Color(0, 25, 51));
$image->generate();
$image->printImage();
```

