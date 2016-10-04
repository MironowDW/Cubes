<?php

use PatternGif\Shape\ShapeTriangleBottomRight;
use PatternGif\Shape\ShapeTriangleBottomLeft;
use PatternGif\Shape\ShapeTriangleTopLeft;
use PatternGif\Shape\ShapeTriangleTopRight;

return [
    'A' => [
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
    'B' => [
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
    'C' => [
        'pattern' => [
            [2, 1, 3],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [5, 1, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'D' => [
        'pattern' => [
            [1, 1, 2],
            [1, 0, 1],
            [1, 0, 1],
            [1, 0, 1],
            [1, 1, 3],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
            3 => ShapeTriangleTopLeft::class,
        ],
    ],
    'E' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 1],
        ],
    ],
    'F' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 0],
            [1, 1, 0],
            [1, 0, 0],
            [1, 0, 0],
        ],
    ],
    'G' => [
        'pattern' => [
            [2, 1, 1, 3],
            [1, 0, 0, 0],
            [1, 0, 2, 3],
            [1, 0, 0, 1],
            [5, 1, 1, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'H' => [
        'pattern' => [
            [1, 0, 1],
            [1, 0, 1],
            [1, 1, 1],
            [1, 0, 1],
            [1, 0, 1],
        ],
    ],
    'I' => [
        'pattern' => [
            [1, 1, 1],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
            [1, 1, 1],
        ],
    ],
    'J' => [
        'pattern' => [
            [0, 0, 1],
            [0, 0, 1],
            [0, 0, 1],
            [0, 0, 1],
            [3, 1, 2],
        ],
        'shapes' => [
            2 => ShapeTriangleTopLeft::class,
            3 => ShapeTriangleTopRight::class,
        ],
    ],
    'K' => [
        'pattern' => [
            [1, 0, 2],
            [1, 2, 3],
            [1, 1, 4],
            [1, 0, 1],
            [1, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleTopLeft::class,
            4 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'L' => [
        'pattern' => [
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 0, 0],
            [1, 1, 1],
        ],
    ],
    'M' => [
        'pattern' => [
            [1, 2, 0, 3, 1],
            [1, 5, 1, 4, 1],
            [1, 0, 1, 0, 1],
            [1, 0, 0, 0, 1],
            [1, 0, 0, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
            3 => ShapeTriangleBottomRight::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'N' => [
        'pattern' => [
            [2, 0, 0, 1],
            [1, 2, 0, 1],
            [1, 3, 2, 1],
            [1, 0, 3, 1],
            [1, 0, 0, 3],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
            3 => ShapeTriangleTopRight::class,
        ],
    ],
    'O' => [
        'pattern' => [
            [2, 1, 3],
            [1, 0, 1],
            [1, 0, 1],
            [1, 0, 1],
            [5, 1, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'P' => [
        'pattern' => [
            [1, 1, 2],
            [1, 0, 1],
            [1, 1, 3],
            [1, 0, 0],
            [1, 0, 0],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
            3 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Q' => [
        'pattern' => [
            [2, 1, 3, 0],
            [1, 0, 1, 0],
            [1, 0, 1, 0],
            [1, 0, 1, 0],
            [4, 1, 1, 3],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopRight::class,
        ],
    ],
    'R' => [
        'pattern' => [
            [1, 1, 2],
            [1, 0, 1],
            [1, 1, 3],
            [1, 4, 2],
            [1, 0, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
            3 => ShapeTriangleTopLeft::class,
            4 => ShapeTriangleTopRight::class,
        ],
    ],
    'S' => [
        'pattern' => [
            [2, 1, 1],
            [1, 0, 0],
            [3, 1, 4],
            [0, 0, 1],
            [1, 1, 5],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleTopRight::class,
            4 => ShapeTriangleBottomLeft::class,
            5 => ShapeTriangleTopLeft::class,
        ],
    ],
    'T' => [
        'pattern' => [
            [1, 1, 1],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
        ],
    ],
    'U' => [
        'pattern' => [
            [1, 0, 1],
            [1, 0, 1],
            [1, 0, 1],
            [1, 0, 1],
            [2, 1, 3],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
            3 => ShapeTriangleTopLeft::class,
        ],
    ],
    'V' => [
        'pattern' => [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [2, 3, 4, 5],
            [0, 2, 5, 0],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleBottomRight::class,
            5 => ShapeTriangleTopLeft::class,
        ],
    ],
    'W' => [
        'pattern' => [
            [1, 0, 0, 0, 1],
            [1, 0, 0, 0, 1],
            [1, 0, 1, 0, 1],
            [1, 3, 1, 2, 1],
            [1, 4, 0, 5, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
            3 => ShapeTriangleBottomRight::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'X' => [
        'pattern' => [
            [1, 0, 0, 1],
            [2, 3, 4, 5],
            [0, 1, 1, 0],
            [4, 5, 2, 3],
            [1, 0, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleBottomRight::class,
            5 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Y' => [
        'pattern' => [
            [1, 0, 1],
            [1, 0, 1],
            [2, 1, 1],
            [0, 0, 1],
            [2, 1, 3],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
            3 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Z' => [
        'pattern' => [
            [1, 1, 1, 1],
            [0, 0, 3, 2],
            [0, 3, 2, 0],
            [3, 2, 0, 0],
            [1, 1, 1, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopLeft::class,
            3 => ShapeTriangleBottomRight::class,
        ],
    ],
];