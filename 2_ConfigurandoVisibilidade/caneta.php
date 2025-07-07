<?php
 class Caneta {
         public $modelo;
         public $cor;
         private $ponta;
         protected $carga;
         protected $tampada;

         public function Rabiscar() {
            if ($this->tampada == true) {
                echo '<p>Caneta tampada, não posso rabiscar</p>';
            } else {
                echo '<p>A caneta está destampada...</p>';
            }
            }
             
            public function tampar() {
                $this->tampada = true;
            }
           public function destampar() {
            $this->tampada = false;   
            
         }
        }

            
            
        
        

?>