<?php
/*Crie um script em PHP que exiba quantos caracteres possui
uma palavra ou frase que foi atribuída a uma vaiável.*/

$frase="Estamos estudando métodos de controle de strings.";

//quantos caracteres sem espaço tenho na frase sem espaços
$frase=trim($frase);
echo "A frase contém " .strlen($frase). " caracteres.";

?>