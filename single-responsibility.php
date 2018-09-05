<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 5/09/18
 * Time: 19:48
 */

use App\Calculators\AreaCalculator;
use App\Calculators\SumCalculatorOutputter;
use App\Shapes\Circle;
use App\Shapes\Square;

require_once __DIR__ . '/vendor/autoload.php';

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6),
];

$areas = new AreaCalculator($shapes);

var_dump($areas->output());

echo '<p><strong>This is wrong : the AreaCalculator is both responsible for calculating the sum and managing the output.</strong></p>';
echo '<p><strong>In this case, you would need to change the output method quite a lot to provide different output options, like JSON, HTML?</strong></p>';
echo '<p><strong>One should create a class specifically designed for that one responsibility of outputting the sum</strong></p>';

$output = new SumCalculatorOutputter($areas);

var_dump($output->JSON());
var_dump($output->HAML());
var_dump($output->HTML());
var_dump($output->JADE());