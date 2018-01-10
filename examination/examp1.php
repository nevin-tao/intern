<?php
    for($i=1;$i<=5;$i++){
        for($h=1;$h<=$i;$h++){
            echo"*";
            if($i==$h){
                echo"<br>";
            }

        }
    }
for($i=5;$i>=1;$i--){
    for($h=1;$h<=$i;$h++){
        echo"*";
        if($i==$h){
            echo"<br>";
        }

    }
}

?>
