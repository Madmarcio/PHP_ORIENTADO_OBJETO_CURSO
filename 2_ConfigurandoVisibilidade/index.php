<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando Classes e Objetos </title>
</head>

<body>
    <?php 
     require_once 'caneta.php';// chamando o arquivo caneta.php
     $c1 = new Caneta(); // instanciando a classe caneta
     $c1->modelo = 'BIC Cristal'; // atribuindo valor ao atributo modelo
     $c1->cor = 'Azul'; // atribuindo valor ao atributo cor
     $c1->tampar(); // chamando o método tampar
     $c1->destampar();
     print_r($c1); // imprimindo o objeto   
        
    ?>

</body>

</html>