<?php
//  first training oop in php
class Car{

  public $name;
  public $color;
  public $model;

  public function brandCar($brand){
    echo $this->name = $brand ;
    echo "\n";
  }

  public function speed(){
    echo "\n";
    echo 'speed higher than 180';
    
  }

  public function set_color($col){
    echo $this -> color = $col;
    echo "\n";
  }
  public function name_model($num){
    echo $this -> model = $num;
    echo "\n";
  }
}

$p=new Car();
 $p->brandCar('sipa');
 $p->set_color('blue');
 $p->name_model('131 SE');
 $p->speed();

?>