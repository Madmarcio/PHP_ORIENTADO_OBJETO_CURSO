<?php 
class ContaBanco {
    // Atributos
    public $numConta;
    protected $tipo; // Corrente ou Poupança
    private $dono;
    private $saldo;
    private $status; // Ativo ou Inativo

    // Métodos 
    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50); // Conta Corrente inicia com R$ 50,00
        } elseif ($t == "CP") {
            $this->setSaldo(150); // Conta Poupança inicia com R$ 150,00
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "Conta com dinheiro, saque o valor antes de fechar a conta.";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito, regularize a situação antes de fechar a conta.</p>";
        } else {
            $this->setStatus(false);
            echo "Conta fechada com sucesso.";
        }
    }

    public function depositar($d) {
        if ($this-> getStatus()) {
            $this->setSaldo($this->getSaldo() + $d);
            echo "<p>Depósito de R$ $d realizado com sucesso!</p>";            
        } else {
            echo "<p>Conta fechada, não é possível depositar.<p/>";
        }
    }

   public function sacar($v) { // Define a função sacar, que recebe um valor $v como parâmetro
    if ($this->getStatus()) { // Verifica se a conta está aberta (ativa)
        if ($this->getSaldo() >= $v) { // Se o saldo for suficiente para o saque
            $this->setSaldo($this->getSaldo() - $v);
             // Deduz o valor do saldo da conta
            echo "<p>Saque de R$ $v realizado com sucesso!</p>"; // Exibe uma mensagem de sucesso
        } else { 
            echo "<p>Saldo insuficiente para saque.</p>"; // Exibe uma mensagem se o saldo for insuficiente
        }
    } else { 
        echo "<p>Conta fechada, não é possível sacar.</p>"; // Caso a conta esteja fechada, exibe essa mensagem
    }
}

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $v = 12; // Valor da mensalidade para Conta Corrente
        } elseif ($this->getTipo() == "CP") {
            $v = 20; // Valor da mensalidade para Conta Poupança
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v); // Deduz o valor da mensalidade do saldo
        } else {
            echo "<p>Conta fechada, não é possível pagar mensalidade.</p>";
        }
    }

    //Métodos construtor
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(true);
        echo "<p>Conta criada com sucesso!</p>";
}
    //Getters
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

    //Setters
    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function setStatus($status) {
        $this->status = $status;
    }

}
?>