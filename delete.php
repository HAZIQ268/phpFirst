<?php

include("config/connecttion.php");

$sql = "delete * from users where id=3";
$result =$connection->query($sql);

if ($result == true) {
    echo "<br>Your Record Has Been deleted";
}
else {
    echo "<br>No Record Has Been deleted!";
}







?>