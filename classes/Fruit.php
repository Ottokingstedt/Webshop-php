<?php

class Fruit{
public $name;
    public $color;
    public $price;

    public function __construct($name, $color)
    {
        $this->name =$name; // price
        $this->color = $color;
    }

    public function intro(){
        echo "Product name: {$this->name} is color: {$this->color} and costs {$this->price}";
    }

    public static function info_about_products($count){
        echo "Product are good to use and easy to help you anyway and there are {$count} products day";
    }
}

class Strawberry extends Fruit{
    public $berries;

    public function __construct($name, $color, $berries)
    {
        $this->name =$name;
        $this->color = $color;
        $this->berries = $berries;
    }

    public function message(){

        echo "I'am a strawberry";
    }
}