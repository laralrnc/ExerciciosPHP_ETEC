<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> IMC </title>
</head>
<?php
$alt = $_POST["alt"]; 
$peso = $_POST["peso"];
$op = "0";

$op = $peso/($alt*$alt);
if ($op < 18.5){
echo "Seu IMC é " .$op. " cuidado você está abaixo do peso ideal";
}
else if ($op >= 18.5 && $op<=24.9) {
echo "Seu IMC é " .$op. " e parabéns — você está em seu peso normal!";
}
else if ($op >= 25 && $op<=29.9) {
echo "Seu IMC é " .$op. " e você está acima de seu peso (sobrepeso)";
}
else if ($op >= 30 && $op<=34.9) {
echo "Seu IMC é " .$op. " cuidado você está com Obesidade Grau I";
}
else if ($op >= 35 && $op<=39.9) {
echo "Seu IMC é " .$op. " cuidado você está com Obesidade Grau II";
}
else {
echo "Seu IMC é " .$op. " cuidado você está com Obesidade Grau III";
}
?>
</body>
</html>