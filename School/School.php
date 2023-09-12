<?php

class School{
    private $year_level;
    private $units;
    private $laboratory;

    private $price_per_unit_1 = 550;
    private $price_per_unit_2 = 630;
    private $price_per_unit_3 = 470;
    private $price_per_unit_4 = 501;

    private $with_lab_1 = 3359;
    private $with_lab_2 = 4000;
    private $with_lab_3 = 2890;
    private $with_lab_4 = 3555;

    public function setValues($new_year_level, $new_units, $new_laboratory){
        $this->year_level = $new_year_level;
        $this->units = $new_units;
        $this->laboratory = $new_laboratory;
    }

    public function computeTotalPrice(){
        if($this->year_level == "1"){
            $subtotal = $this->units * $this->price_per_unit_1;
        } elseif($this->year_level == "2"){
            $subtotal = $this->units * $this->price_per_unit_2;
        } elseif($this->year_level == "3"){
            $subtotal = $this->units * $this->price_per_unit_3;
        } elseif($this->year_level == "4"){
            $subtotal = $this->units * $this->price_per_unit_4;
        }

        if($this->laboratory == "yes"){
            if($this->year_level == "1"){
                return $subtotal + $this->with_lab_1;
            } elseif($this->year_level == "2"){
                return $subtotal + $this->with_lab_2;
            } elseif($this->year_level == "3"){
                return $subtotal + $this->with_lab_3;
            } elseif($this->year_level == "4"){
                return $subtotal + $this->with_lab_4;
            } 
         } else {
            return $subtotal;
        }
    }

    public function getLab(){
        if($this->laboratory == "yes"){
            return "With Lab";
        } 
        return "Without Lab";
    }
}

?>