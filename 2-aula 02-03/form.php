<?php

$nome=$_POST['nome'];
$n1=$_POST['nota1'];
$n2=$_POST['nota2'];
$n3=$_POST['nota3'];
$faltas=$_POST['faltas'];
$media=($n1+$n2+$n3)/3;

if ($faltas >10) {
    echo "Excesso de Faltas<br>Conselho";
}



elseif ($media < 5) {
    echo "Reprovado";
} elseif ($media < 7) {
    echo "Conselho";
}

 else {
    echo "Aprovado";
}



 ?>