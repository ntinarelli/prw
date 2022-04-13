<?php
$totalCompra = $_GET["totalCompra"];
$saldo = $_GET["saldo"];
$nome = $_GET["nome"];
$cpf = $_GET["cpf"];
$rg = $_GET["rg"];

echo "Dados: <br> Nome: ", $nome, "<br> CPF: ", $cpf, "<br> RG: ", $rg;

if($saldo<$totalCompra){
    echo "<br>Saldo Insuficiente para Concluir Compra!";
}
else{
    echo "<br>Compra Concluída! Saldo disponível: ", $saldo - $totalCompra;
}


?>