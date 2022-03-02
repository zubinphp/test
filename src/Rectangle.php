<?php
namespace App;

class Rectangle{

    public float $length;
    public float $breadth;

    public function getArea(){
        return $this->length*$this->breadth;
    }

    public function getPerimeter(){
        return 2*($this->length+$this->breadth);
    }
}