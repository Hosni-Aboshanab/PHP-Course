<!DOCTYPE html>
<html>
<body>

<!-- Q1 -->
<?php
echo "I learn \r\n HTML CSS in iti";
echo "<br>";
echo nl2br("HTML \n CSS \r\n in iti");
?>

<br><br>
******************************************************************************************************************************************
<br><br>

<!-- Q2 -->
<?php
echo strrev("Hosni Ibrahim");
echo"<br>";
echo"<br>";
echo str_replace("Ahmed", "Ali", "Hosni Ibrahim");
echo"<br>";
echo"<br>";
echo ucwords("hosni ibrahim Ahmed");
?>

<br><br>
******************************************************************************************************************************************
<br><br>

<!-- Q3 -->
<pre><?php var_dump($_SERVER); ?></pre>
<pre><?php print_r($GLOBALS); ?></pre>


 

<br><br>
******************************************************************************************************************************************
<br><br>

<!-- Q4 -->
<?php
$numbers[0] = "12";
$numbers[1] = "45";
$numbers[2] = "10";
$numbers[3] = "25";

foreach( $numbers as $value ) {
   echo "Value = $value <br /> <br />";
}
//for get sum
$sum = array_sum($numbers);
echo " --> Sum= $sum <br /> <br />";
//for get average
$average = array_sum($numbers)/count($numbers);
  echo " --> Average = $average  <br /> <br />";
//for get reverse order sort
  rsort($numbers);
  print_r($numbers); 
?>

<br><br>
******************************************************************************************************************************************
<br><br>

<!-- Q5 -->
<?php

$numbers =array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40");
//A) ascending order sort by  Value
echo" Ascending Order Sort By Value <br>";
asort($numbers);

foreach($numbers as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<br>";

//C) Descending order sort by value
echo" Ascending Order Sort By Key <br>";
ksort($numbers);

foreach($numbers as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";

//C) Descending order sort by value
echo" Descending Order Sort By Value <br>";
arsort($numbers);

foreach($numbers as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<br>";

//D) Descending order sort by key
echo" Descending Order Sort By Key <br>";
krsort($numbers);

foreach($numbers as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}



?>

</body>
</html>