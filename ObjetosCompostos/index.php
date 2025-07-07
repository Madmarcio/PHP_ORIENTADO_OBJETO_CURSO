<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos compostos</title>
</head>

<body>
    <pre>
        <?php 
    require_once 'Lutador.php';
    require_once 'Luta.php';
   $L1 = array();

   $L1[0] = new Lutador("Everton", "Brasil", 29, 1.75, 68.9, 11, 2, 1);
   $L1[1] = new Lutador("Brock Lesnar", "EUA", 35, 1.80, 67, 12, 3, 1);
   
   $UEC01 = new Luta();
   $UEC01->marcarLuta($L1[0], $L1[0]);
   $UEC01->lutar();
    $L1[0]->status();
   
    
    ?>
    </pre>


</body>

</html>