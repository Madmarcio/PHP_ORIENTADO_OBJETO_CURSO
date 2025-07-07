<?php 

require_once 'Pessoa2.php';

class Gafanhoto extends Pessoa2 {
    private $login;
    private $totalAssistido;

    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totalAssistido = 0;
    }

    public function assistirMaisUm(Video $v) {
        $this->totalAssistido++;
        
    }

    // getters and setters
    public function getLogin() {
        return $this->login;
    }
    
    public function setLogin($login) {
        $this->login = $login;
    }
    
    public function getTotalAssistido() {
        return $this->totalAssistido;
    }
    
    public function setTotalAssistido($totalAssistido) {
        $this->totalAssistido = $totalAssistido;
    }
    
    public function assistirVideo() {
        $this->totalAssistido++;
    }
}