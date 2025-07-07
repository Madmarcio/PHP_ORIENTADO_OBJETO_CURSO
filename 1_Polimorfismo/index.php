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
    require_once 'Mamifero.php';
    require_once 'Reptil.php';
    require_once 'Ave.php';
    require_once 'Peixe.php';
    require_once 'Arara.php';
    require_once 'Cobra.php';
    require_once 'Tartaruga.php';
    require_once 'GoldFish.php';
    require_once 'Cachorro.php';
    require_once 'Kanguru.php';
    


    $m = new Mamifero();
    $a = new Ave();
    $r = new Reptil();
    $k = new Kanguru();
  
    $t = new Tartaruga();
    

    $k->locomover();
    
    ?>
</pre>

</body>

</html>