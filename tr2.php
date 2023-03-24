<?php

class Member{

    private $name;

    public function set_name($name){
         $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }
}

$w=new Member();
$w->set_name('eli');
echo $w->get_name();

?>