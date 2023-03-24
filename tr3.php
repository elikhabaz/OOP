<?php

class Car{

    private $name;
    private $color;
    private $model;
  
    public function __construct($name,$color,$model)
    {
        $this->name=$name;
        $this->color=$color;
        $this->model=$model;
    }
    public function brandCar(){
      return $this->name  ;
      echo "\n";
    }
  
    public function speed(){
      echo "\n";
      echo 'speed higher than 180';
      
    }
  
    public function set_color(){
      echo "\n";
      return $this -> color;
      
    }
    public function name_model(){
        echo "\n";
        return $this -> model ;
      
    }

    function __destruct()
    {
      echo "\n";
      echo "the car is:  {$this->model}." ;
    }
  }
  
  $p=new Car('sipa','blue','131 SE');
   echo $p->brandCar();
   echo $p->set_color();
   echo $p->name_model();
   $p->speed();

?>
