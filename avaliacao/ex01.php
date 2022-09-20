<?php
/*
    Crie uma variável para armazenar cada uma das frases assassinas abaixo, que
    são aquelas que fazem com muitas ideias sejam perdidas antes que amadureçam ou
    seja aprofundadas. Em seguida, exiba apenas as últimas palavras em letras maiúsculas
    de cada frase.
    Exemplo: 
    
    "Isto não vai dar certo" - CERTO
    "Você nunca vai conseguir" - CONSEGUIR
    "Você vai se estrepar" - ESTREPAR
    "Não vai dar em nada" - NADA
    "Está tudo errado!" - ERRADO
*/

$certo = 'Isto não vai dar certo';
$conseguir = 'Você nunca vai conseguir';
$estrepar = 'Você vai se estrepar';
$nada = 'Não vai dar em nada';
$errado = 'Está tudo errado!';

var_dump(strtoupper(substr($certo, strlen($certo)-5,strlen($certo))));
echo '<br>';
var_dump(strtoupper(substr($conseguir, strlen($conseguir)-9, strlen($conseguir))));
echo '<br>';
var_dump(strtoupper(substr($estrepar, strlen($estrepar)-8,strlen($estrepar))));
echo '<br>';
var_dump(strtoupper(substr($nada, strlen($nada)-4,strlen($nada))));
echo '<br>';
var_dump(strtoupper(substr($errado, strlen($errado)-7,strlen($nada))));
?>