<?php
include "Student.php";

$william = new Student("William", 12, "Male", "A1-1001");
echo $william->getName(). "<br>";
echo $william->getAge(). "<br>";
echo $william->getGender(). "<br>";
echo $william->getSchoolID();

echo "<br><br>";
$marie = new Student("Marie", 14, "Female" ,"A1-1002");
echo $marie->getAge();
?>