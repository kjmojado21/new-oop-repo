<?php 

// properties - is a variable inside the class
// visibility -
// method -  is fucntion isnide the class
// static - fixed
// dynamic - changeable
class Person{

private $name;
private $age;
private $location;


public function setValues($data1,$data2,$data3){
    $this->name = $data1;
    $this->age = $data2;
    $this->location = $data3;

}

public function getAge(){ // getter - it is use to get private pppties
    return $this->age;
}
public function getName(){
    return $this->name; 
}
public function getlocation(){
    return $this->location;
}


}




?>