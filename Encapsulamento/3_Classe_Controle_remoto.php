<?php
// Classe ControleRemoto implementa a interface Controlador
 require_once '2_interfaceControlador.php';

     class controleRemoto implements Controlador {
    // Atributos
    private $volume;
    private $ligado;
    private $tocando;

    // Construtor
    public function __construct() {
        $this->volume = 50; // Volume inicial
        $this->ligado = false; // Inicialmente desligado
        $this->tocando = false; // Inicialmente não está tocando
    }
    private function getVolume() {
        return $this->volume;
    }
    private function getLigado() { 
        return $this->ligado; 
    }
     private function getTocando() {
        return $this->tocando;
    }
    private function setVolume($volume) {
        $this->volume = $volume;
    }
    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }
    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    // Implementação dos métodos da interface Controlador
    public function ligar() {
        $this->setLigado(true);
    }
    public function desligar() {
        $this->setLigado(false);
    }
    public function abrirMenu() {
        echo "<p>Menu aberto</p>" . ($this->getLigado() ? "Sim" : "Não") . "<br>";
        echo "<p>Esta tocando?</p>" . ($this->getTocando() ? "Sim" : "Não") . "<br>";
        echo "Volume: " . $this->getVolume() . "<br>";
        for ($i = 0; $i < $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";     
        
    }
    public function fecharMenu() {
        echo "<p>Menu fechado</p>";
    }
    public function maisVolume() {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 5);
        }else {
            echo "<p>Erro! Não posso aumentar o volume com o controle desligado.</p>";
        } 
    }
    public function menosVolume() {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() - 5);
        }else {
            echo "<p>Erro! Não posso diminuir o volume com o controle desligado.</p>";
        }
    }
    public function ligarMudo() {
        if ($this->getLigado() == true && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo() {
        if ($this->getLigado() == true && $this->getVolume() == 0) {
            $this->setVolume(50); // Volume padrão
        }   
    }
    public function play() {
        if ($this->getLigado() == true && !$this->getTocando()) {
            $this->setTocando(true);
        }   
    }
    public function pause() {
        if ($this->getLigado() == true && $this->getTocando() == true) {
            $this->setTocando(false);
        }
    }
}