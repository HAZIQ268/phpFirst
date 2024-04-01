<?php
    include("../configuration/conn.php");

    $ID = $_GET['id'];
    $sql = "select * from `product` where category =$ID";
    $result = mysqli_query($conn ,$sql);
   
    while ($opt = mysqli_fetch_assoc($result)) {
        echo "<br>";
        echo $opt['name'];
    }
    



?>