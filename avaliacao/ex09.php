<?php
/*
    Entre com um número e informar se ele é divisível por 10, por 5, por 2 ou se
    não é divisível por nenhum destes. 
*/

$num = 2;

if($num%10==0){
    if($num%5==0){
        if($num%2==0){
            echo 'O número '.$num.' é divisível por 10, 5 e 2.';
        }
    }
}
else {
    echo 'O número '.$num.' não é divisível por 10, 5 e 2.';
}

?>