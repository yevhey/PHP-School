<?php

interface VehicleInterface {
    public function showMyself();
}

abstract class Vehicle implements VehicleInterface {
    protected $type;
    protected $manufacturer;
    protected $year;
    protected $model;
    protected $vinCode;
}

class Car extends Vehicle {
    private $equipment;

    public function __construct($manufacturer, $year, $model, $vinCode, $equipment)
    {
        $this->type = 'Car';
        $this->manufacturer = $manufacturer;
        $this->year = $year;
        $this->model = $model;
        $this->vinCode = $vinCode;
        $this->equipment = $equipment;
    }

    public function showMyself()
    {
        return $this->type . ', ' .
            $this->manufacturer . ', ' .
            $this->year . ', ' .
            $this->model . ', ' .
            $this->vinCode . ', ' .
            $this->equipment . PHP_EOL;
    }
}

class Truck extends Vehicle {
    private $load;

    public function __construct($manufacturer, $year, $model, $vinCode, $load)
    {
        $this->type = 'Truck';
        $this->manufacturer = $manufacturer;
        $this->year = $year;
        $this->model = $model;
        $this->vinCode = $vinCode;
        $this->load = $load;
    }

    public function showMyself()
    {
        return $this->type . ', ' .
            $this->manufacturer . ', ' .
            $this->year . ', ' .
            $this->model . ', ' .
            $this->vinCode . ', ' .
            $this->load . PHP_EOL;
    }
}

$carObject = new Car('Tesla', 1992, 'S', '5YJSA1DN2DFP09876', 'gloves');
$truckObject = new Truck('Volvo', 2019, 'FH16', 'YV1DZ8256C2271234', '36 tonnes');
echo $carObject->showMyself();
echo $truckObject->showMyself();