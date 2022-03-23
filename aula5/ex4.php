<!-- 
    Colocar três números em ordem decrescente

-->

<?php
    //declarando três números
    $n1=0.67;
    $n2=7.44;
    $n3=0.1;

    if($n1>$n2 && $n1>$n3)
    {
        if($n2>$n3)
            echo $n1, ', ', $n2, ', ', $n3;
        else
            echo $n1, ', ', $n3, ', ', $n2;
    }
    else if($n2>$n1 && $n2>$n3){
        if($n1>$n3)
            echo $n2, ', ', $n1, ', ', $n3;
        else
            echo $n2, ', ', $n3, ', ', $n1;
    }
    else{
        if($n1>$n2)
            echo $n3, ', ', $n1, ", ", $n2;

        else
            echo $n3, ', ', $n2, ", ", $n1;
    }
?>