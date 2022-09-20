<?php
/*  
    A calculadora do Capistrano pifou, justo quando ele precisa fazer vários
    cálculos. Ela tem um computador, mas não sabe que um dos acessórios do Windows
    é uma calculadora. Sendo estudante de programação, Capistrano resolveu fazer um
    programa. A especificação que bolou prevê que programa entre dois números
    inteiros (o que atende suas necessidades) e em seguida um símbolo de operação. Se
    este for '+', o programa soma os números, se '-', subtrai, se '*' multiplica e se '/' divide.
    Se o símbolo for diferente desses, é mostrada uma mensagem de erro. O programa
    antes de dividir, verifica se o divisor é zero e mostra uma mensagem de erro. 
    Exemplo:
    45+
    9
    91-
    8
    102*
    20
    82/
    4
    50/
    Não divide por zero!
*/

$num1 = 12;
$num2 = 0;
$operador = '*';

switch ($operador) {
    case '+':
        echo ($num1+$num2);
        break;
    
    case '-':
        echo ($num1-$num2);
        break;

    case '*':
        echo ($num1*$num2);
        break;

    case '/':
        if($num2!=0)
            echo ($num1/$num2);
        else
            echo 'Não é possível dividir por zero';
        break;     

    default:
        echo 'O símbolo "'.$operador.'" não é válido!';
        break;
}
?>