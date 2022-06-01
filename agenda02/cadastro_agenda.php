<?php
    include('conexao.php');

    $fotoNome = $_FILES['foto']['nome'];
    $target_dir = "upload/";//onde jogo minhas fotos
    $target_file = $target_dir . basename($_FILES["foto"]["nome"]);//concatenar a foto com o nome do arquivo
    //Selecionar tipo de arquivo
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //verificar se o tipo de arquivo é permitido (pega o final do arquivo e verifica se é permitido)
    $extensions_arr = array("jpg","jpeg","png","gif");
    //checar extensões
    if( in_array($imageFileType,$extensions_arr) ){        
        // Upload file
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
        }
    }

    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro = date("Y-m-d");


    echo "<h1> Agendar cliente</h1>";
    echo "<p> Nome: " . $nome . "<br>";
    echo "Apelido: " . $apelido . "<br>";
    echo "Endereço: " . $endereco . "</p>";
    echo "bairro: " . $bairro . "</p>";
    echo "cidade: " . $cidade . "</p>";
    echo "Estado: " . $estado . "</p>";
    echo "Telefone: " . $telefone . "</p>";
    echo "Celular: " . $celular . "</p>";
    echo "Email: " . $email . "</p>";
    echo "Data: " . $dt_cadastro . "</p>";
	
	$sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, foto_blob, foto_nome) 
	        VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$fotoBlob."','".$fotoNome."')";
	    
	$result = mysqli_query($con, $sql);
	if($result)
		echo "Dados inseridos com sucesso";
	else
		echo "Erro ao inserir no banco de dados: ".mysqli_error($con);
?>