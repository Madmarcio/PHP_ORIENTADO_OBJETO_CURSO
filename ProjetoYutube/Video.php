<?php 
require_once 'InterfaceAcoesVideo.php';
class Video implements InterfaceAcoesVideo {

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
        
    }

    // getters and setters
    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao) {      
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }
    public function getViews() {
        return $this->views;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
    

    public function play() {
        $this->reproduzindo = true;
        echo "<p>Reproduzindo o vídeo: {$this->titulo}</p>";
    }
    public function pause() {
        $this->reproduzindo = false;
        echo "<p>Vídeo pausado: {$this->titulo}</p>";
    }
    public function like() {
        $this->curtidas++;
        echo "<p>Vídeo curtido: {$this->titulo}. Total de curtidas: {$this->curtidas}</p>";
        
    }
    
}