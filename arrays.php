<?php

$fruits = ["apple","mango","orange","pine apple"];
echo "<br> $fruits[1]";


// foreach loop all data print

foreach ($fruits as $key) {
    echo "<br> $key";
}

// Associate Array

$employee = [
    "peter" => "Web Developer",
    "alex" => "UI/UX",
    "jack" => "Grapic Designer",
    "Henrey" => "App Developer"
];

foreach($employee as $key => $value) {
    echo "<br>  $key : $value";
};


$num = [
    "multi" => "*",
];

foreach ($num as $key => $value) {
    for ($c=0; $c<=25; $c++) { 
        for ($num=0; $num<=$c ; $num++) { 
    
            echo "*";
        }
        echo "<br>";
    }
}




?>