<?php

    $soma = 0;
    $numero = 0;

    for ($numero=0; $numero <= 50; $numero++) {
        $soma = $numero + $soma;
        echo $soma. " = ".$numero. " + ". $soma;
        echo "<br>";
    };

?>