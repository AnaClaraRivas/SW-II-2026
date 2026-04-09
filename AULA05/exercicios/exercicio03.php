<?php

    $conteudo = file_get_contents("produtos.json");

    $dados = json_decode($conteudo, true);

    $novo_produto = [
        "nome" => "pelucia",
        "preco" => 567,
        "quantidade" => 12
    ];

    $dados["produtos"][] = $novoproduto;

    $json_novo = json_encode($dados);

    file_put_contents("produtos.json", $json_novo);

?>
