<?php

//inheritance 

class Father{

    public function print100(){
        for($i = 0;$i<100 ; $i++){

            echo $i."\n";

        }
    }

    public $color = "red";

}

class son extends Father{

    //overriding method

    // public function print100(){
    //     for($i = 0;$i<=100 ; $i=$i+10){

    //         echo $i."\n";

    //     }
    // }

    public function demo(){

        parent::print100();
    }

}

$sonObject = new son();

 $sonObject -> demo();
