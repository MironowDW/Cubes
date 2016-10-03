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
    'К' => [
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
    'Л' => [
        'pattern' => [
            [0, 1, 1, 1],
            [0, 1, 0, 1],
            [0, 1, 0, 1],
            [0, 1, 0, 1],
            [2, 1, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
        ],
    ],
    'М' => [
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
    'Н' => [
        'pattern' => [
            [1, 0, 1],
            [1, 0, 1],
            [1, 1, 1],
            [1, 0, 1],
            [1, 0, 1],
        ],
    ],
    'О' => [
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
    'П' => [
        'pattern' => [
            [1, 1, 1],
            [1, 0, 1],
            [1, 0, 1],
            [1, 0, 1],
            [1, 0, 1],
        ],
    ],
    'Р' => [
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
    'С' => [
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
    'Т' => [
        'pattern' => [
            [1, 1, 1],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
            [0, 1, 0],
        ],
    ],
    'У' => [
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
    'Ф' => [
        'pattern' => [
            [2, 1, 1, 1, 3],
            [1, 0, 1, 0, 1],
            [5, 1, 1, 1, 4],
            [0, 0, 1, 0, 0],
            [0, 0, 1, 0, 0],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'Х' => [
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
    'Ц' => [
        'pattern' => [
            [1, 0, 1, 0],
            [1, 0, 1, 0],
            [1, 0, 1, 0],
            [1, 0, 1, 0],
            [1, 1, 1, 2],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'Ч' => [
        'pattern' => [
            [1, 0, 1],
            [1, 0, 1],
            [2, 1, 1],
            [0, 0, 1],
            [0, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
        ],
    ],
    'Ш' => [
        'pattern' => [
            [1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1],
            [1, 0, 1, 0, 1],
            [1, 1, 1, 1, 1],
        ],
    ],
    'Щ' => [
        'pattern' => [
            [1, 0, 1, 0, 1, 0],
            [1, 0, 1, 0, 1, 0],
            [1, 0, 1, 0, 1, 0],
            [1, 0, 1, 0, 1, 0],
            [1, 1, 1, 1, 1, 2],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomLeft::class,
        ],
    ],
    'Ъ' => [
        'pattern' => [
            [2, 1, 0, 0],
            [0, 1, 0, 0],
            [0, 1, 1, 3],
            [0, 1, 0, 1],
            [0, 1, 1, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleTopRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Ы' => [
        'pattern' => [
            [1, 0, 0, 1],
            [1, 0, 0, 1],
            [1, 1, 3, 1],
            [1, 0, 1, 1],
            [1, 1, 4, 1],
        ],
        'shapes' => [
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Ь' => [
        'pattern' => [
            [1, 0, 0],
            [1, 0, 0],
            [1, 1, 3],
            [1, 0, 1],
            [1, 1, 4],
        ],
        'shapes' => [
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
        ],
    ],
    'Э' => [
        'pattern' => [
            [2, 1, 3],
            [0, 0, 1],
            [0, 1, 1],
            [0, 0, 1],
            [5, 1, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'Ю' => [
        'pattern' => [
            [1, 0, 2, 1, 3],
            [1, 0, 1, 0, 1],
            [1, 1, 1, 0, 1],
            [1, 0, 1, 0, 1],
            [1, 0, 5, 1, 4],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleBottomLeft::class,
            4 => ShapeTriangleTopLeft::class,
            5 => ShapeTriangleTopRight::class,
        ],
    ],
    'Я' => [
        'pattern' => [
            [2, 1, 1],
            [1, 0, 1],
            [3, 1, 1],
            [2, 4, 1],
            [4, 0, 1],
        ],
        'shapes' => [
            2 => ShapeTriangleBottomRight::class,
            3 => ShapeTriangleTopRight::class,
            4 => ShapeTriangleTopLeft::class,
        ],
    ],
];