<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";
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