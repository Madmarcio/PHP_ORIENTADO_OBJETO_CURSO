<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
p

<body>
    <pre>
        <?php 
    require_once 'Aluno.php';
    require_once 'Bolsista.php';
    $V1 = new Aluno();
    $V1->setNome("João");   
    $V1->setIdade(25);
    $V1->setSexo("M");
    $V1->fazerAniversario();
    $V1->setMatricula(12345);
    $V1->setCurso("Engenharia");
    $V1->pagarMensalidade();
    print_r($V1);

    $B1 = new Bolsista();
    $B1->setNome("Maria");
    $B1->setIdade(20);
    $B1->setSexo("F");
    $B1->fazerAniversario();
    $B1->setMatricula(54321);
    $B1->setCurso("Medicina");
    $B1->setBolsa(50);
    $B1->renovarBolsa();
    $B1->pagarMensalidade();
    print_r($B1);
    ?>
    </pre>


</body>

</html>