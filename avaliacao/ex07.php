<?php
/*
    Entre com três números diferentes e mostra na uma mensagem indicando qual
    é o maior.
*/

$num1 = 98;
$num2 = 99;
$num3 = 69;
$maior = 0;

$maior_de_dois = $num1>$num2;
if($maior_de_dois == true)
    $maior = $num1;
else 
    $maior = $num2;

if($num3>$maior)
    $maior = $num3;

echo 'O número '.$maior.' é o maior entre '.$num1.', '.$num2.' e '.$num3;
?>