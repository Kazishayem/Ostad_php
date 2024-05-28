<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $plainTestJSON = file_get_contents("php://input");  //json to text
    // echo $plainTestJSON;

    $plainTextToArray = json_decode($plainTestJSON , true); //text to array
    // echo $plainTextToArray["num1"]+$plainTextToArray["num2"];

    $sum = $plainTextToArray["num1"]+$plainTextToArray["num2"];
    $sub = $plainTextToArray["num1"]-$plainTextToArray["num2"];
    $mul = $plainTextToArray["num1"]*$plainTextToArray["num2"];
    $div = $plainTextToArray["num1"]/$plainTextToArray["num2"];

    $result = [
        'sum' => $sum,
        'sub' => $sub,
        'mul' => $mul,
        'div' => $div
    ];

    echo json_encode($result); //array to json

}


// if($_SERVER['REQUEST_METHOD'] == "GET"){

//     echo "this is GET";

// }

// if($_SERVER['REQUEST_METHOD'] == "PUT"){

//     echo "this is PUT";

// }

// if($_SERVER['REQUEST_METHOD'] == "DELETE"){

//     echo "this is DELETE";

// }

// if($_SERVER['REQUEST_METHOD'] == "PATCH"){

//     echo "this is PATCH";

// }