<?php 

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function __construct($nome = "", $idade = 0, $sexo = "", $matricula = 0, $curso = "") {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public  function pagarMensalidade() {
        echo "<p>Pagando mensalidade de {$this->getNome()}</p>";
        
    }
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
    


}