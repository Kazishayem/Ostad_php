<?php

//final keyword

class Father{

     final public function print100(){
        for($i = 0;$i<100 ; $i++){

            echo $i."\n";

        }
    }

    public function print200(){
        for($i = 0;$i<100 ; $i++){

            echo $i."\n";

        }
    }

}

class son extends Father{

   

    public function print200(){
        for($i = 0;$i<100 ; $i++){

            echo $i."\n";

        }
    }

}
// $sonObject = new son();
// $objFather = new Father(); 
