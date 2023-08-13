<?php

include_once('oop/models/Auth.php');

if(isset($_POST['login'])){
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password']
    ];

    $result = Auth::login($data);
    // die(var_dump($result));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Login</title>
</head>

<body>
    <div class="container mt-3">
        <?php if(isset($result)) : ?>
        <div class="alert alert-<?php $result["status"]==='error' ? print ("danger") : "success"?>">
            <?= $result["message"]?>
        </div>
        <?php endif?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card my-3">
                    <div class="card-header text-center">
                        <img src="https://a.storyblok.com/f/178900/200x200/bf5efdf48a/0789665e73cd684dc3eb8a002a8305c11633370981_large.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle mb-2" width="170px" alt="profile">
                    </div>
                    <div class="card-body my-3">
                        <form class="p-5 pt-2" action="" method="POST">
                            <div class="mb-3">
                                <input class="form-control border-warning" type="text" name="username" id="username" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <input class="form-control border-warning" type="password" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="d-grip gap-2">
                                <button name="login" type="submit" class="btn btn-warning form-control mb-1 w-100">Login</button>
                                <div class="text-center form-text text-dark">Anak Baru? <a class="text-dark fw-bold" href="register.php">Register Dulu</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>