<?php

namespace PatternGif;

use PatternGif\Generator\GeneratorInterface;

class Letter
{

    protected $generator;
    protected $config;

    public function __construct(GeneratorInterface $generator = null, array $letterConfig = null)
    {
        $this->generator = $generator;
        $this->config = $letterConfig ? $letterConfig : $this->getDefaultConfig();
    }

    public function generate($letter)
    {
        if (!array_key_exists($letter, $this->config)) {
            throw new \Exception('Letter not found');
        }

        $pattern = $this->config[$letter]['pattern'];
        $image = new Image($pattern, $this->generator);
        $shapes = isset($this->config[$letter]['shapes']) ? $this->config[$letter]['shapes'] : [];

        foreach ($shapes as $key => $shape) {
            $image->addShape($key, $shape);
        }

        return $image;
    }

    protected function getDefaultConfig()
    {
        return array_merge(
            require dirname(__DIR__) . '/config/letter.russian.php',
            require dirname(__DIR__) . '/config/letter.english.php'
        );
    }
}