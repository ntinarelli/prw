<?php
    $estado = $_GET["estado"];

    switch($estado){
        case "Bahia":
            echo "Salvador";
            break;

        case "Ceara":
            echo "Fortaleza";
            break;

        case "Espirito Santo":
            echo "Vitoria";
            break;

        case "Rondonia":
            echo "Porto Velho";
            break;
        
        case "São Paulo":
            echo "São Paulo";
            break;

        default: 
            echo "Estado não selecionado.";


    }
?>