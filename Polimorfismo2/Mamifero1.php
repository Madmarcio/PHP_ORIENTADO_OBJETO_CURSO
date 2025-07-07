<?php 

require_once 'Animal1.php';

class Mamifero1 extends Animal1{
    protected $corPelo;

    public function emitirSom(){
        echo "<p>Som de Mamífero</p>";
    }
}