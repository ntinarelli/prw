<?php
    include('conexao.php');
    $cliente = $_POST['cliente'];
    $data = $_POST['data'];
    $evento = $_POST['evento'];
    echo "<h1> Agendar cliente</h1>";
    echo "<p> Cliente: " . $cliente . "<br>";
    echo "Data: " . $data . "<br>";
    echo "Evento: " . $evento . "</p>";
	
	$sql = "INSERT INTO cliente (cliente_nome,cliente_data,cliente_evento) 
	        VALUES ('".$cliente."','".$data."','".$evento."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>