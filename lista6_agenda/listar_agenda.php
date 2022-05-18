<?php
    include ('conexao.php'); //conectando no banco de dados
    $sql='SELECT * FROM cliente'; //consultar o sql, no lugar do * eu coloco o que eu quero consultar 
    $result = mysqli_query($con, $sql); //me retorna todos os dados da consulta
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de agendamento</title>
</head>
<body>
    <h1>Listagem de agendamento</h1>
    <table align="center" border="1" width=500>
        <!--table row (primeira linha) tr>th*4 (4 colunas)-->
        <tr>
            <th>Codigo</th>
            <th>Cliente</th>
            <th>Data</th>
            <th>Evento</th>
            <th>Excluir</th>
        </tr>
        <?php //montar de forma dinâmica as linhas da minha tabela
            while($row = mysqli_fetch_array($result)){
                //para cada vez que ele executar esse código, ele cria uma linha

                echo "<tr>";
                echo "<td>". $row['id_cliente'] ."</td>";
                echo "<td> <a href='altera_agenda.php?id_cliente=".$row['id_cliente']."'>" .$row['cliente_nome']. "</a></td>"; //link para alterar o usuário
                echo "<td>". $row['cliente_data'] ."</td>";
                echo "<td>". $row['cliente_evento'] ."</td>";
                echo "<td><a href='excluir_cliente.php?id_cliente=".$row['id_usuario']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>