<?php 

class User {
    // définition les éléments de la classe

    private string $name = "sellaouti";

    public function __construct($name) {
        $this->name = $name;
    }
    function changeName(string $newName) {
        $this->name = $newName;
        return $this;
    }

    function __destruct(){
        echo "oufa";
    }
}