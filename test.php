<?php

include("vendor/autoload.php");

// use Helpers\Auth;
// use Helpers\HTTP;

// use Helpers\HTTP;
// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;

// Auth::check();
// HTTP::redirect();

// $db = new MySQL;
// $db->connect();

// $table = new UsersTable;
// $table->insert();

// HTTP::redirect("/index.php", "redirect=test");
// Auth::check();

// use Libs\Database\MySQL;

// $mysql= new MySQL;
// $db= $mysql->connect();
// $result = $db->query("select * FROM roles");
// print_r($result->fetchAll());

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
$table= new UsersTable(new MySQL);
$id= $table->insert([
    "name" => "Alice",
    "email" => "alice@gmail.com",
    "phone" => "2384902842",
    "address" => "Yangon",
    "password" => "password",
]);
echo $id;



