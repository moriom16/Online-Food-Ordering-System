<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang=en>
<head>
    <title>Signin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: #008080;

        }

        h3 {
            text-align: center;
            font-family: Cursive;
        }

    </style>
</head>
<body>

<div class="row">
    <div class="col-6">
    </div>
    <div class="col-5">
        <br>
        <div class="container p-3 my-5" style="background-color:#FFFAFA;border-radius: 30px;">
            <form action="login.php" method="post">
                <h3>USER LOGIN</h3>
                <form method="POST">

                    <div class="form-group">


                        <input type="text" name="email" class="form-control"
                               style="border:hidden;border-bottom:1px solid Maroon" placeholder="E-mail" required>

                    </div>
                    <div class="form-group ">


                        <input type="text" name="password" class="form-control"
                               style="border:hidden;border-bottom:1px solid Maroon" placeholder="Password" required>

                        <div class="form-group pt-3">
                            <a class="font-weight-bold" href="registration.php" style="font-size:16px;"
                               class="text-primary">Create New Account</a>

                        </div>

                        <button class="btn btn-success font-weight-bold text-white" name="login" type="submit">LOGIN
                        </button>

                    </div>

                </form>

        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</div><br><br><br>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
<?php

error_reporting(0);
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];

    if ($username == null && $password == null) {
        echo '<script>alert("Please fill up the form")</script>';
    } else {
        $query = "SELECT * FROM users WHERE email='$username' &&  password='$password'";

        $data = mysqli_query($link, $query);
        $total = mysqli_num_rows($data);
        $log_con = mysqli_fetch_assoc($data);

        if ($total == 1) {

            if ($log_con['user_type'] == "customer") {
                $_SESSION['email'] = $username;
                header("location:order.php");
            } else if ($log_con['user_type'] == "resturernt owner") {
                $_SESSION['email'] = $username;
                header("location:resturent-owner/profile.php");
            } else if ($log_con['user_type'] == "rider") {
                $_SESSION['email'] = $username;
                header("location:rider/profile.php");
            }
        } else {
            echo '<script>alert("User name or Password is Incorrect")</script>';
        }
    }

}


?>


      