<?php
$array  = array(array(0,5,0)
, array(6,1,5)
, array(5,1,5)
,array(4,1,5)
,array(3,1,5)
,array(2,1,5)
,array(0,5,0));
for($i=0;$i<count($array);$i++){
    for($is=0;$is<count($array[$i]);$is++){
        for($i2=0;$i2<$array[$i][$is];$i2++){
            if(($is % 2 == 0)){
                echo '&nbsp';
            }else{
                echo '*';
            }
        }
    }
    echo '<br>';
}
?>