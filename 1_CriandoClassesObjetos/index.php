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
        $c1->modelo = 'BIC'; // atribuindo valor ao atributo modelo
        $c1->cor = 'azul'; // atribuindo valor ao atributo cor
        $c1->ponta = 0.5; // atribuindo valor ao atributo ponta
        $c1->carga = 100; // atribuindo valor ao atributo carga
        $c1->tampada = false; // atribuindo valor ao atributo tampada
        $c1->tampar(); // chamando o método tampar da classe caneta
        $c1->Rabiscar(); // chamando o método Rabiscar da classe caneta
        

     print_r($c1) // exibindo o objeto c1

        
    ?>

</body>

</html>