<?php

class FormValidation{

    public  $username = "kazi shayem";

    // public function test(){
    //     echo self::$username;
    // }

    public function test(){
       echo $this-> username;
    }
}


$obj = new FormValidation;

$obj -> test();