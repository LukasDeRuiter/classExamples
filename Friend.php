<?php
class Friend {

    //properties

    protected $name;
    protected $age;
    
    public $role = "friend";
    
    //constructors

    public function __construct($name, $age) {
        $this->name =  $name;
        $this->age = $age;

    }

    //Methods
    public function __destruct(){
        echo $this->name . " has been removed <br>";
    }

    public function __clone() {
        $this->name = "Clone " . $this->name;
    }

    public function message() {
        return $this->name . " is my friend and " . $this->age . " years old";
    }

    //Getters and Setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}

?>