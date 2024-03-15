<?php

include("config/connecttion.php");

$sql = "update users set name = 'Harry' where id=3";
$result =$connection->query($sql);

if ($result == true) {
    echo "<br>Your Record Has Been Updated";
}
else {
    echo "<br>No Record Has Been Updated!";
}







?>