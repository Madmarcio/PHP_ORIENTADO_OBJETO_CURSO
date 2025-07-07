<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
 <?php
    
    
    require_once 'caneta1.php'; // chamando o arquivo caneta.php
    $c1 = new caneta1("Bic", "Azul", "0.5"); // instanciando a classe caneta    
    //$c1->setModelo('BIC Cristal'); // atribuindo valor ao atributo modelo
    //$c1->setPonta(0.5); // atribuindo valor ao atributo ponta
   print_r($c1); // imprimindo o objeto
    
    
    ?>
    </pre>




</body>

</html>