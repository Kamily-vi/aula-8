<?php

function fecharNotaAlunos( array &$aluno){
    foreach($alunos as $chave => $aluno){
        if($aluno["nota"] >= 50){
            $alunos[$chave]["situação"] = "aprovado";
        }else{
            $alunos[$chave]["situação"] = "reprovado";
        }
    }
}

fecharNotaAlunos($aluno);