<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './Caneta.php';
            
            //$c1 = new Caneta();
            //$c1->setModelo("BIC");
            //$c1->setPonta(0.5);
            //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}<br>";
            
            $c2 = new Caneta("BIC", "Azul", 0.5);
            print_r($c2);
            $c3 = new Caneta("KKK", "Verde", 0.7);
            print_r($c3);
        ?>
        </pre>
    </body>
</html>
