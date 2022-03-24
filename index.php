<?php 
    require "module/function.php";
    session_start();
    if (!is_logged_in()){
        redirect('/login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Me And The Web</title>
</head>

<body>

</body>

</html>