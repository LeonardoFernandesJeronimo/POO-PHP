<?php


class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!!!</p>";
    }
    
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }
    
    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC") {
            $this->setSaldo(50);
        } else if($tipo == "CP") {
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta() {
        if($this->getSaldo() > 0) {
            echo("Conta com dinheiro");
        } else if($this->getSaldo() < 0) {
            echo("Conta está em débito");
        } else {
            $this->setStatus(false);
            echo "Conta de ".$this->getDono() ." fechada com sucesso!";
        }
    }
    
    public function depositar($valor) {
        if($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$$valor na conta de ".$this->getDono()."</p>";
        } else {
            echo("Conta fechada, impossível depositar");
        }
    }
    
    public function sacar($valor) {
        if($this->getStatus() == true) {
            if($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$$valor autorizado na conta de " .$this->getDono()."</p>";
            } else {
                echo("Saldo Insuficiente!");
            }                
        } else {
            echo("Impossível sacar!");
        }
    }
    
    public function pagarMensal() {
        if($this->getTipo() == "CC") {
            $valor = 12;
        } else if($this->getTipo() == "CP") {
            $valor = 20;
        }
        if($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() - $valor);     
            echo "<p>Mensalidade de R$$valor debitada na conta de ". $this->getDono()."</p>";
        } else {
            echo "Erro na Conta!";
        }
    }
}
