<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="">
<title>Calculadora	</title>
</head>
<body>
<?php
$peso = $_POST["peso"];
$alt = $_POST["alt"];
$imc = "0";

$imc = $peso / ($alt * $alt);

if ($imc < 18.5){
	echo "Você está abaixo do peso";
}
else if ($imc >= 18.5 && $imc <=24.9){
	echo "Você está no seu peso ideal";
}
else if ($imc >= 25 && $imc <=29.9){
	echo "Você está acima de seu peso (sobrepeso)";
}
else if ($imc >= 30 && $imc <=34.9){
	echo "Obesisdade grau I";
}
else if ($imc >= 35 && $imc <=39.9){
	echo "Obesisdade grau II";
}
else {
	echo "Obesisdade grau III";
}
?>
</body>
</html>