<?php
/*
Write a PHP class definition for Product that includes the following:
Private properties for name, price, and description.
A public constructor method that accepts values for name, price, and description and sets them as the corresponding properties.
 */

class Product {
    private $name;
    private $price;
    private $description;

    public function __construct( $name, $price, $describe ) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $describe;
    }

    public function about_product() {
        echo $this->name . " is a nice Smartphone. And its cost about" . $this->price . ". It has also some amaizing features. Those are - " . $this->description . ". We hope you are gonna love it.";
    }
}


$Zingphone = new Product( "Zing Phone", 299, "Durable, Stain resistant, Permanent color" );
$Zingphone->about_product();