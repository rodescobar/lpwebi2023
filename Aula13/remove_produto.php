<?php
    session_start();

    $nome = $_GET['nome'];
    //$valor = $_GET['valor'];

    $carrinho = @$_SESSION['carrinho'];

    for($i=0; $i < count($carrinho); $i++)
    {
        if ($carrinho[$i]['nome'] == $nome)
        {
            $carrinho[$i]['quantidade'] = $carrinho[$i]['quantidade'] - 1;

            if ($carrinho[$i]['quantidade'] < 1)
            {
                unset($carrinho[$i]);
            }
        }
    }
    //recriando o carrinho de compras, acerto de indices
    foreach($carrinho as $item)
    {
        $novo_carrinho[] = $item;
    }

    $_SESSION['carrinho'] = $novo_carrinho;

    var_dump($_SESSION['carrinho']);
?>