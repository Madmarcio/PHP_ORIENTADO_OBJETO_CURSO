<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
        <?php
      //Programa Principal
    require_once 'Mamifero1.php';
    require_once 'Cachorro1.php';
    $c = new Cachorro1();
    $c->reagirFrase("Olá");
    $c->reagirFrase("Toma comida");
    $c->reagirFrase("Vai apanhar");
    
      
    ?>
    </pre>

</body>

</html>