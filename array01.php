<?php


// $data = ['apple' , 'kola' , 'orange' , 'dal' , 'alu'];

//array_filter start

// $numbers = [2,4,5,2,1,4,35,5,3,3,5,7,7,8,90,3,4,5,7,2,5,6,7,8,9,10,10];

// function even($n){
//     return $n%2!=0;

// };

// $newData = array_filter($numbers , 'even');

// print_r($newData);

//array_filter end

//array_map start

$numbers = [2,4,5,2];

function square($n){
    // return $n*$n;
    return $n+10;

}

$newData = array_map('square' , $numbers );

print_r($newData);

//array_map end



// $newData  = array(1=>'Komola' , 2=>'Mango');

// $value = array_replace($data , $newData );
// print_r($value);

// $countData = count($data);

// for($i=0 ; $i<$countData ; $i++){

//     echo $data[$i]."\n";

// }

// foreach($data as $value){
//     echo $value."\n";

// }

//Multidimensional Array

// $arr = [
//     ['firstName'=>"Kazi" , 'lastName' =>"Mahamood" , 'email' => "kazi@gmail.com"],
//     ['firstName'=>"shayek" , 'lastName' =>"Ahmed" , 'email' => "shayek@gmail.com"],
//     ['firstName'=>"muntaka" , 'lastName' =>"Alam" , 'email' => "muntaka@gmail.com"],
//     ['firstName'=>"shayem" , 'lastName' =>"Ali" , 'email' => "shayem@gmail.com"],
//     ['firstName'=>"abrar" , 'lastName' =>"Saikat" , 'email' => "abrar@gmail.com"]
// ];
// $person = ['firstName'=>"Kazi" , 'lastName' =>"Mahamood" , 'email' => "kazi@gmail.com"];

// $flip = array_flip($person);
// print_r($flip);
 
// $firstName =array_column($arr, 'lastName');
 
// print_r($firstName);

// $change = array_flip($arr);
// print_r( $change);

// // echo $arr[2]['firstName'];

// foreach($arr as $child){
//     // echo $child['firstName']."<br>";
//     foreach($child as $key => $value){

//         echo $key.":".$value."<br>";

//     }

// }

//array_push

// $country = ['Bangladesh' , 'India'];

// array_push($country , 'Pakistan' , 'Canada');



//array_pop

// array_pop($country);

// print_r($country) ;

// array_unshift($country , 'jack');


// print_r($country) ;

//array slice


// $portion = array_slice($country, 0,1);
// print_r($portion) ;








 

?>