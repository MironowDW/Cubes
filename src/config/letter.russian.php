<?php

use PatternGif\Shape\ShapeTriangleBottomRight;
use PatternGif\Shape\ShapeTriangleBottomLeft;
use PatternGif\Shape\ShapeTriangleTopLeft;

return [
    'А' => [
        'pattern' => [
            [2, 1, 3],
            [1, 0, 1],
            [1, 1, 1],
            [1, 0, 1],
            [1, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'Б' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 2],
            [1, 0, 1],
            [1, 1, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'В' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 2],
            [1, 1, 3],
            [1, 0, 1],
            [1, 1, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopLeft::class,
            3 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'Г' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
        ],
    ],
    'Д' => [
        'pattern' => [
            [0, 1, 1, 1, 0],
            [0, 1, 0, 1, 0],
            [0, 1, 0, 1, 0],
            [2, 1, 1, 1, 3],
            [1, 0, 0, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
        ],
    ],
];