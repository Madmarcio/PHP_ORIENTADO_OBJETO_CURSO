<?php 
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;

    public function __construct($peso = 0, $idade = 0, $membros = 0, $corEscama = "") {
        parent::__construct($peso, $idade, $membros);
        $this->corEscama = $corEscama;
    }

    public function locomover() {
        echo "<p>Rastejando</p>";
    }

    public function alimentar() {
        echo "<p>Comendo vegetais</p>";
    }

    public function emitirSom() {
        echo "<p>Som de réptil</p>";
    }

    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}