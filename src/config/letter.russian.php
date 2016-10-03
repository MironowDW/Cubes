<?php

use PatternGif\Shape\ShapeTriangleBottomRight;
use PatternGif\Shape\ShapeTriangleBottomLeft;
use PatternGif\Shape\ShapeTriangleTopLeft;
use PatternGif\Shape\ShapeTriangleTopRight;

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
    'Е' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 1],
        ],
    ],
    'Ё' => [
        'pattern' => [
            [0, 2, 2],
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Ж' => [
        'pattern' => [
            [1, 0, 1, 0, 1],
            [2, 0, 1, 0, 3],
            [5, 1, 1, 1, 4],
            [1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
            3 => ShapeTriangleTopLeft::class,
            4 => ShapeTriangleBottomLeft::class,
            5 => ShapeTriangleBottomRight::class,
        ],
    ],
    'З' => [
        'pattern' => [
            [1, 1, 1],
            [0, 0, 2],
            [1, 1, 3],
            [0, 0, 1],
            [1, 1, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopLeft::class,
            3 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'И' => [
        'pattern' => [
            [1, 0, 0, 1],
            [1, 0, 2, 1],
            [1, 2, 3, 1],
            [1, 3, 0, 1],
            [1, 0, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Й' => [
        'pattern' => [
            [0, 0, 3, 0],
            [1, 0, 0, 1],
            [1, 0, 2, 1],
            [1, 2, 3, 1],
            [1, 3, 0, 1],
            [1, 0, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleTopLeft::class,
        ],
    ],
];