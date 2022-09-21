<?php

class Cars{
  public $name;
  public $type;

}

$car= new Cars();
$carName= $car-> name="ford";
echo $carName;


echo "<br>";
echo "<br>";




class Motors{
  public $name;
  public $type;

  public function set_name($name){
    $this->name= $name;
  }

  public function get_name(){
    return $this->name;
  }
}

$motors= new Motors();
$motors->set_name("BMW");
echo $motors->get_name();

echo "<br>";
echo "<br>";




class Motor{
  public $name;
  public $color;


  public function set_name($name){
    $this->set_name=$name;
  }
  public function get_name(){
    return $this->name;
  }


  public function set_color($color){
    $this->color=$color;
  }
  public function get_color(){ 
    return $this->color;
  }
}

$motor= new Motor();

$motor->set_name("BMW");
echo $motor->get_name(). "<br/>";
$motor->set_color("White");
echo $motor->get_color();


echo "<br>";
echo "<br>";

class Fruits{
  public $name;
  public $color;
  public $type;

  function __construct($name,$color,$type){
    $this->name=$name;
    $this->color=$color;
    $this->type=$type;
  }
  public function get_name(){
   return $this->name;
  }
  public function get_color(){
     return $this->color;
  }
  public function get_type(){
   return $this->type;

  }
}
$fruits =  new Fruits("Banana","Yellow","Type");
echo $fruits->get_name();
echo $fruits->get_type();
echo $fruits->get_color();

echo "<br>";
echo "<br>";

class Customers{
  private $name;

  public function set_name($name){
    $this->name= $name;
  }
  public function get_name(){
    return $this->name;
  }

}
$customer = new Customers();

$customer->set_name("Carla");
echo $customer->get_name();


echo "<br>";
echo "<br>";







?>