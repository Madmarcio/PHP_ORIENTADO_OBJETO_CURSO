<?php 

class Lutador {
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Metodos
    function apresentar() {
        echo "<p>-----------------------------------</p>";
        echo "<p>Chegou a hora! O lutador " . $this->getNome() . " veio de " . $this->getNacionalidade() . "</p>";
        echo "<p>Tem " . $this->getIdade() . " anos e mede " . $this->getAltura() . "m</p>";
        echo "<p>Pesa " . $this->getPeso() . "Kg e está na categoria " . $this->getCategoria() . "</p>";
        echo "<p>Venceu " . $this->getVitorias() . " vezes, perdeu " . $this->getDerrotas() . " vezes e empatou " . $this->getEmpates() . " vezes</p>";
    }

    function status() {
        echo "<p>-----------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . "</p>";
        echo "<p>E ja ganhou: " . $this->getVitorias() . " vezes" . "</p>";
        echo "<p>Perdeu: " . $this->getDerrotas() . " vezes e " ."</p>";
        echo "<p>Empatou: " . $this->getEmpates() .  " vezes" . "</p>";
     }

    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Metodos Especiais
    
    function __construct($no, $na, $id, $alt, $pe,$vit, $de, $emp) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $alt;
        $this->setPeso($pe); // Chama o setter para definir o peso e a categoria
        $this->vitorias = $vit;
        $this->derrotas = $de;
        $this->empates = $emp;
    }

    // Getters e Setters
    function getNome() {
        return $this->nome;
    }
    function getNacionalidade() {
        return $this->nacionalidade;
    }
    function getidade() {
        return $this->idade;
    }
    function getAltura() {
        return $this->altura;
    }
    function getValor() {
        return $this->altura;
    }
    function getPeso() {
        return $this->peso;
    }
    function getCategoria() {
        return $this->categoria;
    }
    function getVitorias() {
        return $this->vitorias;
    }
    function getDerrotas() {
        return $this->derrotas;
    }
    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function setAltura($altura) {
        $this->altura = $altura;
    }
    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();        
    }
    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Invalido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }
    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    function setEmpates($empates) {
        $this->empates = $empates;
    }
    

}