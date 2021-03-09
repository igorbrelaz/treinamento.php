<?php

class Pessoa
{
    private $nome;
    private $sexo;
    private $idade;

    function __construct($nome, $sexo, $idade)
    {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
        
    function getNome() {
        return $this->nome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    function getSexo() {
        return $this->sexo;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
    
    function getIdade() {
        return $this->idade;
    }

    function fazerAniversario() {
        $this->idade = $this->idade + 1;
    }
}

