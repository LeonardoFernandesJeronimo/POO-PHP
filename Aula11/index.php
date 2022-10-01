<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - POO</title>
    </head>
    <body>
        <pre>
        <?php        
        require_once './Visitante.php';
        require_once './Aluno.php';
        require_once './Bolsista.php';
        require_once './Professor.php';
        require_once './Tecnico.php';
        
        $v1 = new Visitante();
        $v1->setNome("Leonardo");
        $v1->setIdade(30);
        $v1->setSexo("M");
        print_r($v1);
        
        $a1 = new Aluno();
        $a1->setNome("Amanda");
        $a1->setIdade(22);
        $a1->setSexo("M");
        $a1->setMatricula(1111111);
        $a1->setCurso("PHP");
        $a1->pagarMensalidade();
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setNome("Carlos");
        $b1->setIdade(46);
        $b1->setSexo("M");
        $b1->setMatricula(111112);
        $b1->setCurso("Administração");
        $b1->setBolsa(12.5);
        $b1->pagarMensalidade();
        print_r($b1);
        
        $p1 = new Professor();
        $p1->setNome("Aline");
        $p1->setIdade(35);
        $p1->setSexo("F");
        $p1->setSalario(3500);
        $p1->setEspecialidade("Informatica");
        $p1->receberAumento(2500);
        print_r($p1);
        
        $t1 = new Tecnico();
        $t1->setNome("Astolfo");
        $t1->setIdade(56);
        $t1->setSexo("M");
        $t1->setMatricula(222222222);
        $t1->setCurso("Torno CNC");
        $t1->setRegisttroProfi(123456789);
        $t1->praticar();
        print_r($t1);
        
        ?>
        </pre>
    </body>
</html>
