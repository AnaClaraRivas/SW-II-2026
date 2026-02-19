<?php

    $nota01 = 9; 
    $nota02 =  7; 
    $nota03 = 5; 
    $soma = $nota01 + $nota02 + $nota03 ;
    $media = $soma / 3 ;

    echo "Primeira nota: " .$nota01. "<br>";
    echo "Segunda nota: " .$nota02. "<br>";
    echo "Terceira nota: " .$nota03. "<br>";

    if ($media > 6){
        echo "Média: ".$media. " -----> Aprovado!";
    } else {
        echo "Média: ".$media. " -----> Reprovado!";

    }
?>