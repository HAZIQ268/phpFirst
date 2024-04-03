<?php
    include("../configuration/conn.php");


    if (isset($_POST["submit"])) {
        $userName = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $image = $_FILES["image"]["name"];

        $sql ="insert into employee (name,email,password,image) values ('$userName' ,'$email','$password','$image')";

        $result = mysqli_query($conn ,$sql);

        if ($result == true) {
            echo "Your Record Has Been Inserted !" ;
        }
        else {
            echo "Your Record Has Been Inserted !" ;
            
        }
    }

    
    if (isset($_FILES["image"])) {
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $file_tmp = $_FILES['image']['tmp_name'];


        move_uploaded_file($file_tmp , "../images/" .$file_name);
      
    }

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color : white ;
        }
    </style>
</head>
<body>
    <div class="container col-lg-6">
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-grp">
            <label for="">Username</label>
            <input type="text" name="username"  class="form-control" id="">
        </div>
        <div class="form-grp">
            <label for="">Email</label>
            <input type="email" name="email"  class="form-control" id="">
        </div>
        <div class="form-grp">
            <label for="">Password</label>
            <input type="password" name="password"  class="form-control" id="">
        </div>
        <div class="form-grp">
            <label for="">Select Your Image</label>
            <input type="file" name="image"  class="form-control" id="">
        </div>
        <input type="submit" value="submit" name="submit" class="mt-3 btn btn-success">
        </form>
    </div>
</body>
</html>