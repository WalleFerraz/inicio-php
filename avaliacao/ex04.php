<?php
/*
    Entre com um número (suponha que ser positivo) e exiba seu quadrado, raiz,
    e elevado a 10, formatados com 4 casas decimais.
*/
$num = 4;

echo 'O quadrado de '.$num.' é: '.number_format((pow($num,2)),4,',','.').'<br>';
echo 'A raiz de '.$num.' é: '.number_format((sqrt($num)),4,',','.').'<br>';
echo 'A décima potência de '.$num.' é: '.number_format(($num**10),4,',','.');
?>