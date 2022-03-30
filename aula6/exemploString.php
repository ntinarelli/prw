<!--
    MANIPULAÇÃO DE DATA

    Para mostrar um caminho data e hora, usa-se:
    echo.date('parametro1/parametro2/parametro3');

    MANIPULAÇÃO DE STRINGS

    Função TRIM()
    obtém a quantidade de caracteres de uma String, eliminando os espaços iniciais e finais
-->
<?php
    //exemplo Função TRIM()
    $palavra = "Ciência da computação ";
    echo "A variável contém " .strlen($palavra)." caracteres"."<br>"; //string lenn (comprimento da string)
    
    $palavra=trim($palavra); //quantidade sem os espaços
    echo "A variável agora contém: ".strlen($palavra)." caracteres.";

?>