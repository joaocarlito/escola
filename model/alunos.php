<?php

function dbCon()
{
    $usuario = "root";
    $senha = "elaborata";
    $banco = "escola";
    $server = "localhost";
    
    $con = mysqli_connect($server, $usuario, $senha, $banco);
    return $con;
}

function listarAlunos()
{
    $con = dbCon();
    
    $sql = "SELECT * FROM alunos";
    
    $res = mysqli_query($con, $sql);
    
    return mysqli_fetch_all($res , MYSQLI_ASSOC);
}

function inserirAluno($nome, $cpf, $sexo, $email, $turma, $telefone)
{
    $con = dbCon();
    
    $sql = "INSERT INTO alunos "
            . "(`id`, `nome`, `cpf`, `telefone`, `email`, `turma`, `sexo`) "
            . "VALUES "
            . "(NULL, "
            . "'$nome', "
            . "'$cpf', "
            . "'$telefone', "
            . "'$email', "
            . "'$turma', "
            . "'$sexo');";
    
    $res = mysqli_query($con, $sql);
    
    return $res;
    
}

function deletarAluno($id)
{
   $con = dbCon();
   
   $sql = "DELETE FROM alunos WHERE id = $id";
   
   $res = mysqli_query($con, $sql);
   
   return $res;
   
}
