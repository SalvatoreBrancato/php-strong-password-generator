<?php
 function randomPassword(){
    if(isset($_GET['lunghezza'])){
        $lunghezzaPassword = $_GET['lunghezza'];
    }else{
        return;
    }
    $numeri = $_GET['numeri'];
    $lettere = $_GET['lettere'];
    $caratteriSpeciali = $_GET['caratteri'];
    $caratteriDisponibili = '';


    if ($numeri == "on"){
        $numeriDisponibili = '123456789';
        $caratteriDisponibili .= $numeriDisponibili; 
    };

    if ($lettere == "on"){
        $lettereDisponibili = 'qwertyuiopasdfghjklzxcvbnm';
        $caratteriDisponibili .= $lettereDisponibili; 
    };

    if ($caratteriSpeciali == "on"){
        $caratteriSpecialiDisponibili = '!"£$%&/()=?^';
        $caratteriDisponibili .= $caratteriSpecialiDisponibili; 
    };

    $password = '';
    for ($i=0; $i <$lunghezzaPassword ; $i++) { 
        $indiceRandom = rand(0, strlen($caratteriDisponibili)-1);
        $returnCaratteri = $caratteriDisponibili[$indiceRandom];
        $password .= $returnCaratteri;
    };
    return $password;
}

?>