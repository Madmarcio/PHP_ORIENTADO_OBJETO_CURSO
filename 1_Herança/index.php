<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança parte 1</title>
</head>

<body>
    <pre>
         <?php 
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Funcionario.php';
    require_once 'Professor.php';

    $p1 = new Pessoa("Pedro", 22, "M");
    $p2 = new Aluno("Maria", 18, "F", 1111, "Informatica");
    $p3 = new Funcionario("Claudio", 25, "M", "Estoque");
    $p4 = new Professor("Fabiana", 30, "F", "Matematica", 2500.75);

    print_r($p1);
    print_r($p2);
    print_r($p3);
    $p4->receberAumento(500);
    print_r($p4);
    
    
    ?>

    </pre>

</body>

</html>