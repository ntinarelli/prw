<?php
/*Efetue um script PHP que a partir de dois valores quaisquer e efetue
sua multiplicação e apresente o resultado utilizando para isso apenas o operador “+”, visto que:
• (3 * 5) = 5 + 5 + 5
• (4 * 12) = 12 + 12 + 12 + 12*/

//declaração de variáveis
$fator1=2;
$fator2=3;

echo "(", $fator1, " * ", $fator2, ") = "; 

for($i=1; $i<=$fator2; $i++)
    echo $fator1, " + ";

?>