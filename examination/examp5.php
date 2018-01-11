<?php
$ceu = array("ltaly"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>"Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki","Frane"=>"Paris","Slovakia"=>"Bratislava",
    "Slovenia"=>"Liubljana", "Germany"=>"Berlin","Greece"=>"Athens","Lreland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon","Spain"=>"Madrid","Sweden"=>"Stockholm",
    "United Kingdom"=> "London","Cyprus"=>"Nicosia","Lithuania"=>"Vilnius","Cech RePuBlic"=>"Prague",
    "Estonia"=>"Tallin", "Hungary"=>"Budapest","Latvia"=>"Riga","Malta"=>"Valetta","Austria"=>"Vienna",
    "Poland"=>"Warsaw");

foreach($ceu as $x => $x_is) {
    echo "The capital of " . $x . " , is " . $x_is;
    echo "<br>";
}
?>
