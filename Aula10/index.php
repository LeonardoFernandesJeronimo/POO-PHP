<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 10 - POO</title>
    </head>
    <body>
        <pre>
        <?php        
        require_once './Pessoa.php';
        require_once './Aluno.php';
        require_once './Professor.php';
        require_once './Funcionario.php';
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();
        
        $p1->setNome("Leonardo");
        $p1->setIdade(30);
        $p1->setSexo("M");
        print_r($p1);
        
        $p2->setNome("Andrea");
        $p2->setIdade(55);
        $p2->setSexo("F");
        $p2->setMatricula(111111111);
        $p2->setCurso("Enfermagem");
        print_r($p2);
        
        $p3->setNome("Carlos");
        $p3->setIdade(60);
        $p3->setSexo("M");
        $p3->setEspecialidade("PHP");
        $p3->setSalario(5000);
        $p3->receberAum(2000);
        print_r($p3);
        
        
        $p4->setNome("Vanessa");
        $p4->setIdade(25);
        $p4->setSexo("F");
        $p4->setSetor("Recursos Humanos");
        $p4->setTrabalhando("Google");
        print_r($p4);
        ?>
        </pre>
    </body>
</html>
