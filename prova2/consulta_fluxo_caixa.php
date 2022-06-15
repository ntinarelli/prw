<?php
    include('conexao.php');

    $tipoConsulta = $_POST['tipoConsulta'];


    echo "<h1> Fluxo de Caixa</h1>";
    echo "<p> Tipo consulta: " . $tipoConsulta . "</p>";
            
    if($tipoConsulta == 'entrada'){

        $sql="select sum(valor) valor from fluxo_caixa where tipo='entrada'";

    }else if($tipoConsulta == 'saida'){

        $sql="select sum(valor) valor from fluxo_caixa where tipo='saida'";

    }else if($tipoConsulta == 'saldo'){

        $sql="select sum(case when tipo = 'entrada' then valor else 0 end) - 
            sum(case when tipo = 'saida' then valor else 0 end) as valor from fluxo_caixa";

    }
	

	$result = mysqli_query($con, $sql);
    $row=mysqli_fetch_array($result);
    echo $row['valor'];
?>