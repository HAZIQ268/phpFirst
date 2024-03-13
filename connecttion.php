<?php
// connect php to mysql

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "class";

        $connection = new mysqli ($serverName ,$userName ,$password ,$dbName);


        if ($connection == true) {
            echo "<br> Connection Successful" ;           
        }
        else {
            echo "<br> Connection Failed" ;           
        }



?>