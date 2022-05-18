<?php
    include('conexao.php');
    $id_usuario = $_POST['id_cliente'];
    $cliente = $_POST['cliente'];
    $data = $_POST['data'];
    $evento = $_POST['evento'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Cliente: " . $cliente . "<p>";
    echo "<p> Data: " . $data . "<p>";
    echo "<p> Evento: " . $evento . "<p>";
    echo "<p> id: " . $id_cliente . "<p>";

    $sql = "UPDATE cliente SET
        cliente_nome='".$cliente."',
        cliente_data='".$data."', 
        cliente_evento='".$evento."' 
        WHERE id_cliente=".$id_cliente; 

    $result = mysqli_query($con, $sql); //acessando o banco
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>
<a href="index.php"> Voltar </a>