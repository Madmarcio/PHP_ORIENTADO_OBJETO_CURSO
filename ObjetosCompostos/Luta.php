<?php 
require_once 'Lutador.php';
class Luta {
    // Atributos
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovada;

   // Métodos publicos

   public function marcarLuta($L1, $l2) {
    if ($L1->getCategoria() === $l2->getCategoria() && $L1 !== $l2) {
        $this->aprovada = true;
        $this->desafiado = $L1;
        $this->desafiante = $l2;
    } else {
        $this->aprovada = false;
        $this->desafiado = null;
        $this->desafiante = null;
    } 
   }

   public function lutar() {
    if ($this->aprovada) {
        $this->desafiado->apresentar();
        $this->desafiante->apresentar();
        $vencedor = rand(0, 2); // 0 - Empate, 1 - Desafiado vence, 2 - Desafiante vence
        switch ($vencedor) {
            case 0:
                echo "<p> Empate! </p>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            case 1:
                echo "<p> {$this->desafiado->getNome()} venceu a luta! </p>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            case 2:
                echo "<p> {$this->desafiante->getNome()} venceu a luta! </p>";
                $this->desafiante->ganharLuta();
                $this->desafiado->perderLuta();
                break;
        }


    }else {
        echo "<p> A luta não pode acontecer </p>";}
       
       }

       // Métodos especiais
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }


       
   }