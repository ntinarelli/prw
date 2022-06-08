<?php //formulário que tem os dados do formulario do usuario
    include('conexao.php');
    $id=$_GET['id'];
    $sql='SELECT * FROM fluxo_caixa where id ='.$id;
    $result = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result);

    //para verificar digitar no navegador: localhost/prw/prw/projeto01/altera_usuario.php?id_usuario=2 - 2 corresponde ao código do usuário na listagem
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fluxo de Caixa</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Consulta de Fluxo de Caixa</h1>
    <div id="teste">
        <form method="post" action="altera_fluxo_caixa.exe.php" enctype='multipart/form-data'>
        <fieldset>
                <legend><h2>Cadastro de Fluxo de Caixa</h2></legend>
                <div class="form-item">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data">
                </div>
                <br>
                <div class="form-item">
                    <label for="tipo">Tipo:</label>
                    <input type="radio" id="tipo" name="tipo" value="entrada">Entrada  
                    <input type="radio" id="tipo" name="tipo" value="saida">Saída                        
                </div>
                <br>
                <div class="form-item">
                    <label for="valor">Valor:</label>
                    <input type="text" id="valor" name="valor" placeholder="Digite o valor">
                </div>
                <br>
                <div class="form-item">
                    <label for="historico">Historico:</label>
                    <input type="text" id="historico" name="historico">
                </div>
                <br>
                <label for="cheque">Cheque:</label>
                <SELECT NAME = "cheque" VALUE = "valor default" SIZE = "1">
                    <option> Sim </option>
                    <option> Não </option>
                </SELECT>  
                <br>
                <br>
                <div class="form-item"> 
                    <input id="btn" type="submit" value="Enviar">
                </div>
            </fieldset>
                <input name="id" type="hidden" value="<?php echo $row['id']?>">
        </form>
    </div>
</body>
</html>