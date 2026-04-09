<?php

    $conteudo = file_get_contents("produtos.json");
    $dados = json_decode($conteudo, true);
    $nomeremov = "Moto";

    foreach ($dados["produtos"] as $i => $produto) {

        if ($produto["nome"] == $nomeremov) {
            unset($dados["produtos"][$i]);
        }
    }

    $dados["produtos"] = array_values($dados["produtos"]);


    $json = json_encode($dados);
    file_put_contents("produtos.json", $json);


?>
