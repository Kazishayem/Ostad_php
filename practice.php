<?php

// Create a Vehicle class with properties color and speed, and a method accelerate() that increases the speed by 10. Then, create a Car class that inherits from Vehicle and adds a property numDoors. Override the accelerate() method in Car to increase the speed by 20 instead of 10.

// class Vehicle {
//     public $color;
//     public $speed;

//     public function __construct($color , $speed) {

//         $this -> color = $color;

//         $this -> speed = $speed;
        
//     }

//     public function accelerate() {

//         $this -> speed = $this -> speed + 10;
//     }
// }

// class Car extends Vehicle {


   
// }

// $obj = new Car('red' , 30);
//  echo $obj -> accelerate();
//  echo $obj -> speed;


//

// class Shape{

//     public function getArea(){
//         return 0;
//     }


// }

// class Circle extends Shape{

//     // public $radius;
//     public $width;
//     public $height;


//     public function __construct($width , $height){

//         // $this-> radius = $radius;

//         $this -> width = $width;

//         $this -> height = $height;

//     }

//     public function getArea(){

//         // return pi() * pow($this->radius , 2);
//         return $this->width * $this->height;

//     }
        
// }

// $objs = new Circle(6 , 4);

// echo $objs -> getArea();


// class Animal{
//     public function makeSound(){
//         echo "The animal makes a sounds";
//     }
    
// }

// class dog extends Animal{
//     public function makeSound(){
//         echo "The dog barks";
//     }
// }

// $obj = new dog();

// $obj -> makeSound();



abstract class Logger{

     public function log(){

    }
}

class FileLogger extends Logger{

}

class DatabaseLogger extends Logger{
    
}