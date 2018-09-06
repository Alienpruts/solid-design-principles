<?php
/**
 * Created by PhpStorm.
 * User: bert
 * Date: 5/09/18
 * Time: 22:59
 */

namespace App\Outputters;


class SumCalculatorOutputter
{

    private $areas;
    private $sum;


    /**
     * SumCalculatorOutputter constructor.
     * This will store the supplied areas and the sum of all these areas for use in the outputter.
     * According to SRP this class should NOT concern itself with how the sum is obtained!
     */
    public function __construct($areas = [])
    {
        $this->areas = $areas;
        $this->sum = $areas->sum();
    }

    public function JSON()
    {
        return json_encode([
            $this->sum,
            'I am dummy JSON',
            'Respect my authoroty',
        ]);

    }

    public function HAML()
    {
        return "I am dummy HAML, respect my authority! + " . $this->sum;
    }

    public function HTML()
    {
        return "<p>I am dummy HTML</p><p>Respect my authority</p><p>Sum is : {$this->sum} </p>";
    }

    public function JADE()
    {
        return 'I am dummy JADE, respect my authority! + ' . $this->sum;
    }

}