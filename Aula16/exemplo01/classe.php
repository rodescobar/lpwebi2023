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


    $joao = new Banco();
    $maria = new Banco();

    $joao->conta = "78964-8";
    $joao->saldo = 100;

    $maria->conta = "45621-6";
    $maria->saldo = 5000;

    echo "João possui a conta " .
        $joao->conta . " e o saldo de R$" .
        $joao->saldo;

    echo "<br>";

    echo "Maria possui a conta " .
        $maria->conta . " e o saldo de R$" .
        $maria->saldo;

    $joao->depositar(900);

    echo "<br>";

    echo "João possui a conta " .
        $joao->conta . " e o saldo de R$" .
        $joao->saldo;

    echo "<br>";

    echo "Maria possui a conta " .
        $maria->conta . " e o saldo de R$" .
        $maria->saldo;

    var_dump($joao);
    $_SESSION["stock"] = $joao;

    var_dump($_SESSION["stock"]);
 ?>