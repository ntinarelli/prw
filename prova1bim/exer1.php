<?php
/*Efetue um script PHP que calcule e imprima o salário reajustado de um
funcionário de acordo com a seguinte regra:
• Salários até 300, reajuste de 50%
• Salários maiores que 300, reajuste de 30%*/

//ler variável
$salarioFuncio=1500;
$novoSalario=1;

//condições
if($salarioFuncio<=300){
    $novoSalario=$salarioFuncio + ($salarioFuncio*0.5);

    echo "Salário reajustado: R$ ", $novoSalario;
}
else{
    $novoSalario=$salarioFuncio + ($salarioFuncio*0.3);

    echo "Salário reajustado: R$ ", $novoSalario;
}
?>