<?php

include("../vendor/autoload.php");
use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$email= $_POST['email'];
$password= $_POST['password'];

$table= new UsersTable(new MySQL);
$user= $table->findByEmailAndPassword($email, $password);

if($user) {
    if ($user->suspended){
        HTTP::redirect("/index.php", "suspended=true");
    }
    session_start();
    $_SESSION['user']= $user;
    HTTP::redirect("/profile.php");
}else{
    HTTP::redirect("/index.php", "incorrect=login");
}



// if($email === "alice@gmail.com" && $password === "password") {
//     session_start();
//     $_SESSION['user']= ["name"=> "Alice"];
//     header("location: ../profile.php");
//     exit();
// }

// header("location: ../index.php?incorrect=login");
// exit();
