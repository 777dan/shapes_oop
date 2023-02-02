<?php
class CircleDrawer extends Shape
{
    protected $radius;

    public function __construct($x, $y, $color, $radius)
    {
        parent::__construct($x, $y, $color);
        $this->radius = $radius;
    }

    public function draw()
    {
        echo "<div
        style='
        position:relative;
        top:{$this->y}px;
        left:{$this->x}px;
        width:" . $this->radius * 10 . "px;
        height:" . $this->radius * 10 . "px;
        border-radius:50%;
        background-color:{$this->color};
        '>
        </div>";
    }
}

// $rect1 = new CircleDrawer(15, 16, 3);
// $rect1->draw();