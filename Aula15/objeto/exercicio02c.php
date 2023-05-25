<?php

    class Pessoa 
    {
        public $nome;
        public $pai;
        public $mae ;
        public $idade = 35;

        public function aniversario()
        {
            $this->idade += 1;
        }

    }

?>