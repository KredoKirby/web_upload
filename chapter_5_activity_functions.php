<?php

    function calculate($first_number, $second_number, $operator){
        if($operator === "addition"){
            return $first_number + $second_number;
        }elseif($operator === "subtraction"){
            return $first_number - $second_number;
        }elseif($operator === "multiplication"){
            return $first_number * $second_number;
        }elseif($operator === "division"){
            return $first_number / $second_number;
        }elseif($operator === "modulo"){
            return $first_number % $second_number;
        }elseif($operator === "exponential"){
            return $first_number ** $second_number;
        }else{
            echo "Error has occured";
        }
    }

?>