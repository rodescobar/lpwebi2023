<a href="exemplo.php?nome=calca&valor=50">
    Calça Jeans
</a>
<br/>
<a href="exemplo.php?nome=meia&valor=10">
    Meia
</a>
<br/>
<a href="exemplo.php?nome=bone&valor=100">
    Boné
</a>
<br/>

<?php
    session_start();

    if (isset($_GET['nome']))
    {
        $_SESSION["carrinho"] = @$_SESSION["carrinho"] . ' / ' . $_GET['nome'];
    }
    echo "Voce escolheu " . @$_SESSION['carrinho'];
?>