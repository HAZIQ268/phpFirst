<?php

$name = "hello";
$age = 54;
$isCnic = false;
$marks = 12.5;

echo "$name";
echo "$age";
echo "<br>$age";
echo "<br>isCnic ";

$a = 40;
$b = 20;
$c = $a + $b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;
echo "<br>the sum of $a + $b is : .$c";
echo "<br>the sum of $a - $b is : .$d";
echo "<br>the sum of $a * $b is : .$e";
echo "<br>the sum of $a / $b is : .$f";
echo "<br>the sum of $a % $b is : .$g";


// ARTHMETIC OPERATORS
$apple =45;
// post increment
echo "<br> the increment of this number is:".$apple++;
echo "<br>" .$apple;

// PRE iNCREMENT
echo "<br> the increment of this number is:".++$apple;

// Assignment
$a =209;
echo "<br> the increment of this number is:".$a--;
echo "<br>" .--$a;
echo "<br> the increment of this number is:".$a++;
echo "<br>" .$a+7;
echo "<br> the increment of this number is:".$a-8;
echo "<br> the increment of this number is:".$a-102;


?>