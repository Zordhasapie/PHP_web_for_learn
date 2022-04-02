<?php
use Envloader\DotEnv;

function redirect($URL)
{
    header('Location: ' . $URL);
}

function is_logged_in()
{
    return isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;
}

function login($username, $password)
{
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
}

function logout(){
    session_destroy();
    redirect('/login.php');
}

