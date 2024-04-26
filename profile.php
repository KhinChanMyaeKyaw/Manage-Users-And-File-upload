<?php

include("vendor/autoload.php");
use Helpers\Auth;
$user = Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-4" style="width: 600px">
        <h1 class="h4 mb-4">Profile</h1>

        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning">
                Cannot upload file
            </div>
        <?php endif ?>

        <?php if($user->photo): ?>
            <img src="_actions/photos/<?= $user->photo?>" class="photo-thumb" width="200">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data" class="input-group my-4">
            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>
        </form>


        <ul class="list-group">
            <li class="list-group-item">Name: <?= $user->name ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Phone: <?= $user->phone ?></li>
            <li class="list-group-item">Address: <?= $user->address ?></li>
        </ul>
        <br>

        <a href="admin.php" class="mx-4">Manage Users</a>
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>