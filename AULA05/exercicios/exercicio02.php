<?php

    $conteudo = file_get_contents("usuarios.json");

    $dados = json_decode($conteudo, true);

    foreach($dados["usuarios"] as $usuario) {
        echo "Nome: " . $usuario["nome"] . "<br>";
        echo "Email: " . $usuario["email"] . "<br><br>";
    }

?>
