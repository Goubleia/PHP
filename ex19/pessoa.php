<?php
class Pessoa {
    private $nome;
    private $sexo;

    // function __construct($nome,$sexo){
    //     $this->nome = $nome;
    //     $this->sexo = $sexo;
    // }

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $nome;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }
    function getSexo(){
        return $sexo;
    }
}
?>