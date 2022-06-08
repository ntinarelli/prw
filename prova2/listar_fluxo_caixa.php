<?php
    include ('conexao.php'); //conectando no banco de dados
    $sql='SELECT * FROM fluxo_caixa'; //consultar o sql, no lugar do * eu coloco o que eu quero consultar 
    $result = mysqli_query($con, $sql); //me retorna todos os dados da consulta
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Fluxo do Caixa</title>
</head>
<body>
    <h1>Consulta de Fluxo de Caixa</h1>
    <table align="center" border="1" width=500>
        <!--table row (primeira linha) tr>th*4 (4 colunas)-->
        <tr>
            <th>Id</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>
        <?php //montar de forma dinâmica as linhas da minha tabela
            while($row = mysqli_fetch_array($result)){
                //para cada vez que ele executar esse código, ele cria uma linha

                echo "<tr>";
                echo "<td>". $row['id'] ."</td>";
                echo "<td>". $row['data'] ."</td>";    
                echo "<td>". $row['tipo'] ."</td>";
                echo "<td>". $row['valor'] ."</td>";  
                echo "<td> <a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>"; //link para alterar o histórico
                echo "<td>". $row['cheque'] ."</td>";         
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
        <tr>
            <th><a href="index.php">Voltar</a></th>
        </tr>
    </table>
</body>
</html>