<?php
$ceu = array("Itary"=>"Rome","Luxembourg"=>"Luxembourg","Belgium"=>"Brussels",
    "Denmark"=>"Copenhagen","Finland"=>"Helsinki","France"=>"Pris","Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana","Germany"=>"Berlin","Greece"=>"Athens","Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam","Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm",
    "United kingdom"=>"London","Cyprus"=>"Nicosi","Lithuania"=>"Vilnius","Czech Republic"=>"Prague",
    "Estonia"=>"Tallin","Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta","Austria",
    "Poland"=>"Warsaw");

foreach($ceu as $x => $x_value){
    echo "The capital of $x"."&nbsp"." is ".$x_value;
    echo "<br>";
}

?>