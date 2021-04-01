<?php
//Uso de clases

class Car
{
    private $brand;
    private $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function __destruct()
    {
        $this->brand = null;
        $this->model = null;
    }
}

$obj = new Car("Hyndai", "Accent Vision");
echo "<p> Hi, I'm a car from ", $obj->getBrand(), ", model:", $obj->getModel(), "</p><br>";
