Cubes
=====

Cubes - это библиотека для генерации картинок состоящих из квадратов

Пример генерации картинки:

![My image](http://ru.gravatar.com/userimage/62595973/2bf09dfbf632e71b6feca277e5caf576.png)

```php
<?php

$matrix = array(
    array(0, 0, 1, 0, 0),
    array(1, 0, 0, 0, 1),
    array(0, 1, 0, 1, 0),
    array(0, 1, 1, 1, 0),
    array(0, 1, 1, 1, 0),
);

$config = new \Cubes\Config\Config(30, 30, 2);
$config->addColor(0, array(255, 0, 0));
$config->addColor(1, array(255, 255, 255));

$image = new \Cubes\Image($matrix, $config);
$image->generate();
$image->printImage();
```

