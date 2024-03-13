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
                <form action="" method="POST">
                    <div class="form-grp">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter Your Name" autocomplete="off" id="">
                    </div>
                    <div class="form-grp">
                        <label for="username">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" id="">
                    </div>
                    <div class="form-grp">
                        <label for="username">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off" id="">
                        <div class="form-grp">
                        <label for=""><h3>Select Your Course</h3></label>
                        <input type="radio" name="course" value="java"  id="">Java<br>
                        <input type="radio" name="course" value="c++"  id="">C++<br>
                        <input type="radio" name="course" value="c#"  id="">C#<br>
                        <input type="radio" name="course" value="flutter"  id="">Flutter<br>
                        </div>
                    </div>
                        <div class="form-grp">
                        <label for=""><h3>Select Your Food</h3></label>
                        <input type="checkbox" name="food[]" value="Steak">Steak<br>
                        <input type="checkbox" name="food[]" value="Fries">Fries<br>
                        <input type="checkbox" name="food[]" value="Chinese">Chinese<br>
                        <input type="checkbox" name="food[]" value="Tikka">Tikka<br>
                        </div>
                        <input type="submit" class="btn btn-warning fw-bold mt-3" value="submit" >
                    </form>
                </div>
                <div class="col-lg-6">
            <?php
// NO PRIVACY EXICST IN GET METHOD
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// PRIVACY EXICST IN POST METHOD

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
            </div>
        </div>
    </div>
</body>
</html>