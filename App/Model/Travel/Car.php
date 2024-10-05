<?php

class Car
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
    public function displayCarInfo()
    {
        echo "Car brand: " . $this->brand . ", model: " . $this->model . ", year: " . $this->year;
    }
}
