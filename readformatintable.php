<?php

    include("configuration/conn.php");

    $sql ="select * from student";

    $result = mysqli_query($conn ,$sql);





?>
    <!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
 <div class="container">
    <table class="table text-white table-bordered ">
    <tr class="bg-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            while ($rows = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>".$rows['id']."</td>
                <td>".$rows['name']."</td>
                <td>".$rows['email']."</td>
                <td>".$rows['password']."</td>
                <td><a href='editorupdate.php?idd =".$rows['id']."' class='btn btn-success '>Edit</a></td>
                <td><a href='createdelete.php?idd =".$rows['id']."' class='btn btn-danger '>Delete</a></td>

                
              
                
                </tr>";
            }
            ?>
    </table>
 </div>
</body>