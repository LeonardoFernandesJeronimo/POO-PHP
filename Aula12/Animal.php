<?php

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;
    
    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();
    
    public function getPeso() {
        return $this->peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setMembros($membros): void {
        $this->membros = $membros;
    }

}


