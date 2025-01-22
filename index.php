<?php

class Car{
    public  $color;
    public  $Model;
    public $speed;
    public function setting($color, $model, $speed)
    {
        $this->color = $color;
        $this->Model = $model;
        $this->speed = $speed;
    }
}

$myCar = new Car();
$friendCar = new Car();

$myCar->setting('Black', 'bmw m5 competition', 280);
$friendCar->setting('Red', 'Mers G63', 250);


class  Ota{
    public function union($a, $b){
        return $a+$b;
    }
}

class Bola extends Ota{
    public function multiple($a, $b){
        return $a*$b;
    }

}

$friend = new Bola();
print_r($friend->multiple(2,3 ));



















