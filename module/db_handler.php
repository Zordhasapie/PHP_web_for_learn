<?php
include 'dotenv.php';

(new DotEnv(__DIR__ . '/.env'))->load();

$link = mysqli_connect($_ENV["DB_Host"], $_ENV["DB_User"], $_ENV["DB_Pass"], $_ENV["DB_Name"]);

function login($username, $password){
    
}

