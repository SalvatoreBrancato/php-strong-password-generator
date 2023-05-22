<?php
    
    include __DIR__ . './function.php';
    session_start();
    //$_SESSION['password'] = randomPassword();
    $psw =  randomPassword();
    $_SESSION['password'] = $psw;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <a href="redirect.php">test</a>
    <div class="w-100 h-25 bg-success">
        <h1 class="text-center">Generatore Password</h1>
    </div>
    <div class="container">
        <form action="index.php" method="GET">
            <label for="">Inserisci la lunghezza della password: </label>
            <input type="number" placeholder="Inserisci numeri..." name="lunghezza">
            <label>Includi Numeri</label>
            <input type="checkbox" name="numeri">
            <label>Includi Lettere</label>
            <input type="checkbox" name="lettere">
            <label>Includi Caratteri Speciali</label>
            <input type="checkbox" name="caratteri">
            <button>Genera password</button>
        </form>
    </div>
</body>
</html>