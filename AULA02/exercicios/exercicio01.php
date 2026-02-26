<?php

    $nome = "ANA CLARA";
    $idade = 17;
    $cidade = "Anaclarolândia";

    echo $nome;
    echo "<br>";
    echo $idade;
    echo "<br>";
    echo $cidade;
    echo "<hr>";


    $variaveis = ['ANA CLARA', 17 , 'Anaclarolândia'];
    $qntde = count($variaveis);

    for ($i=0; $i <= $qntde - 1; $i++) {
        echo $variaveis[$i];
        echo "<br>";
    };
    echo "<hr>";

    foreach ($variaveis as $indice => $conteudo) {
        echo $conteudo;
        echo "<br>";
    }
    echo "<hr>";
 
?>