<?php
 function randomPassword(){
    $lunghezzaPassword = $_GET['lunghezza'];
    $caratteriDisponibili = 'qwertyuiopasdfghjklzxcvbnm1233456789QWERTYUIOPASDFGHJKLZXCVBNM!"£$%&/()=?^*/';
    $password = '';
    for ($i=0; $i <$lunghezzaPassword ; $i++) { 
        $indiceRandom = rand(0, strlen($caratteriDisponibili)-1);
        $returnCaratteri = $caratteriDisponibili[$indiceRandom];
        $password .= $returnCaratteri;
    };
    return $password;
}

?>