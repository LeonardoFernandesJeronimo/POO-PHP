<?php
require_once './Animal.php';
class Ave extends Animal {
    private $corPena;
    
    public function fazerNinho() {
        echo "<p>Construiu um ninho</p>";
    } 
    
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }

    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }

}
