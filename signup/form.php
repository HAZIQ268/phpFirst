    <?php

    include("../configuration/conn.php");
    
    
    if (isset($_POST ['submit'])){
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "select * from student where name = '$username' and email = '$email' and password ='$password'";
        $result = mysqli_query($conn ,$sql);

        echo "<pre>";
        print_r($result);
        echo "<pre>";

        if ($result->num_rows>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<br>Login Successful";
                echo "<script>setTimeout(function(){
                    window.location.href='login.php'
                },3000)</script>";
            }
        }else {
            echo "<br>Login Failed!";
        }
       
    }
    
    
    
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
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <div class="form-grp">
                            <label for="username">Name</label>
                            <input type="text" name="username" class="form-control"  autocomplete="off" id="">
                        </div>
                        <div class="form-grp">
                            <label for="name">Email</label>
                            <input type="email" name="email" class="form-control" autocomplete="off" id="">
                        </div>
                        <div class="form-grp">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" autocomplete="off" id="">
                        </div>
                        <input type="submit" value="submit" name="submit" class="btn btn-success mt-3">
                    </form>
                </div>
                <div class="col-lg-4">
                    <?php
                    echo "<pre>";
                    print_r($_POST);
                    echo "<pre>";
                    ?>
                </div>
            </div>
        </div>
        
    </body>
    </html>