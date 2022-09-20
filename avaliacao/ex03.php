<?php
/* 
    Entre com dois números quaisquer e exiba sua soma, diferença, produto e
    quociente, formatados com 2 casas decimais.

*/
$num1 = 12;
$num2 = 15;

echo 'Soma: '.number_format(($num1+$num2),2,',').'<br>';
echo 'Diferença: '.number_format(($num1-$num2),2,',').'<br>';
echo 'Produto: '.number_format(($num1*$num2),2,',').'<br>';
echo 'Quociente: '.number_format(($num1/$num2),2,',');

?>