<?php
    include ('conexao.php'); //conectando no banco de dados
    $sql='SELECT * FROM usuario'; //consultar o sql, no lugar do * eu coloco o que eu quero consultar 
    $result = mysqli_query($con, $sql); //me retorna todos os dados da consulta
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de usuarios</title>
</head>
<body>
    <h1>Listagem de usuários</h1>
    <table align="center" border="1" width=500>
        <!--table row (primeira linha) tr>th*4 (4 colunas)-->
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <?php //montar de forma dinâmica as linhas da minha tabela
            while($row = mysqli_fetch_array($result)){
                //para cada vez que ele executar ese código, ele cria uma linha

                echo "<tr>";
                echo "<td>". $row['id_usuario'] ."</td>";
                echo "<td>". $row['nome_usuario'] ."</td>";
                echo "<td>". $row['email_usuario'] ."</td>";
                echo "<td>". $row['telefone_usuario'] ."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>