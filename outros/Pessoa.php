<?php

#Class sempre começa com letra Maiuscula!
class Pessoa{

    #Caracteristicas / Variaveis
    protected $nome;
    const ESPECIE = "Humana";

    #Comportamentos / Funções
    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;      
    }

    public function setNome($novoNome){
        $this->nome = $novoNome;
    }

    public function getNome(){
        return $this->nome;
    }
}
