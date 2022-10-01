<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 12 - POO</title>
    </head>
    <body>
        <pre>
        <?php
        require_once './Mamifero.php';
        require_once './Peixe.php';
        require_once './Ave.php';
        require_once './Canguru.php';
        require_once './Cobra.php';
       
        
        $m = new Mamifero();
        $m->setCorPelo("Marrom");
        $m->setPeso(30.5);
        $m->setIdade(5);
        $m->setMembros(4);
        $m->alimentar();
        $m->locomover();
        $m->emitirSom();
        print_r($m);
        
        $p = new Peixe();
        $p->setPeso(0.35);
        $p->setIdade(1);
        $p->setMembros(0);
        $p->setCorEscama("Azul");
        $p->alimentar();
        $p->locomover();
        $p->emitirSom();
        $p->soltarBolha();
        print_r($p);
        
        $a = new Ave();
        $a->setCorPena("Vermelha");
        $a->setPeso(0.89);
        $a->setIdade(2);
        $a->setMembros(2);
        $a->alimentar();
        $a->locomover();
        $a->emitirSom();
        $a->fazerNinho();
        print_r($a);
        
        $c = new Canguru();
        $c->setCorPelo("Marrom");
        $c->setIdade(6);
        $c->setMembros(4);
        $c->setPeso(80);
        $c->alimentar();
        $c->usarBolsa();
        $c->locomover();
        print_r($c);
        
        $co = new Cobra();
        $co->setCorEscama("Verde");
        $co->setMembros(0);
        $co->setIdade(1);
        $co->setPeso(10.5);
        $co->locomover();
        print_r($co);
        
        ?>
        </pre>
    </body>
</html>
