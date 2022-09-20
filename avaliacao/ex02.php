<?php
/*
    Entre com notas inteiras (7; 5,5; 8,0) e calcula a sua média aritmética. Mostre as
    3 notas, a média e se o aluno está aprovado ou recuperação.
*/

$nota1 = 7;
$nota2 = 5.5;
$nota3 = 8;
$media = ($nota1+$nota2+$nota3)/3;

echo 'Nota 1: '.$nota1.'<br>';
echo 'Nota 2: '.$nota2.'<br>';
echo 'Nota 3: '.$nota3.'<br>';
echo 'Média das três notas: '.number_format($media,1,'.').'<br>';
echo ($media<=6)?'Recuperação':'Aprovado';
?>