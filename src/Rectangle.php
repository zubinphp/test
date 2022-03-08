<?php

namespace App;

class Rectangle
{

    public float $length;
    public float $breadth;

    public function getArea()
    {

        return $this->length * $this->breadth;
    }

    public function getPerimeter()
    {

        return 2 * ($this->length + $this->breadth);
    }

    public function getDateTime()
    {

        return date('Y-m-d H:i:s');
    }

    public function getDiagonal()
    {

        return sqrt(($this->length * $this->length) + ($this->breadth * $this->breadth));
    }
}
