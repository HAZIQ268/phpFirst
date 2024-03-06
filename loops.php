<?php

// loops

for($i=1; $i<=10; $i++){
    echo "<br> 8 x $i =" .$i*8;
}

// Second Method
$tablenumber =18;
for ($b=0; $b<=10; $b++) { 
 echo "<br> $tablenumber x $b =" .$tablenumber*$b;
 echo "<br>";
}

for ($c=0; $c<=10; $c++) { 
    for ($d=0; $d<=$c ; $d++) { 

        echo "*";
    }
    echo "<br>";
}

// While loop
$tree = 65;
while ($tree<=70) {
    echo "<br> this is while loop" .$tree;
    $tree++;
}

// Do While Loop
$file=90;
do {
    echo "<br> this is do while loop" .$file;
    $file++;
} while ($file<=93);

    ?>