<?php

// Classe Aluno que herda de Pessoa 
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    // Atributos
    private $matricula;
    private $curso;

    // Construtor
    public function __construct($n, $i, $s, $m, $c) {
        parent::__construct($n, $i, $s);
        $this->matricula = $m;
        $this->curso = $c;
    }
    public function cancelarMatricula() {
        echo "Matricula Matricula sera cancelada.";
    }

    // Métodos públicos
    public function getMatricula() {
        return $this->matricula;   
    }

    public function getCurso() {
        return $this->curso;   
    }

    public function setMatricula($m) {
        $this->matricula = $m;   
    }

    public function setCurso($c) {
        $this->curso = $c;   
    }
}