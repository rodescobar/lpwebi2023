<?php

    //Link: Escolha a página
    // - produto
    // - cliente
    // - usuario
    $valor = $_GET['valor'];

    function Carregar($pagina)
    {
        header("location: {$pagina}.php");
    }

    Carregar($valor);


?>