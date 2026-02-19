<?php

$numero = 4;

for ($i = 1; $i <= 8; $i++){
    if ($i % 2 == 0) {
        echo "Número: " .$i. " ---> Aprovado! <br>";
    } else {
        echo "Número: " .$i. " ---> Reprovado! <br>";
    }
}
?>