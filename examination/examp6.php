<?php
    $Test = array("1", "2", "3", "4", "5");
    echo "Original array : <br/>";
    foreach ($Test as $a){
        echo " " .$a;
    }
    //add
    echo "<br/> After inserting '$' the array is : <br/>";
    array_splice($Test,3,0,"$");
    foreach ($Test as $a){
        echo " " .$a;
    }
?>