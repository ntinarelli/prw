<?php
//acessando variáveis do formulário exer3.html
$peso = $_GET['peso'];
$altura = $_GET['altura'];

$imc=1;
$imc= $peso/($altura * $altura);

if($imc>=40){
    echo "Obesidade III (mórbida)";
}
elseif($imc>=35 && $imc<=39.99){
    echo "Obesidade II (severa)";
}
elseif($imc>=30 && $imc<=34.99){
    echo "Obesidade I";
}
elseif($imc>=25 && $imc<=29.99){
    echo "Acima do peso";
}
elseif($imc>=18.5 && $imc<=24.99){
    echo "Peso normal";
}
elseif($imc>=17 && $imc<=18.49){
    echo "Abaixo do peso";
}
elseif($imc<17){
    echo "Muito abaixo do peso";
}
?>