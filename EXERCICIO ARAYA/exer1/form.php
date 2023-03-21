<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php
	// Recebe os dados do formulário
	$peso = str_replace(",", ".", $_POST['peso']);
	$altura = str_replace(",", ".", $_POST['altura']);

	// Calcula o IMC
	$imc = $peso / ($altura * $altura);

	// Exibe o resultado do IMC
	echo "<p>Seu IMC é: " . number_format($imc, 2, ".", "") . "</p>";

	// Verifica a situação do usuário de acordo com o IMC calculado
	if ($imc < 18.5) {
		echo "<p>Você está abaixo do peso ideal.</p>";
	} elseif ($imc < 25) {
		echo "<p>Seu peso está dentro do normal.</p>";
	} elseif ($imc < 30) {
		echo "<p>Você está com sobrepeso.</p>";
	} elseif ($imc < 35) {
		echo "<p>Você está com obesidade grau I.</p>";
	} elseif ($imc < 40) {
		echo "<p>Você está com obesidade grau II.</p>";
	} else {
		echo "<p>Você está com obesidade grau III.</p>";
	}
	?>

	<p><a href="form_imc.php">Voltar para o formulário</a></p>
</body>
</html>