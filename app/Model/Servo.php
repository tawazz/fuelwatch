<?php
class Servo{
    public $name;
    public $price;
    public $address;
    public $phone;
    public $latitude;
    public $longitude;
    public $product;
    public $brand;
    function __construct(){

    }

    public function setUp($name,$price,$address,$phone,$latitude,$longitude,$brand,$product =NULL){

        $this->name = $name;
        $this->price = $price;
        $this->address = $address;
        $this->phone = $phone;
        $this->latitude = $latitude;
        $this->longitude= $longitude;
        $this->product = $product;
        $this->brand = $brand;
    }
}
?>
