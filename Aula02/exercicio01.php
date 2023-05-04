<?php
    $numero1 = $_GET['num1'];
    $numero2 = $_GET['num2'];

    $soma = $numero1 + $numero2;
    $resultado = $soma * $numero1;

    echo "O resultado é " . $resultado;
    echo "<br>";
?>