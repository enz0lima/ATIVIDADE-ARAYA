<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas do aluno</title>
</head>
<body>
    <?php
    $nome = $_POST["nome"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;

    echo "<h2>Notas do aluno: $nome</h2>";
    echo "<p>Nota 1: $nota1</p>";
    echo "<p>Nota 2: $nota2</p>";
    echo "<p>Média: $media</p>";

    if ($media < 4.0) {
        echo "<p>Situação: Reprovado</p>";
    } elseif ($media >= 4.0 && $media < 6.0) {
        echo "<p>Situação: Exame final</p>";
    } else {
        echo "<p>Situação: Aprovado</p>";
    }
?>
</body>
</html>