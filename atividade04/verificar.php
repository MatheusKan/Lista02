<?php
    $A = $_POST["a"];
    $B = $_POST["b"];
    $C = $_POST["c"];
    if ($A + $B >= $C and $A + $C >= $B and $B + $C >= $A and $A > 0 and $B > 0 and $C > 0) {
        if ($A == $B and $A == $C) {
            echo "equilátero";
        }elseif ($A != $B and $A != $C and $B != $C) {
            echo "escaleno";
        }else{
            echo "isósceles";
        }
    }else {
        echo "Não forma um triangulo";
    }



?>