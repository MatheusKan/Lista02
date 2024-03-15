<?php
    $jokempo = $_POST["jokempo"];
    $comp = rand(1,3);
    $nome = $_POST["nome"];
    switch ($jokempo) {
        case "Pedra":
            $jokempo = 1;
            echo "<img src='pedra.png'>";
            break;
        case "Papel":
            $jokempo = 2;
            echo "<img src='papel.png'>";
            break;
        case "Tesoura":
            $jokempo = 3;
            echo "<img src='tesoura.png'>";
            break;
        default:
            break;  
    }   
    switch ($comp) {
        case 1:
            echo "<img src='pedra.png'>";
            break;
        case 2:
            echo "<img src='papel.png'>";
            break;
        case 3:
            echo "<img src='tesoura.png'>";
            break;
        default:
            break;  
    }       



    if (($jokempo == 1 and $comp == 1) or ($jokempo == 2 and $comp == 2) or ($jokempo == 3 and $comp == 3) ) {
        echo "<p>$nome Deu empate</p>";
    }elseif (($jokempo == 1 and $comp == 3) or ($jokempo == 2 and $comp == 1 or ($jokempo == 3 and $comp == 2))) {
        echo "<p>Parabéns $nome, você ganhou</p>";
    }else{
        echo "<p>Infelizmente $nome, você perdeu  ";
    }
?>