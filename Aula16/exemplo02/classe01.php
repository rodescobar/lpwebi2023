<?php
include("../classes/banco.php");

class Cliente extends Banco{
    public $nome;
    public $cpf;
    private $possui_emprestimo = false;

    public function emprestimo($valor)
    {
        if ($this->possui_emprestimo)
        {
            echo "<br/>Infelizmente não podemos " .
                 "abrir outro emprestimo";
        }
        else {
            $this->possui_emprestimo = true;
            $this->depositar($valor);
        }
    }
}

$pessoa = new Cliente();
$pessoa->nome = "Josefina";
$pessoa->cpf  = "1111111";
$pessoa->saldo = 1000;
$pessoa->depositar(800);

echo "<br/>O saldo atual de pessoa é R$" . $pessoa->saldo;

$pessoa->emprestimo(7000);

echo "<br/>O saldo atual de pessoa é R$" . $pessoa->saldo;

$pessoa->emprestimo(10000);