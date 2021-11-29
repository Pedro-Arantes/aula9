<?php
//include/ include_once avisa o erro e continua o programa
// require / require_once mata o programa ao encontrar erro.

include("conexao.php");

$docente = "Mario ";
$especialidade = "Front-end";
$salhora = 470.60;
$disponibilidade = "Seg,Quart,Sex";
$sql = "insert into tbldocente (docente,especialidade,salhora,disponibilidade)  values('$docente','$especialidade','$salhora','$disponibilidade')";
//mysqli_query(conexao,comando sql);
//$qry = mysqli_query
//($con,$sql)

//conexao->query(comando sql)
$con->query($sql);