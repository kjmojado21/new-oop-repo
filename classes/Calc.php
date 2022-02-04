<?php 

class Calc{
    private $number1;
    private $number2;
    private $oper;

    public function setValues($digit1,$digit2,$operator){
        $this->number1 = $digit1;
        $this->number2 = $digit2;
        $this->oper = $operator;
    }


    public function get_calculation(){
        if($this->oper == 'add'){
            return $this->number1 + $this->number2;
        }elseif($this->oper == 'sub'){
            return $this->number1 - $this->number2;
        }elseif($this->oper == 'mult'){
            return $this->number1 * $this->number2;
        }else{  
            return $this->number1 / $this->number2;
        }
    }
}


?>