<?php 

abstract class Animal {
    protected $peso;
    protected $idade;
    protected $membros;

    public function __construct($peso = 0, $idade = 0, $membros = 0) {
        $this->peso = $peso;
        $this->idade = $idade;
        $this->membros = $membros;
    }

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getMembros() {
        return $this->membros;
    }

    public function setMembros($membros) {
        $this->membros = $membros;
    }
}