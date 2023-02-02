<?php
class Shape
{
    protected $x, $y, $color;

    function getColor(){
        return $this->color;
    }
    function setColor(){
        $this->color = "black";
    }

    public function __construct($x, $y, $color)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }
}