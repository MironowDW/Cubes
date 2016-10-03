<?php

use PatternGif\Shape\ShapeTriangleBottomRight;
use PatternGif\Shape\ShapeTriangleBottomLeft;

return [
    // Russian
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
];