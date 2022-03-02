<?php

use App\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase{

    public function testGetAreaWorks(){

        $rectangle = new Rectangle;
        $rectangle->length = 10;
        $rectangle->breadth = 4;
        $this->assertEquals(40,$rectangle->getArea());
    }

    public function testGetPerimeterIsWorking(){

        $rectangle = new Rectangle;
        $rectangle->length = 10;
        $rectangle->breadth = 4;
        $this->assertGreaterThan(10,$rectangle->getPerimeter());
    }
}