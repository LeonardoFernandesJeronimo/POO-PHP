<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 13 - POO</title>
    </head>
    <body>
        <?php
        require_once './Mamifero.php';
        require_once './Lobo.php';
        require_once './Cachorro.php';
        $m = new Mamifero();
        $m->emitirSom();
        
        $l = new Lobo();
        $l->emitirSom();
        
        $c = new Cachorro();
        $c->emitirSom();
        
        ?>
    </body>
</html>
