<?php

class MotorCycle
{
    // Properties
    public $brand;
    public $model;
    public $year;

    // Methods
    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
    public function displayMotorCycleInfo()
    {
        echo "MotorCycle brand: " . $this->brand . ", model: " . $this->model . ", year: " . $this->year;
    }
}
