<?php


class Person {
    public $name;
    protected $age;
    protected $gender;

    public function __construct($new_name, $new_age, $new_gender){
        $this->name = $new_name;
        $this->age = $new_age;
        $this->gender = $new_gender;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getGender(){
        return $this->gender;
    }
}
?>