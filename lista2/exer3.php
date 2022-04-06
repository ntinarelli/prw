<?php
/*Um número é, por definição, primo se ele não tem divisores,
exceto 1 e ele próprio. Preparar um script PHP para verificar
números entre 0 e 200 e determinar se cada um dele é primo ou
não.*/

    $num;
    $divisor;
    
    for($i=0;$i<=200;$i++){
        while ($num>=$divisor){
            $resto = $num%$divisor;

            if($resto==0){
                $cont=0;
                $cont++;
            }
        
        }

        if($cont>2){
            echo "O número não é primo.";
        }
        else{
            echo "O número é primo";
        }
    }
        

?>