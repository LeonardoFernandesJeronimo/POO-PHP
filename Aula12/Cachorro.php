<?php
require_once './Mamifero.php';
class Cachorro extends Mamifero {
    
    public function enterrarOsso() {
        echo "<p>Enterrando o osso</p>";
    }
    
    public function abanarRabo() {
        echo "<p>Abanando o rabo</p>";
    }
    
}
