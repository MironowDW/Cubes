<?php

class FrameTest extends \PHPUnit_Framework_TestCase
{

    public function testRowsWithMargin3x1()
    {
        $frame = $this->buildFrame($this->genMatrix(3,1), 100, 100, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(10, 10, 109, 109), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(10, 120, 109, 219), $rows[1][0]);
        $this->assertEqualsCube($this->compactCube(10, 230, 109, 329), $rows[2][0]);
    }

    public function testRowsWithMargin1x3()
    {
        $frame = $this->buildFrame($this->genMatrix(1,3), 100, 100, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(10, 10, 109, 109), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(120, 10, 219, 109), $rows[0][1]);
        $this->assertEqualsCube($this->compactCube(230, 10, 329, 109), $rows[0][2]);
    }

    public function testRowsWithoutMargin3x1()
    {
        $frame = $this->buildFrame($this->genMatrix(3,1), 10, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(0, 10, 9, 19), $rows[1][0]);
        $this->assertEqualsCube($this->compactCube(0, 20, 9, 29), $rows[2][0]);
    }

    public function testRowsWithoutMargin1x3()
    {
        $frame = $this->buildFrame($this->genMatrix(1,3), 10, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(10, 0, 19, 9), $rows[0][1]);
        $this->assertEqualsCube($this->compactCube(20, 0, 29, 9), $rows[0][2]);
    }

    public function testRowsWithoutMargin2x2()
    {
        $frame = $this->buildFrame($this->genMatrix(2,2), 10, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(10, 0, 19, 9), $rows[0][1]);
        $this->assertEqualsCube($this->compactCube(0, 10, 9, 19), $rows[1][0]);
        $this->assertEqualsCube($this->compactCube(10, 10, 19, 19), $rows[1][1]);
    }

    public function testRowsWithMargin1x2()
    {
        $frame = $this->buildFrame($this->genMatrix(1,2), 100, 100, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(10, 10, 109, 109), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(120, 10, 219, 109), $rows[0][1]);
    }

    public function testRowsWithoutMargin1x2()
    {
        $frame = $this->buildFrame($this->genMatrix(1,2), 10, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(0, 0, 9, 9), $rows[0][0]);
        $this->assertEqualsCube($this->compactCube(10, 0, 19, 9), $rows[0][1]);
    }

    public function testRowsWithoutMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 10, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(0, 0, 9, 9), $rows[0][0]);
    }

    public function testRowsWithMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 100, 100, 10);
        $rows = $frame->getRows();

        $this->assertEqualsCube($this->compactCube(10, 10, 109, 109), $rows[0][0]);
    }

    public function testHeightWidthWithoutMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 10, 10);

        $this->assertEquals(10, $frame->getHeight());
        $this->assertEquals(10, $frame->getWidth());
    }

    public function testHeightWidthWithMargin2x1()
    {
        $frame = $this->buildFrame($this->genMatrix(2,1), 100, 100, 10);

        $this->assertEquals(120, $frame->getHeight());
        $this->assertEquals(230, $frame->getWidth());
    }

    public function testHeightWidthWithMargin1x1()
    {
        $frame = $this->buildFrame($this->genMatrix(1,1), 10, 10, 1);

        $this->assertEquals(12, $frame->getHeight());
        $this->assertEquals(12, $frame->getWidth());
    }

    public function testHeightWidthWithMargin3x1()
    {
        $frame = $this->buildFrame($this->genMatrix(3,1), 100, 100, 0);

        $this->assertEquals(100, $frame->getHeight());
        $this->assertEquals(300, $frame->getWidth());
    }

    public function testHeightWidthWithMargin1x3()
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

    public function assertEqualsCube(\Cubes\Cube $cube1, \Cubes\Cube $cube2)
    {
        $cube1 = array($cube1->getX1(), $cube1->getY1(), $cube1->getX2(), $cube1->getY2());
        $cube2 = array($cube2->getX1(), $cube2->getY1(), $cube2->getX2(), $cube2->getY2());

        $this->assertEquals($cube1, $cube2);
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