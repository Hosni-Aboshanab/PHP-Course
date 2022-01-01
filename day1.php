<?php

// 2-  Answer:

// A):

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// echo $myName."hosni"."<br>";

// error_reporting(E_ALL);

// B) :
// goto c:\xampp\php\php.ini and go to display_errors = on

// C) :
// goto C:\xampp\php\pear\File\.htaccess



// 3-  Answer: 

define("my_website", "http://localhost/server/day1.php");
echo my_website . "<br>";
echo"<br>"."<br>"."<br>";
// 4- Answer:

echo $_SERVER['SERVER_NAME'];
echo"<br>"."<br>"."<br>";
echo $_SERVER['SERVER_ADDR'];
echo"<br>"."<br>"."<br>";
echo $_SERVER['REMOTE_PORT'];
echo"<br>"."<br>"."<br>";
echo $_SERVER['SCRIPT_FILENAME'];
echo"<br>"."<br>"."<br>";

// 5- Answer:


//for loop
echo "<br>"."<br>"."<br>";
echo "by use FOR loop"."<br>";
$a = 0;
$b = 0;
for ($i = 0; $i < 5; $i++) {
    $a += 10; //$a=$a+10
    $b += 5;
}
echo ("end of  a = $a and b = $b") . "<br>"; //a = 50, b=25

//while loop
echo "<br>"."<br>"."<br>";
echo "by use WHILE loop"."<br>";

$i = 0;
$num = 50;
while ($i < 10) {
    $num--;
    $i++;
}
echo ("stopped at i = $i and number = $num"). "<br>"; // i = 10 , num =40

//do...while
echo "<br>"."<br>"."<br>";
echo " by use DO WHILE loop"."<br>";

$i = 0;
$num = 0;
do {
    $i++;
} while ($i < 10);
echo ("stopped at i = $i"). "<br>"; // i=10

//foreach
echo "<br>"."<br>"."<br>";
echo "by use FOR EACH loop"."<br>";

$array = array(1, 2, 3, 4, 5);
// $array = [1,2,3,4,5];     
foreach ($array as $value) {
    echo " Value is $value <br />";
}
                                /* O/P
                                Value is 1
                                Value is 2
                                Value is 3
                                Value is 4
                                Value is 5 */











echo"<br>"."<br>"."<br>";
  
//  6-Answer: 


$broage ="10";

switch($broage){
    case $broage<5 :echo"Stay at home";
        break;
    
    case $broage==5 :echo"Go to Kindergarden";
        break;
    
    case $broage>=6 && $broage<=12 :echo"Go to grade $broage";
        break;
}

// 1- Answer:

phpinfo();


?>

