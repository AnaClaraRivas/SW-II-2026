<?php

    $produtos = ['produtos' => [
        [
            'nome' => 'carro',
            'preco' => 80000,
            'quantidade'=> 89
        ],
        [
            'nome'=> 'computadot',
            'preco'=> 58,
            'quantidade'=> 12
        ],
        [
            'nome'=> 'boneco',
            'preco'=> 1.78,
            'quantidade'=> 56
        ]
    ]];

    $json = json_encode($produtos);
    file_put_contents("produtos.json", $json);

?>
