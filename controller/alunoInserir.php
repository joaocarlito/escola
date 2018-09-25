<pre>
<?php

require_once '../model/alunos.php';

$nome = "Joselito";
$cpf = "123.123.123-11";
$sexo = "M";
$email = "joselito@lito.com";
$turma = "AJAX";
$telefone = "11-9988-1122";

$res = inserirAluno($nome, $cpf, $sexo, $email, $turma, $telefone);

var_dump($res);