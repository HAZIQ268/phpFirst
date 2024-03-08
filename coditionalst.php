<?php
$age = 10;
if ($age>=20) {
 echo "<br> You Can Drive a Car";
}
else {
    echo "<br> You Can't Drive a Car";   
}
echo"<br>";

$cnic =true;
$age = 50;
if ($age>=20) {
    echo "<br> You Can Drive a Car";

if ($cnic === true) {
    echo "<br> You Can take my Car";
}
else {
    echo "<br> just go home and purshase your own car";
}
}
else {
    echo "<br> you can't drive a car";
}

for ($myNumber=0; $myNumber<=50 ; $myNumber++) { 
    if ($myNumber%2==0) {
        echo "<br> The Number Is Even" .$myNumber;
    }
    else {
        echo "<br> The Number Is Odd" .$myNumber;
    }
}
?>