<?php

class Pessoa{
    public $nome;
    public $endereco;
    public $bairro;
    public $cep;

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep(){
        return $this->cep;
    }
}

$temp = new Pessoa();{
$temp->setNome("Vent Miguel <br>");
echo $temp->getNome();

$temp->setEndereco("Rua Bacana <br>");
echo $temp->getEndereco();

$temp->setBairro("Bairro Legal <br>");
echo $temp->getBairro();

$temp->setCep("888-999 <br>");
echo $temp->getCep();
}


?>