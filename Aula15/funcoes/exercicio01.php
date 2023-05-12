<?php
    //XGH
    function Soma($num1, $num2)
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    function Multiplicar($num1, $num2)
    {
        return $num1 * $num2;
    }

    echo Multiplicar(Soma(5,7), Soma(8, 9));
    
    
    //$soma = Soma(8,6);
    //$mult = Multiplicar($soma, 2);
    //echo $mult;


    
    //echo $valor;

    //echo Soma(9, 8);
?>