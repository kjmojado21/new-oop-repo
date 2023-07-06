<?php 
class Book{
    private $author;
    private $title;

    public function setData($author,$title){
        $this->author = $author;
        $this->title = $title;
    }

    public function generateResult(){
        $count = count($this->author);

        for($x = 0; $x < $count; $x++):
            echo "Author: ". $this->author[$x];
                echo "&nbsp";
                echo "&nbsp";
            echo "Title: ". $this->title[$x];
           
            echo "<br>";
        endfor;
    }
}



?>