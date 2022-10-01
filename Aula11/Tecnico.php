<?php
require_once './Aluno.php';
class Tecnico extends Aluno {
    private $registtroProfi;
    
    public function praticar() {
        echo "<p>O técnico " . $this->nome . " está praticando.</p>" ;
    }
    
    public function getRegisttroProfi() {
        return $this->registtroProfi;
    }

    public function setRegisttroProfi($registtroProfi): void {
        $this->registtroProfi = $registtroProfi;
    }


}
