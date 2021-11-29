<?php
//include/ include_once avisa o erro e continua o programa
// require / require_once mata o programa ao encontrar erro.

include("conexao.php");

$curso = "Ingles ";
$valor = 600.00;
$ch = 900;
$docente = "Aline";
$sql = "insert into tblcursos (curso,valor,ch,docente) 
        values('$curso','$valor','$ch','$docente')";
//mysqli_query(conexao,comando sql);
//$qry = mysqli_query
//($con,$sql)

//conexao->query(comando sql)
$con->query($sql);