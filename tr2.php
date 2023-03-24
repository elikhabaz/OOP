<?php

class Member{

    private $name;

    public function set_name($name){
         $name = trim($name);

         if($name==''){
            return false;
         }
         $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }
}

$w=new Member();
$w->set_name(' ');
echo $w->get_name();

?>