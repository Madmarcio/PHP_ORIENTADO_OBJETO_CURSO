<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>

<body>
    <h1>Projeto controle remoto</h1>
    <pre>
         <?php
    require_once '3_Classe_Controle_remoto.php';
    $c = new controleRemoto();
    $c->ligar();
    $c->abrirMenu();  
    
    ?>
    </pre>


</body>

</html>