<?php 

require_once 'Animal.php';
class Ave extends Animal {
    protected $corPena;

    public function __construct($peso = 0, $idade = 0, $membros = 0, $corPena = "") {
        parent::__construct($peso, $idade, $membros);
        $this->corPena = $corPena;
    }

    public function fazerNinho() {
        echo "<p>Fazendo ninho</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }

    public function alimentar() {
        echo "<p>Comendo frutas</p>";
    }

    public function emitirSom() {
        echo "<p>Som de ave</p>";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}