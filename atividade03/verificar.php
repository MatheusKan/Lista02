<?php
    $A = $_POST["n1"];
    $B = $_POST["n2"];
    if ($A > $B) {
        echo "“A maior que B”";
    }elseif ($A < $B) {
        echo "A menor que B";
    }else {
        echo "A e B são iguais";
    }



?>