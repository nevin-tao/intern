<?php
    for($r=0;$r<7;$r++){
        for($c=0;$c<5;$c++){
            if((($r==0 or $r==6)and $c>=0 and $c<=5)or $r+$c==5)
                echo"*";
            else
                echo"&nbsp;";
        }
        echo"<br>";
    }

?>
