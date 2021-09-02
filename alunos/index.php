<?php

    require("./funcao.php");
    require("./alunos.php");

    fecharNotasAlunos($alunos);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Notas dos alunos</title>
</head>
<body>
    <section>
    <h1>Tabela de Notas</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota</th>
            <th>Situação</th>
        </tr>
        <?php
            foreach($alunos as $aluno){
        ?>
        <tr>
            <td><?= $aluno ["nome"] ?></td>
            <td><?= $aluno ["idade"] ?></td>
            <td><?= $aluno ["nota"] ?></td>
            <td class="
            <?=$aluno["situação"] == "Aprovado"? "aprov" : "reprov"  ?>
            ">
            <?= 
                isset($aluno["situação"]) ?
                    $aluno["situação"] :
                    ""
    
        ?>
    </td>
        </tr>
        <?php
            }
        ?>
    </table>
</section>
</body>
</html>