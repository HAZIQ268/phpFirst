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
                <input type="text" class="form-control" name="username" placeholder="Enter Your Name" autocomplete="off" id="username">
                </div>
                <div class="form-grp">
                <label for="email">Password</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" id="email">
                </div>
                <div class="form-grp">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off" id="password">
                </div>
                <div class="form-grp">
                <label for="course"><h3>Select Your Course</h3></label><br>
                <input type="radio" name="course" value="JAVA" id="">JAVA<br>
                <input type="radio" name="course" value="FLUTTER" id="">FLUTTER<br>
                <input type="radio" name="course" value="REACT" id="">REACT<br>
                <input type="radio" name="course" value="VUE" id="">VUE<br>
                </div>
                <div class="form-grp">
                <label for="course"><h3>Select Your Food</h3></label><br>
                <input type="checkbox" name="food[]" value="Steak" id="">Steak<br>
                <input type="checkbox" name="food[]" value="Fries" id="">Fries<br>
                <input type="checkbox" name="food[]" value="Chinese" id="">Chinese<br>
                <input type="checkbox" name="food[]" value="Tikka" id="">Tikka<br>
                </div>

                <input type="submit" name="submit" class="btn btn-warning mt-3 fw-bold " value="submit">
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