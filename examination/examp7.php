<?php
    function check_prime($n){
        for($i=3;$i<$n;$i++) {
            if ($i % $n == 0) {
                return 0;
            }
        }
        return 1;
    }
    $a=check_prime(4);
    if($a==0)
        echo"Not prime<br>";
        else
            echo"Prime<br>";

?>
