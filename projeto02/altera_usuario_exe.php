<?php
    include('conexao.php');
    //upload da foto
    
    $fotoNome = $_FILES['foto']['name'];
    $target_dir = "upload/";//onde jogo minhas fotos
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);//concatenar a foto com o nome do arquivo
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

    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";
    echo $fotoNome;
    if(strlen($fotoNome) > 0){
        $sql = "UPDATE usuario SET 
                nome_usuario='".$nome."',
                email_usuario='".$email."',
                telefone_usuario='".$telefone."',
                foto_blob='".$fotoBlob."',
                foto_nome='".$fotoNome."'
                WHERE id_usuario=".$id_usuario;
    }
    else{
        $sql = "UPDATE usuario SET 
                    nome_usuario='".$nome."',
                    email_usuario='".$email."',
                    telefone_usuario='".$telefone."'

                    WHERE id_usuario=".$id_usuario;
    }

    echo $sql;


    echo "<p> email Usuário: " . $email . "<p>";
    echo "<p> Tel: " . $telefone . "<p>";
    echo "<p> id: " . $id_usuario . "<p>";

    $sql = "UPDATE usuario SET
        nome_usuario='".$nome."',
        email_usuario='".$email."', 
        telefone_usuario='".$telefone."' 
        WHERE id_usuario=".$id_usuario; 

    $result = mysqli_query($con, $sql); //acessando o banco
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>
<a href="index.php"> Voltar </a>