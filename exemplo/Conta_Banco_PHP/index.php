<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ContBanco</title>
</head>
<body>
    <pre>
        <?php
            require_once "ContaBanco.php";

            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            $p1->setNumConta(111);
            $p1->abrirConta("CC");
            $p1->setDono("Levi");

            $p2->setNumConta(222);
            $p2->abrirConta("CP");
            $p2->setDono("Luna");

            $p1->depositar(300);
            $p2->depositar(500);

            $p1->sacar(338);
            $p2->sacar(630);

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