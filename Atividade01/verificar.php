<?php
    $numero = $_POST["n1"];
    if ($numero > 0) {
        echo "Valor Positivo";
    }elseif ($numero < 0) {
        echo "Valor Negativo";
    }else {
        echo "Igual a Zero";
    }



?>