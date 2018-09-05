<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 5/09/18
 * Time: 19:39
 */

namespace App\Shapes;

class Square
{
    public $length;


    /**
     * Square constructor.
     */
    public function __construct($length)
    {
        $this->length = $length;
    }
}