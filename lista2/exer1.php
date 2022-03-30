<?php
//Faça um script PHP para somar os números pares < 100
    $soma = 0;
    for($i=1;$i<=100;$i++){
        if($i%2==0){
            $soma=$soma+$i;            
        }        
    }
    echo $soma;

?>