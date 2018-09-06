<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 5/09/18
 * Time: 19:41
 */

namespace App\Calculators;


class AreaCalculator
{
    protected $shapes;


    /**
     * AreaCalculator constructor.
     */
    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach($this->shapes as $shape) {
            if(is_a($shape, 'App\Shapes\Square')) {
;                $area[] = pow($shape->length, 2);
            } else if(is_a($shape, 'App\Shapes\Circle')) {
                $area[] = pi() * pow($shape->radius, 2);
            }
        }
        return array_sum($area);
    }

    /**
     * This logic does not belong here. It is left here to demo the wrong way of working.
     * @return string
     */
    public function output()
    {
        return implode('', [
            '',
            'Sum of the areas of provided shapes: ',
            $this->sum(),
        ]);
    }
}