<?php
$nome=$_POST['nome'];
$v1=$_POST['venda'];
if ($v1 <=1800) {
    echo "$nome teve vendas baixas";
}
elseif ($v1 > 1800) {
    echo "$nome teve vendas altas <br> Parabéns";
}
?>