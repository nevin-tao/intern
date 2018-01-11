<?php
    function checkprimenumber($number){
        $check = true;
        for($i=2; $i<$number; $i++){
            if(($number % $i) == 0) {
                $check = false;
                break;
            }
        }
        if($check== true and $number != 1) {
            echo " " . $number . " is Prime number. <br/>";
        }else
            echo $number ." is not Prime number. <br/>";
    }
    for($i=1; $i<=100; $i++){
        checkprimenumber($i);
    }
?>
