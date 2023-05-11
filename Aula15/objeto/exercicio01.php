<?php

    class Pessoa {
        public $nome;
        public $telefone;
        public $endereco;

        public function incluir(){}

        public function listarTodos() {}
    }
    $alguem = new Pessoa();
    $alguem->nome = "Joao da Luz";

    $ciclano = new Pessoa();
    $ciclano->nome = "Bruno Mezenga";

    echo $alguem->nome . " é filho " .
        $ciclano->nome;

?>