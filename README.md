PatternGif
========
![Travis](https://travis-ci.org/MironowDW/PatternGif.svg?branch=master)

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

