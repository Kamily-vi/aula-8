<?php

function fecharNotasAlunos( array &$alunos){
    foreach($alunos as $chave => $aluno){
        if($aluno["nota"] < 50){
            $alunos[$chave]["situação"] = "Reprovado";
        }else{
            $alunos[$chave]["situação"] = "Aprovado";
        }
    }
}

