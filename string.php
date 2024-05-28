<?php

$string = "Hello! This is Shayem";


// echo strtoupper($string);

// $length = strlen($string);

//  for($i= $length-1;$i>=0 ; $i--){
//     echo $string[$i];

//  }

//OR

// echo strrev($string);
// $newString = explode(" " , $string);
// print_r($newString);

// $newString = str_split($string);

// print_r($newString);

//character count

$CharacterCount = [];
$characterArray = str_split($string); 

foreach($characterArray as $character){
    if(isset($CharacterCount[$character])){

        $CharacterCount[$character]++;

    }
    else{
        // $CharacterCount[$character] = 1;
        $CharacterCount[$character] = 1;
        // $CharacterCount[$character] = 1;
        // $CharacterCount[$character] = 1;
        // $CharacterCount[$character] = 1

    }

}

print_r($CharacterCount);


?>