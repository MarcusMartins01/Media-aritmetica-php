<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmética</title>
</head>
<body>
    <form method="post">
        <label for="nota1">Nota 1</label>
        <input type="text" name="nota1" id="nota1">
        <label for="Nota2">Nota 2</label>
        <input type="text" name="nota2" id="nota2">
        <label for="Nota3">Nota 3</label>
        <input type="text" name="nota3" id="nota3">
        <label for="Nota4">Nota 4</label>
        <input type="text" name="nota4" id="nota4">
        <label for="Nota5">Nota 5</label>
        <input type="text" name="nota5" id="nota5">
        <input type="submit" name="Calcular">
    </form>
</body>
</html>

<?php

    if (isset($_POST['Calcular'])) {
        
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $nota5 = $_POST["nota5"];

        $media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

        if ($media >= 5) {
            $situacao = "<span style='color: blue;'>Aprovado</span>";
        } else {
            $situacao = "<span style='color: red;'>Reprovado</span>";
        }
        echo "Sua média: ".$situacao;
    }


?>