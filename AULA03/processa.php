<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>

    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        // echo $nome;

        // $anonas = 2026 - $idade;
        $ano = date('Y');

        $anonas = $ano - $idade;

    ?>

    <p>O nome é: <?php echo $nome ?> </p>
    <p>O email é: <?php echo $email ?></p>
    <p>A idade é: <?php echo $idade ?></p>
    <p> O seu ano de nascimento é: <?php echo $anonas ?></p>
        <?php 
                if ($idade >= 18){
                    echo "<p style='color: red;'> Você é maior de idade!</p>";
                } else {
                    echo "<p style='color: blue;'> Você é menor de idade!</p>";
                };


                echo "<h3> LISTA DE CLIENTES </h3>";
                echo "<ul>";
                /// laço de repetição
                for ($i=1; $i <= 13; $i++){
                    echo "<li>Cliente " .$i. "</li>";
                }
                echo "</ul>";


                echo "<h3> LISTA COM PARAMETRO IGUAL IDADE </h3>";
                echo "<ul>";
                /// laço de repetição
                for ($i=1; $i <= $idade; $i++){
                    echo "<li>Cliente " .$i. "</li>";
                }
                echo "</ul>";

        ?>

    <!-- <h3> LISTA DE CLIENTES </h3>;  
    <ul> 
        <li> Cliente 1</li>
        <li> Cliente 2</li>
        <li> Cliente 3</li>
    </ul> -->

</body>
</html>