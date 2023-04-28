<?php
    session_start();

    if (!isset($_SESSION["auxiliar"]))
    {
        $variavel = 1;        
    }
    else
    {
        $variavel = $_SESSION["auxiliar"] + 1;
    }

    $_SESSION["auxiliar"] = $variavel;

    echo $_SESSION["auxiliar"];
?>