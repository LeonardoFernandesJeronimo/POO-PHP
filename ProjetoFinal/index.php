<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Final</title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Video.php';
        require_once './Gafanhoto.php';
        require_once './Visualizacao.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 1 de HTML5");
       
        $g[0] = new Gafanhoto("Leonardo", 30, "M", "1234");
        $g[1] = new Gafanhoto("Andrea", 55, "F", "4567");
        
        $vis[0] = new Visualizacao($g[0], $v[0]);
        $vis[1] = new Visualizacao($g[0], $v[1]);
        
        $v[1]->play();
        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(80);
        
        print_r($vis);
        ?>
        </pre>
    </body>
</html>
