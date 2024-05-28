<?php
    # Write your PHP code from here
// fscanf(STDIN , "%s %s" , $a  , $b);
// $is_Rotation = False;
// for($i  = 0;$i<strlen($a) ;$i++){
//     $a = substr($a , 1).substr($a, 0,1);

//     if(strcmp($a , $b) == 0){
        
//         $is_Rotation = True;
//         break;

//     }

// }


// if($is_Rotation){
//     echo "True";
// }
// else{
//     echo "False";
// }


    # Write your PHP code from here

    fscanf(STDIN , "%s %s" , $a  , $b);
    $count = 0;

    for($i = 0; $i<=strlen($a) - strlen($b) ; $i++){

        $temp  = substr($a , $i , strlen($b));
        

        if(strcmp($temp , $b) == 0 ){
            $count++;

        }



    }

    print $count;



    
?>

    
?>