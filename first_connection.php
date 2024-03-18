<?php

    include("config/connecttion.php");

    $sql = "insert into users (Name,Email,password) values ('peter','peter@gmail.com' ,'APPLE123')";

    $result = $connection->query($sql);

    if ($result == true) {
        echo "<br>Your Record Has Been Inserted";
    }
    else {
        echo "<br>No Record Has Been Inserted!";
    }






?>