<?php
/*Crie um script em PHP a em que a partir do seu CEP. Capture
apenas os 3 últimos números e exiba-o.*/

$cep=16202447;

//parâmetros da substr(string, posição inicil, posição final), a posição começa no zero
echo substr($cep, 5, 7); 
?>