<form method='get' action='exercicio01.php'>
    <span>Entre com um número:</span>
    <input type='text' name='txtNumero' />
    <input type='submit' value='Enviar' />
</form>
<?php
    if ( isset($_GET['txtNumero'])) {
        
        for($i = 0; $i <= 10; $i++) 
        {
            //Escrevendo na tela  5 x 0 =
            echo $_GET['txtNumero'] . ' x ' . $i . " = ";

            //Escrevendo na tela o resultado
            echo $_GET['txtNumero'] * $i;

            //Pulando linha
            echo "<br/>";
        }
    }
?>