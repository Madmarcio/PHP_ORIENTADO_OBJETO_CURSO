<?php 

require_once 'Lobo1.php';
class Cachorro1 extends Lobo1{

    public function emitirSom(){
        echo "<p>Au! au! au! au!</p>";
    }
    public function reagirFrase($frase) {
        if ($frase == "Toma comida" || $frase == "Olá") {
            echo "<p>Abanar e latir</p>";
        } else  {
            echo "<p>Rosnar</p>";
        }
        
    }
    public function reagirHora($hora, $minuto) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e latir</p>";
        }
    }

    public function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e latir</p>";
        }
        
    }
    public function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
        
    }
    
}