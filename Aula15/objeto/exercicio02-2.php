<?php
    session_start();
    require("exercicio02c.php");

    $pessoa = new Pessoa();
    $pessoa->nome = "Rony o Rustico";
    echo $pessoa->idade;

    echo "<br>";

    $pessoa->aniversario();
    echo $pessoa->idade;

    $_SESSION["salvar"] = $pessoa;

?>