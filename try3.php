<?php

// fscanf(STDIN, "%d %d " , $price ,$discount);
// // print "price: ".$price."\n"; 
// // print "discount: ".$discount."\n"; 


// $discount_amount = $price * $discount / 100;
// $discount_price = $price -  $discount_amount;


// print "Price: " . number_format((float)$discount_price, 2, '.', '') . "\n";

// fscanf(STDIN, "%d" , $seconds);

// print $seconds."\n";
// print $remaining_seconds."\n";

// $hours = floor($seconds / 3600);
// $remaining_seconds = $seconds % 3600;
// $minute = $remaining_seconds / 60;



// // hours = seconds // 3600
// //     remaining_seconds = seconds % 3600
// //     minutes = remaining_seconds // 60
// print $hours."\n";
// print $minute."\n";

// // print min($wheelscap , $hours, $minute);

// echo "The time is: ".$hours.":".$minute;


// fscanf(STDIN, "%d" , $seconds);

// $hours = floor($seconds / 3600);
// $minute = floor($seconds / 60);

// echo $hours.":".$minute;


// fscanf(STDIN, "%s %s" , $firstName , $lastName);

// echo $lastName.",".$firstName;

// fscanf(STDIN, "%s" , $name);
// // print($name);
// echo "Hello, ".$name."! Nice to meet you."

//2

// fscanf(STDIN, "%d %d " , $num1 ,$num2);

//     // print($num1);
//     // print($num2);
//         $the_sum = $num1+$num2;
//         print($the_sum);
// 

//3

fscanf(STDIN, "%s" , $firstName );


function isRotation($firstName , $positions) {


    $length = strlen($firstName);

    $rotatedStr = substr($firstName, $positions) . substr($firstName, 0, $positions);
    
    return $rotatedStr;

}
$positions = 3;
$rotatedStr = isRotation($firstName, $positions);

// $firstName." ".$rotatedStr;

if($firstName." ".$rotatedStr){

    echo "True";

}
else{
    echo "False";
}








?>