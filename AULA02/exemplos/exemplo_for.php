<?php

    for ($i=01; $i <= 5; $i++) {
        echo $i;
        echo "<br>";
    };
    echo "<hr>";

    $nomes = ['THAÍS','SAMUEL','PATRICIA','WILLIAM','ANA CLARA'];

    $qntde = count($nomes);
    echo $qntde;
    echo "<hr>";

    //// echo $nomes; ---> jeito errado
    // echo $nomes[0]; // mostrar pelo indice
    // echo "<br>";
    // echo $nomes[1];
    // echo "<br>";
    // echo $nomes[2];
    // echo "<hr>";

    
    for ($i=0; $i <= $qntde - 1; $i++) {
        echo $nomes[$i];
        echo "<br>";
    };
    echo "<hr>";

    foreach ($nomes as $indice => $conteudo) {
        echo $indice." ➔ ".$conteudo;
        echo "<br>";
    }
    echo "<hr>";
 










?>