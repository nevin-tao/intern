<?php
    for($i=0; $i<7; $i++){
        for($j=0; $j<5; $j++){
            if((($i == 0 or $i == 6) and $j >= 0 and $j <= 4) or $i+$j == 5){
                echo "*";
            }else
                echo " &nbsp; ";
        }
        echo "<br/>";
    }
?>
