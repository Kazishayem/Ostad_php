<?php

//access Modifier

//public
//private
//protected


class MyHouse{

    private $bou = "Suhasini";
    protected $Mychele = "shayem";
    public $MyShosur = "Shosur";

    public function demo(){

        echo $this -> MyShosur;

        echo $this -> Mychele;

        echo $this -> bou;
        
    }

}

class MyShosurHouse extends MyHouse{
    public function demo(){

        echo $this -> MyShosur;

        echo $this -> Mychele;
        
    }

}

class MyOfficeHouse{
    public function demo(){

        $obj = new MyHouse();

        echo $obj -> MyShosur;
    }

}

