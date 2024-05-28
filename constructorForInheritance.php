<?php

//Constructor for Inheritance 

class Father{

    public function __construct()
    {
        echo "This is father's Constructor";
    }

}

class son extends Father{

    public function __construct()
    {
        echo "This is son's Constructor";
    }



}
$sonObject = new son();
// $objFather = new Father(); 
