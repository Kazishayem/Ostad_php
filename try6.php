<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $plainTestJSON = file_get_contents("php://input");
    echo $plainTestJSON;

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