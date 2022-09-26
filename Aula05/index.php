<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 05 - POO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once './ContaBanco.php';
            $p1 = new ContaBanco();
            $p1->abrirConta("CC");
            $p1->setNumConta(11111);
            $p1->setDono("Leonardo");
            
            $p2 = new ContaBanco();
            $p2->abrirConta("CP");
            $p2->setNumConta(22222);
            $p2->setDono("Andrea");
            
            $p1->depositar(300);
            $p2->depositar(400);
            
            $p1->sacar(338);
            $p2->sacar(530);
            
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            $p1->fecharConta();  
            $p2->fecharConta();
            
            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </body>
</html>
