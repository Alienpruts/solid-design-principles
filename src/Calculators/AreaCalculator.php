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
        // Sum logic would be implemented here.
        return 'I am dummy, respect my authority!';
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