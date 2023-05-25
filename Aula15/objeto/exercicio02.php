<?php

    require("exercicio02c.php");

    $aluno01 = new Pessoa();
    $aluno01->nome = "Abel Ferreira";
    //var_dump($aluno01);

    $mae = new Pessoa();
    $mae->nome = "Abelina Ferreira";
    $mae->mae = "Palmirinha";
    //var_dump($mae);

    $aluno01->mae = $mae;
    //var_dump($aluno01);

    $filho = new Pessoa();
    $filho->nome = "Rafael Veiga";
    $filho->pai = $aluno01;
    var_dump($filho);

    echo $filho->pai->mae->mae;
?>