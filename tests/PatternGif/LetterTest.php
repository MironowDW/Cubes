<?php

class LetterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function shouldGenerateRussianA()
    {
        $letter = new \PatternGif\Letter();
        $image = $letter->generate('А');

        $this->assertPng(__DIR__ . '/letters/russian_A.png', $image);
    }

    protected function assertPng($expectedFile, \PatternGif\Image $actualImage)
    {
        $actualFile = str_replace('.png', '_actual.png', $expectedFile);
        $actualImage->saveImage($actualFile);

        $this->assertImage($expectedFile, $actualFile);
    }

    /**
     * sudo apt-get install imagemagick
     *
     * @param $expected
     * @param $actual
     * @param string $message
     */
    protected function assertImage($expected, $actual, $message = '')
    {
        $descriptors = array(
            array('pipe', 'r'),
            array('pipe', 'w'),
            array('pipe', 'w'),
        );
        $command = 'compare -metric RMSE ' . escapeshellarg($expected) . ' ' . escapeshellarg($actual) . ' /dev/null';
        $proc = proc_open($command, $descriptors, $pipes);

        $diff = stream_get_contents($pipes[2]);
        fclose($pipes[0]);
        fclose($pipes[1]);
        fclose($pipes[2]);

        preg_match('#\((.+)\)#', $diff, $match);

        $this->assertArrayHasKey(1, $match, 'Compare error');
        $this->assertLessThan(0.05, floatval($match[1]), $message);
    }
}
