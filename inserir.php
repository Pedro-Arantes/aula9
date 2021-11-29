<?php
//include/ include_once avisa o erro e continua o programa
// require / require_once mata o programa ao encontrar erro.

include("conexao.php");

$aluno = "Luis ";
$turma = "2001";
$mensal = 470.60;
$sql = "insert into tblaluno (aluno,turma,mensal) 
        values('$aluno','$turma','$mensal')";
//mysqli_query(conexao,comando sql);
//$qry = mysqli_query
//($con,$sql)

//conexao->query(comando sql)
$con->query($sql);