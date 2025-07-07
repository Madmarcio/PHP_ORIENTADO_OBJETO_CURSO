<?php 

// Classe Funcionario que herda de Pessoa
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    // Atributos
    private $setor;
    private $trabalhando;

    // Construtor
    public function __construct($n, $i, $s, $setor) {
        parent::__construct($n, $i, $s);
        $this->setor = $setor;
        $this->trabalhando = true; // Por padrão, o funcionário está trabalhando
    }

    public function mudarTrabalho() {
        $this->trabalhando = !$this->trabalhando; // Inverte o estado de trabalho
    }

    // Métodos públicos
    public function getSetor() {
        return $this->setor;   
    }

    public function setSetor($s) {
    $this->setor = $s;   
    }

    public function getTrabalhando() {
        return $this->trabalhando;   
    }
    public function setTrabalhando($t) {
        $this->trabalhando = $t;   
    }


}