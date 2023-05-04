<?php

    if ( isset($variavel) )
    {
        echo $variavel;
    }
    else 
    {
        echo "Variavel não existe";
    }
?>
<form method='get' action='exercicio01.php'>
    <span>Entre com um número:</span>
    <input type='text' name='txtNumero' />
    <input type='submit' value='Enviar' />
</form>
<?php
    if ( isset($_GET['txtNumero'])) {
        
        for($i = 0; $i <= $_GET['txtNumero']; $i++) 
        {
            echo $i . "<br/>";
        }
    }
?>