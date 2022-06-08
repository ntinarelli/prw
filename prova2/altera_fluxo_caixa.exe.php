<?php
    include('conexao.php');

    $id = $_POST['id'];
    $data = date("Y-m-d");
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h1> Fluxo de Caixa</h1>";
    echo "<p> Id: " . $id . "<br>";
    echo " Data: " . $data . "<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "Valor: " . $valor . "</p>";
    echo "Histórico: " . $historico . "</p>";
    echo "Cheque: " . $cheque . "</p>";

$sql = "UPDATE fluxo_caixa SET
        data='".$data."', 
        tipo='".$tipo."',
        historico='".$historico."',
        cheque='".$cheque."' 

        WHERE id=".$id; 

    $result = mysqli_query($con, $sql); //acessando o banco
    if($result)
        echo "Dados alterados com sucesso <br>";
    else
        echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";

?>
<a href="index.php"> Voltar </a>