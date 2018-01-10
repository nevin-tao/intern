<?php
$count ="";
 for ($i=1; $i<=6; $i++){
     for($j=1; $j<=6; $j++){
         if(strlen(($i*$j)) < 2 ) {
             $count = $count ."&nbsp;" ." &nbsp;  " .($i * $j);
         }else
             $count = $count ."&nbsp; " .($i * $j);
     }
     echo $count ."<br/>";
     $count = "";
 }
?>
