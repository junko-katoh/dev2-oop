<!--This page is all for Childclass. "extends" means child class-->
<?php
include "Person.php";

class Student extends Person{
    private $school_id;

    public function __construct($new_name, $new_age, $new_gender, $new_school_id){
        $this->name = $new_name;
        $this->age = $new_age;
        $this->gender = $new_gender;
        $this->school_id = $new_school_id;
    }

    public function getSchoolID(){
        return $this->school_id;
    }
}

?>