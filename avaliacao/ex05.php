<?php
/*   
    Um atleta faz flexões em série, com quantidades crescentes: 1 vez, depois 2
    vezes, 3, 4 e assim por diante. Ao final de uma sessão ele quer saber rapidamente a
    quantidade total de flexões que fez. Por exemplo, se ele fez 5 sequências, fez ao todo
    15 flexões (5+4+3+2+1). Implemente um programa que leia o número de sequências
    e informe o total flexões
*/
$flexoes = 0;
$series = 10;
$total_flexoes = 0;

for($i=0;$i<=$series;$i++){
    $total_flexoes += $i;
}
echo 'O número total de flexões foi de: '.$total_flexoes;
?>