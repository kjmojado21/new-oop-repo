<?php 


class Age{
    private $firstName;
    private $lastName;
    private $birthYear;
    private $currentYear;
   


    public function giveValues($fname,$lname,$byear,$cyear){
        $this->firstName = $fname;
        $this->lastName = $lname;
        $this->birthYear = $byear;
        $this->currentYear = $cyear;
    }

    public function getFirstname(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getAge(){
        return $this->currentYear - $this->birthYear;
    }




}

?>