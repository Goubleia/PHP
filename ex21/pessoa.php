<?php
class Pessoa {
    private $nome;
    private $sexo;
    private $saude;
    private $idade;

    function __construct($nome,$sexo,$saude,$idade){
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->saude = $saude;
        $this->idade = $idade;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->$nome;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function getSexo(){
        return $this->sexo;
    }

    function setSaude($saude){
        $this->saude = $saude;
    }
    function getSaude(){
        return $this->saude;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }
    function getIdade(){
        return $this->idade;
    }
}
?>