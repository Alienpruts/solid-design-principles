<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 5/09/18
 * Time: 19:36
 */

namespace App\Shapes;

class Circle
{
    public $radius;


    /**
     * Circle constructor.
     */
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}