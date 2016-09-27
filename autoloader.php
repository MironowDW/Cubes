<?php

// TODO remove, use composer autoloader

spl_autoload_register(
    function ($class)
    {
        $file = __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';

        if (file_exists($file)) {
            require $file;
        }
    }
);