<?php

class car{
    public $color = "red";

    //constructor make with function
    public function __construct()
    {
        echo "auto light on , auto car start";
    }
    public function driver(){
        echo "I am driving";
    }

    public function washing(){
        echo "I am washing";
    }


}

//object convert

$carObject = new car();

echo $carObject -> color."\n";
echo $carObject -> driver()."\n";
