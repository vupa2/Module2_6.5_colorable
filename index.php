<?php

include_once 'Circle.php';
include_once 'Cylinder.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$circle = new Circle('Circle 01', 3);
$cylinder = new Cylinder('Cylinder 01', 3, 4);
$rectangle = new Rectangle('Rectangle 01', 3, 4);
$square = new Square('Square 01', 4, 4, 4);

echo "$circle->name: " . $circle->howToColor() . '<br>';
echo "$cylinder->name: " . $cylinder->howToColor() . '<br>';
echo "$rectangle->name: " . $rectangle->howToColor() . '<br>';
echo "$square->name: " . $square->howToColor() . '<br>';
