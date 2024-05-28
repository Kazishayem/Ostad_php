<?php

// for ($i=0; $i <= 100 % 2 ; $i++) { 

//     echo "\n".$i;
// }

$i = 0;

$fruits = ['apple' , 'banana' , 'tometo' , 'komola' , 'ganja' , 'chips' , 'deros'];
$TotalFruits = count($fruits);

// for ($i=0; $i < $TotalFruits; $i++) {
    
//     echo $fruits[$i]."\n";
    
// }

// foreach($fruits  as $fruit){
//     echo $fruit."\n";

// }

//Associative Array

$countries = [
    'Bangladesh' => 'Dhaka',
    'India' => 'New Delhi',
    'China' => 'Beijing',
];

foreach($countries as $country => $capital){
    echo "The country name is: ".$country." And Their Capital is ".$capital."\n";
    // echo $country."\n";

}


?>