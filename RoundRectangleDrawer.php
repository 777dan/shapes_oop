<?php
class RoundRectangleDrawer extends Shape
{
    protected $width, $height, $border_radius;

    public function __construct($x, $y, $color, $width, $height, $border_radius)
    {
        parent::__construct($x, $y, $color);
        $this->width = $width;
        $this->height = $height;
        $this->border_radius = $border_radius;
    }

    public function draw()
    {
        echo "<div
        style='
        position:relative;
        top:{$this->y}px;
        left:{$this->x}px;
        width:{$this->width}px;
        height:{$this->height}px;
        border-radius:{$this->border_radius}px;
        background-color:{$this->color};
        '>
        </div>";
    }
}
