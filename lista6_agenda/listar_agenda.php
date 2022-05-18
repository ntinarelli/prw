<?php
    include ('conexao.php'); //conectando no banco de dados
    $sql='SELECT * FROM agenda'; //consultar o sql, no lugar do * eu coloco o que eu quero consultar 
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
            <th>Nome</th>
            <th>Apelido</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Data</th>
            <th>Excluir</th>
        </tr>
        <?php //montar de forma dinâmica as linhas da minha tabela
            while($row = mysqli_fetch_array($result)){
                //para cada vez que ele executar esse código, ele cria uma linha

                echo "<tr>";
                echo "<td>". $row['id_agenda'] ."</td>";
                echo "<td> <a href='altera_agenda.php?id_cliente=".$row['id_agenda']."'>" .$row['nome']. "</a></td>"; //link para alterar o usuário
                echo "<td>". $row['apelido'] ."</td>";
                echo "<td>". $row['endereco'] ."</td>";
                echo "<td>". $row['bairro'] ."</td>";
                echo "<td>". $row['cidade'] ."</td>";
                echo "<td>". $row['estado'] ."</td>";
                echo "<td>". $row['telefone'] ."</td>";
                echo "<td>". $row['celular'] ."</td>";
                echo "<td>". $row['email'] ."</td>";
                echo "<td>". $row['dt_cadastro'] ."</td>";
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>