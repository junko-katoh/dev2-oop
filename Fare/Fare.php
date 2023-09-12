<?php

class Compute{
    public $age;
    public $distance;
    public $fare;

public function setAge($new_age){
    $this->age = $new_age;
}
public function setDistance($new_distance){
    $this->distance = $new_distance;
}

public function getAge(){
    return $this->age;
}
public function getDistance(){
    return $this->distance;
}

function setFare(){
    if($this->distance <= 4){
        $this->fare = 8;
    } elseif($this->distance > 4){
        $this->fare = $this->distance + 4;
    }

    if($this->age >= 60){
        $this->fare *= 0.8;
    } 
    }

function getFare(){
    return $this->fare;
}
}



// public function displayFare(){
//     echo "Age: ".$this->age. "years old" "<br>";
//     echo "Distance: ".$this->distance. "km" "<br>";
//     echo "Fare" . $this->fare. "<br>";
// }


/* The following is a copy of AKI SAN's code.
function setFare(){
    $baseFare = 8;
    $additionalFarePerKm = 1;
    if($this->age >= 19 && $this->age <= 80){
        if($this->distance <= 4){
           $this->fare - $baseFare;
        } else {
            $additionalDistance = $this->distance -4;
            $this->fare = $baseFare + ($additionalDistance * $additionalFare)
        }

        if($this->age>= 60){
            $this->fare *= 0.8;
        }
    }
    function getFare(){
        return $this->$fare;
    }
}
 */


/* The following is a copy TOMO SAN'S CODE.
public function setFare(){
    if($this->distance <= 4){
        $this->fare = 8;
    } elseif ($this->distance >4){
        $this->fare = $this->distance + 4;
    }

    if($this->age >= 60){
        $this->fare *= 0.8; 
    }
}
*/
?>

