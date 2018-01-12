<?php
 $oa=array('1','2','3','4','5');
     echo"Original array :<br>";
 foreach($oa as $n){
     echo $n;
 }
 $a="$";
 array_splice($oa,3,0,$a);
 echo"<br>After inserting '$' the array is :<br>";
 foreach($oa as $a){
     echo $a;
 }



?>
