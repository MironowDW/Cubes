PatternGif
========
![Travis](https://travis-ci.org/MironowDW/PatternGif.svg?branch=master)
[![Test Coverage](https://codeclimate.com/github/MironowDW/PatternGif/badges/coverage.svg)](https://codeclimate.com/github/MironowDW/PatternGif/coverage)
[![Code Climate](https://codeclimate.com/github/MironowDW/PatternGif/badges/gpa.svg)](https://codeclimate.com/github/MironowDW/PatternGif)

PatternGif - это библиотека для генерации картинок состоящих из квадратов

### Простой пример на основе квадратов
![Example 1](https://s18.postimg.org/o70lk1aq1/readme_actual.png)

```php
<?php

$pattern = [
    [1, 1],
    [1, 1],
];

$image = new \PatternGif\Image($pattern);
$image->saveImage('/tmp/image.png');
```

### Меняем стандартный цвет
![Example 2](https://s17.postimg.org/mlcdgtj8f/1_red_box_30x30x1_actual.png)

```php
<?php

$pattern = [
    [1, 1],
    [1, 1],
];

$image = new \PatternGif\Image($pattern);
$image->setDefaultColor(new \PatternGif\Color(255, 0, 0));
$image->saveImage('/tmp/image.png');
```

### Добавляем свой цвет
![Example 3](https://s15.postimg.org/5rj2b5s5n/1_red_box_30x30x0_actual.png)

```php
<?php

$pattern = [
    [1, 1],
    [1, 2],
];

$image = new \PatternGif\Image($pattern);
$image->addColor(2, new \PatternGif\Color(0, 0, 255));
$image->saveImage('/tmp/image.png');
```

### Добавляем треугольники
![Example 4](https://s21.postimg.org/be1x0ww6v/1_black_box_30x30x0_actual.png)

```php
<?php

$pattern = [
    [2,1,3],
    [1,0,1],
    [5,1,4],
];

$image = new \PatternGif\Image($pattern);
$image->addShape(2, Shape\ShapeTriangleBottomRight::class);
$image->addShape(3, Shape\ShapeTriangleBottomLeft::class);
$image->addShape(4, Shape\ShapeTriangleTopLeft::class);
$image->addShape(5, Shape\ShapeTriangleTopRight::class);
$image->saveImage('/tmp/image.png');
```

### Выводим буквы (поддерживается русский и английский алфавит)
![Example Q](https://s10.postimg.org/schh62cpl/english_Q_actual.png)
![Example R](https://s12.postimg.org/wrbjmkpn1/english_R_actual.png)
![Example S](https://s14.postimg.org/hp2hm0f9d/english_S_actual.png)

```php
<?php

$letterGenerator = new \PatternGif\Letter();
$letterGenerator->generate('Q')->saveImage('/tmp/image_Q.png');
$letterGenerator->generate('R')->saveImage('/tmp/image_R.png');
$letterGenerator->generate('S')->saveImage('/tmp/image_S.png');
```
