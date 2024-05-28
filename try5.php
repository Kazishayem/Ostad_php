<?php

// $date = strtotime("today");

// // echo date('Y-m-d H:i:s' , $date);

// $dateAfter10Days = strtotime('today +10days' , $date);

// // echo date('Y-m-d H:i:s' , $dateAfter10Days);

// $week = strtotime('W' , $date);
// echo $week;

// $fruits = ['banana' , 'kaz' , 'orange' , 'tata', 'mons' , 'plum'];

// $allfruits = implode(',' , $fruits);

// echo $allfruits."\n";

//Associative array to JSON object Encode

$person = [

    'name' => 'banana',
    'age' => 20,
    'city' => 'dhaka',
    'country' => 'bangladesh'
];

$JSON = json_encode($person);

// echo $JSON;


//Associative array to JSON Array Encode

$person1 = [

   [
    'name' => 'banana',
    'age' => 20,
    'city' => 'dhaka',
    'country' => 'bangladesh'
   ],
   [
    'name' => 'kola',
    'age' => 10,
    'city' => 'Chattogram',
    'country' => 'bangladesh'
   ],
   [
    'name' => 'orange',
    'age' => 15,
    'city' => 'Kalkata',
    'country' => 'India'
   ],
   [
    'name' => 'canacur',
    'age' => 30,
    'city' => 'chinaa',
    'country' => 'China'
   ],
];

 echo $JSON1 = json_encode($person1);




