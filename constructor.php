<?php

class car{
    public $color = "red";

    //without parameters
    // public function __construct()
    // {
    //     echo "auto light on , auto car start";
    // }


    //with parameters

    public function __construct($newColor){

        $this -> color = $newColor;

      

    }
}

$carObject = new car("Green");

echo $carObject -> color."\n";