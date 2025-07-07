<?php
 class Caneta {
         public $modelo;
         public $cor;
         public $ponta;
         public $carga;
         public $tampada;

         function Rabiscar() {
            if ($this->tampada == true) {
                echo '<p>Caneta tampada, não posso rabiscar</p>';
            } else {
                echo '<p>A caneta está destampada...</p>';
            }
            }
             
            function tampar() {
                $this->tampada = true;
            }
         function destampar() {
            $this->tampada = false;   
            
         }
        }

            
            
        
        

?>