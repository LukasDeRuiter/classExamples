<?php
class Friend {

    //properties

    private $name;
    private $age;
    
    //constructors

    public function __construct($name, $age) {
        $this->name =  $name;
        $this->age = $age;

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