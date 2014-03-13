<?php

class FrameTest extends \PHPUnit_Framework_TestCase
{

    public function testRowsWithoutMargin3x1()
    {
        $frame = $this->buildFrame($this->genMatrix(3,1), 10, 10);
        $rows = $frame->getRows();

        $this->assertEquals($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEquals($this->compactCube(0, 10, 9, 19), $rows[1][0]);
        $this->assertEquals($this->compactCube(0, 20, 9, 29), $rows[2][0]);
    }

    public function testRowsWithoutMargin1x3()
    {
        $frame = $this->buildFrame($this->genMatrix(1,3), 10, 10);
        $rows = $frame->getRows();

        $this->assertEquals($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEquals($this->compactCube(10, 0, 19, 9), $rows[0][1]);
        $this->assertEquals($this->compactCube(20, 0, 29, 9), $rows[0][2]);
    }

    public function testRowsWithoutMargin2x2()
    {
        $frame = $this->buildFrame($this->genMatrix(2,2), 10, 10);
        $rows = $frame->getRows();

        $this->assertEquals($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEquals($this->compactCube(10, 0, 19, 9), $rows[0][1]);
        $this->assertEquals($this->compactCube(0, 10, 9, 19), $rows[1][0]);
        $this->assertEquals($this->compactCube(10, 10, 19, 19), $rows[1][1]);
    }

    public function testRowsWithoutMargin1x2()
    {
        $frame = $this->buildFrame($this->genMatrix(1,2), 10, 10);
        $rows = $frame->getRows();

        $this->assertEquals($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEquals($this->compactCube(10, 0, 19, 9), $rows[0][1]);
    }

    public function testRowsWithoutMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 10, 10);
        $rows = $frame->getRows();

        $this->assertEquals($this->compactCube(0, 0, 9, 9), $rows[0][0]);
    }

    public function testRowsWithMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 100, 100, 10);
        $rows = $frame->getRows();

        $this->assertEquals($this->compactCube(10, 10, 100, 100), $rows[0][0]);
    }

    public function testHeightWidthWithoutMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 10, 10);

        $this->assertEquals(10, $frame->getHeight());
        $this->assertEquals(10, $frame->getWidth());
    }

    public function testHeightWidthWithMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 10, 10, 1);

        $this->assertEquals(12, $frame->getHeight());
        $this->assertEquals(12, $frame->getWidth());
    }

    public function testHeightWidthWithMargin1x3()
    {
        $frame = $this->buildFrame($this->genMatrix(3,1), 100, 100, 0);

        $this->assertEquals(100, $frame->getHeight());
        $this->assertEquals(300, $frame->getWidth());
    }

    public function testHeightWidthWithMargin3x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,3), 100, 100, 0);

        $this->assertEquals(300, $frame->getHeight());
        $this->assertEquals(100, $frame->getWidth());
    }

    private function buildFrame($matrix, $height, $width, $margin = 0)
    {
        $config = new \Cubes\Config\Config($height, $width, $margin);
        $frame  = new \Cubes\Frame($matrix, $config);
        $frame->generate();

        return $frame;
    }

    private function compactCube($x1, $y1, $x2, $y2)
    {
        return new \Cubes\Cube(1, $x1, $y1, $x2, $y2);
    }

    private function genMatrix($width, $height)
    {
        $matrix = array();

        for($i = 1; $i <= $width ; $i++) {
            $row = array();
            for($k = 1;$k <= $height; $k++) {
                $row[] = 1;
            }
            $matrix[] = $row;
        }
        return $matrix;
    }

}