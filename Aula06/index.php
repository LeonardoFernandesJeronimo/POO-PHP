<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 06 - POO</title>
    </head>
    <body>
        <pre>
        <h1>Projeto Controle Remoto</h1>
        <?php
            require_once './ControleRemoto.php';
            
            $c = new ControleRemoto();
        
            
            $c->ligar();        
            $c->maisVolume();
            $c->maisVolume();
            $c->abrirMenu();
            
        ?>
        </pre>
    </body>
</html>
