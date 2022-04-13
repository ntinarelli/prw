<?php
$operacao = $_GET['operacao'];
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];


switch($operacao){
    case "Somar":
        echo $num1 + $num2;
        break;

    case "Subtrair":
        echo $num1 - $num2;
        break;

    case "Dividir":
        echo $num1/$num2;
        break;

    case "Multiplicar":
        echo $num1*$num2;
        break;

    default:
        echo "Nenhuma operação foi selecionada.";
}



?>