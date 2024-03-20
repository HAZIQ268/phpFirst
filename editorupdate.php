<?php
    include("configuration/conn.php");

    $sql = "update student set name = 'Harry' where id=7";
    $result =$conn->query($sql);

?>