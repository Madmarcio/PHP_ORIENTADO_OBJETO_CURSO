<?php 

require_once 'Animal.php';
class Mamifero extends Animal {
    protected $corPelo;

    public function __construct($peso = 0, $idade = 0, $membros = 0, $corPelo = "") {
        parent::__construct($peso, $idade, $membros);
        $this->corPelo = $corPelo;
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }

    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function emitirSom() {
        echo "<p>Som de mamífero</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}