<?php
include "autoload.php";

$rect1 = new RectangleDrawer(100, 2, "", 50, 50);
$rect2 = new RectangleDrawer(100, 300, "red", 100, 100);
$circle3 = new CircleDrawer(15, 16, "yellow", 10);
$circle4 = new CircleDrawer(25, 26, "pink", 3);
$rect5 = new RoundRectangleDrawer(600, 100, "blue", 150, 150, 30);
$rect6 = new RoundRectangleDrawer(500, 50, "orange", 150, 150, 30);
$arr = [$rect1, $rect2, $circle3, $circle4, $rect5, $rect6];

foreach ($arr as $value) {
    if ($value->getColor() == "") {
        $value->setColor();
    }
    if ($value instanceof Shape) {
        echo $value->draw();
    }
}