<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

   <form action="" method="GET">
        <label for="">Digite o email: </label>
        <input type="text" name="email" require>
        <input type="submit">
   </form> 
   <br>

</body>
</html>

<?php

    $usuarioencontrar = null;
    if (isset($_GET["email"])) {

        $emailBuscar = $_GET["email"];
        $conted = file_get_contents("usuarios.json");
        $dados = json_decode($conted, true);
        foreach ($dados["usuarios"] as $usuario) {
            if ($usuario["email"] == $emailBuscar) {
                $usuarioEncontrar = $usuario;
                break;
            }
        }
        if ($usuarioEncontrar) {
            echo "usuario encontrado:<br><br>";
            echo "nome: " . $usuarioEncontrar["nome"] . "<br>";
            echo "email: " . $usuarioEncontrar["email"] . "<br>";
            echo "id: " . $usuarioEncontrar["id"];
        } else {
            echo "usuario não encontrado.";
        }
    }

?>
