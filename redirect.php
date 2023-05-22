<?php
session_start();
//include __DIR__ . './function.php';
var_dump("out".$_SESSION['password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h2>La password generata è: </h2>
    <h1><?php echo $_SESSION['password'] ?></h1>
    <button>Logout</button>
</body>
</html>