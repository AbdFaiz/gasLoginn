<?php

include_once('oop/models/Auth.php');

if(isset($_POST['register'])) {
    $data = [
        "name" => $_POST["name"],
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "password_confirm" => $_POST["password_confirm"],
    ];

    $register = Auth::register($data);

    // die(var_dump($register));

    if($register["status"] === "success") {
        header("Location: login.php");
    }
    else {
        header("Location: register.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-3">
                    <div class="card-header text-center">
                        <img src="https://i.pinimg.com/236x/19/99/19/199919380101f2982bc8e10c0a3f4c89.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle mb-2" width="170px" alt="profile">
                    </div>
                    <div class="card-body my-3">
                        <form class="p-5 pt-2" action="" method="POST">
                            <div class="mb-3">
                                <input class="form-control border-dark" type="text" name="name" id="name" placeholder="Name">
                            </div>
                                <div class="mb-3">
                                    <input class="form-control border-dark" type="text" name="username" id="username" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control border-dark" type="password" name="password" id="password" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <input class="form-control border-dark" type="password" name="password_confirm" id="password_confirm" placeholder="Sekali Lagi">
                                </div>
                                <div class="d-grip gap-2">
                                    <button name="register" type="submit" class="btn btn-dark px-5 mb-1  form-control">Register</button>
                                    <div class="text-center text-dark form-control">Anda Sepuh? <a class="text-dark fw-bold" href="login.php">Login Puh</a></div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html