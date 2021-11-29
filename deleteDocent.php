<?php
//include/ include_once avisa o erro e continua o programa
// require / require_once mata o programa ao encontrar erro.

include("conexao.php");

$iddocente = 2;

$sql = "delete from tbldocente where iddocente ='$iddocente'"; 
//mysqli_query(conexao,comando sql);
//$qry = mysqli_query
//($con,$sql)

//conexao->query(comando sql)
$con->query($sql);