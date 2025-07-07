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
        require_once 'Video.php';       
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
    //Programa Principal
    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 2 de PHP");
    $v[2] = new Video("Aula 3 de HTML");
    

    $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
    print_r($g);
    
    $vis[0] = new Visualizacao($g[0], $v[2]);
    $vis[1] = new Visualizacao($g[0], $v[1]);
    $vis[0]->avaliar();
    $vis[1]->avaliarNota(9);
    $vis[0]->avaliarPorc(80);
    print_r($vis);
    
        
        ?>
    </pre>

</body>

</html>