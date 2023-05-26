<?php
    session_start();

    class Banco {
        public $conta;
        public $saldo;

        public function depositar($valor)
        {
            $this->saldo += $valor;
        }
    }

    var_dump($_SESSION["stock"]);


    echo "Conta " . $_SESSION['stock']->saldo;

    $_SESSION['stock']->depositar(8000);

    echo "Conta " . $_SESSION['stock']->saldo;

?>