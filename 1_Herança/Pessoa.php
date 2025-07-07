<?php 

class Pessoa {
    // Atributos
    private $nome;
    private $idade;
    private $sexo;

    // Construtor
    public function __construct($n, $i, $s) {
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
    }

    public function fazerAniversario() {
        $this->idade++;
    }

    // Métodos públicos
    public function getNome() {
        return $this->nome;   
    }

    public function getIdade() {
        return $this->idade;   
    }

    public function getSexo() {
        return $this->sexo;   
    }

    public function setNome($n) {
        $this->nome = $n;   
    }

    public function setIdade($i) {
        $this->idade = $i;   
    }

    public function setSexo($s) {
        $this->sexo = $s;   
    }
}