<?php
include 'dotenv.php';

(new DotEnv(__DIR__ . '/.env'))->load();

$link = mysqli_connect($_ENV["DB_Host"], $_ENV["DB_User"]);

function login($username, $password){

}

