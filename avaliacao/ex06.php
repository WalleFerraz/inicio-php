<?php
/*
    Entre com dois números quaisquer e mostra uma mensagem indicando qual é
    o maior, ou se são iguais.
*/
$num1 = 14;
$num2 = 10;

$resultado = $num1 <=> $num2;

if($resultado == -1)
    echo 'O número '.$num1.' é menor que o número '.$num2;
else if($resultado == 0)
    echo 'O número '.$num1.' é igual ao número '.$num2;
else 
    echo 'O número '.$num1.' é maior que o número '.$num2;

?>