<?php

 for($i=1;$i<=5;$i++)
 {
     for($k=1;$k<=$i;$k++){
         echo "*";
         if($i==$k){
             echo"<br>";
         }
     }

 }
for($i=5;$i>=1;$i--)
{
    for($k=1;$k<=$i;$k++){
        echo "*";
        if($i==$k){
            echo"<br>";
        }
    }

}
?>