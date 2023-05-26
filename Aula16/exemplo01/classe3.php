<?php

    include("../classes/banco.php");

    $_SESSION["stock"]->sacar(10);

    echo $_SESSION["stock"]->saldo;
?>