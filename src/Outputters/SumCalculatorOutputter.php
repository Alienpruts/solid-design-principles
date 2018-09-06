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


    /**
     * SumCalculatorOutputter constructor.
     * This will store the supplied $areas for use in all output methods (not implemented here)
     */
    public function __construct($areas = [])
    {
        $this->areas = $areas;
    }

    public function JSON()
    {
        return json_encode([
            'I am dummy JSON',
            'Respect my authoroty',
        ]);

    }

    public function HAML()
    {
        return "I am dummy HAML, respect my authority!";
    }

    public function HTML()
    {
        return "<p>I am dummy HTML</p><p>Respect my authority</p>";
    }

    public function JADE()
    {
        return 'I am dummy JADE, respect my authority!';
    }

}