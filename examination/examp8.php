<?php
    $time1=new DateTime('1981-11-04');
    $time2=new DateTime('2013-09-00');
    $s=$time1->diff($time2);
    echo $s->format('%a days');


?>
