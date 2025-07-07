<?php 

// Classe Professor que herda de Pessoa
require_once 'Pessoa.php';
class Professor extends Pessoa {
    // Atributos
    private $especialidade;
    private $salario;

    // Construtor
    public function __construct($n, $i, $s, $e, $sa) {
        parent::__construct($n, $i, $s);
        $this->especialidade = $e;
        $this->salario = $sa;
    }

    public function receberAumento($aumento) {
        $this->salario += $aumento;
    }

    // Métodos públicos
    public function getEspecialidade() {
        return $this->especialidade;   
    }

    public function getSalario() {
        return $this->salario;   
    }

    public function setEspecialidade($e) {
        $this->especialidade = $e;   
    }

    public function setSalario($sa) {
        $this->salario = $sa;   
    }
}