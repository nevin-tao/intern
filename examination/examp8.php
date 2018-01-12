
<?php
$datetime1 = new DateTime('1981-11-04');
$datetime2 = new DateTime('2013-09-01');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');
?>

