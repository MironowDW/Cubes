<?php

namespace PatternGif;

use PatternGif\Generator\GdGenerator;
use PatternGif\Generator\GeneratorInterface;

class Image
{

    private $elementHeight = 30;
    private $elementWidth = 30;
    private $elementMargin = 1;

    private $backgroundColor;
    private $pattern;

    private $isGenerated = false;

    /**
     * @var Color[]
     */
    private $colors = [];

    /**
     * @var GeneratorInterface
     */
    private $generator;

    public function __construct(array $pattern, GeneratorInterface $generator = null)
    {
        $this->pattern = $pattern;
        $this->backgroundColor = new Color(255, 255, 255);
        $this->generator = $generator ? $generator : new GdGenerator();

        $this->addColor(0, new Color(0, 0, 0));
        $this->addColor(1, new Color(255, 255, 255));
    }

    /**
     * @return int
     */
    public function getElementHeight()
    {
        return $this->elementHeight;
    }

    /**
     * @param int $elementHeight
     */
    public function setElementHeight($elementHeight)
    {
        $this->elementHeight = $elementHeight;
    }

    /**
     * @return int
     */
    public function getElementWidth()
    {
        return $this->elementWidth;
    }

    /**
     * @param int $elementWidth
     */
    public function setElementWidth($elementWidth)
    {
        $this->elementWidth = $elementWidth;
    }

    /**
     * @return int
     */
    public function getElementMargin()
    {
        return $this->elementMargin;
    }

    /**
     * @param int $elementMargin
     */
    public function setElementMargin($elementMargin)
    {
        $this->elementMargin = $elementMargin;
    }

    /**
     * @param Color $backgroundColor
     */
    public function setBackgroundColor(Color $backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function generate()
    {
        if ($this->isGenerated) {
            return;
        }

        $height = $this->calculateHeight();
        $width = $this->calculateWidth();

        $this->generator->initImage($width, $height, $this->backgroundColor);

        foreach($this->generateElements() as $element) {
            $color = $this->getColor($element->getKey());

            $this->generator->drawRectangle($element, $color);
        }

        $this->isGenerated = true;
    }

    /**
     * @return Element[]
     */
    public function generateElements()
    {
        $margin = $this->elementMargin;
        $elements = [];

        $nullY = 0;
        foreach($this->pattern as $row) {
            $nullX = 0;
            foreach($row as $cube) {
                $elements[] = new Element(
                    $cube,
                    $nullX + $margin,
                    $nullY + $margin,
                    $nullX + $this->elementWidth - 1 + $margin,
                    $nullY + $this->elementHeight - 1 + $margin
                );
                $nullX += $this->elementWidth + $margin;
            }
            $nullY += $this->elementHeight + $margin;
        }

        return $elements;
    }

    private function calculateHeight()
    {
        $colCount = count($this->pattern);
        $margin = $this->elementMargin;

        $height = $colCount * $this->elementHeight;
        $height += ($colCount * $margin) + $margin;

        return $height;
    }

    private function calculateWidth()
    {
        $rowCount = count($this->pattern[0]);
        $margin = $this->elementMargin;

        $width = $rowCount * $this->elementWidth;
        $width += ($rowCount * $margin) + $margin;

        return $width;
    }

    public function printImage()
    {
        $this->generate();

        $this->generator->printImage();
    }

    public function saveImage($path)
    {
        $this->generate();

        $this->generator->saveImage($path);
    }

    public function addColor($key, Color $color)
    {
        $this->colors[$key] = $color;
    }

    public function getColor($key)
    {
        if(!array_key_exists($key, $this->colors)) {
            throw new \ErrorException('Unknown color');
        }

        return $this->colors[$key];
    }
}