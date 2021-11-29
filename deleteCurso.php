<?php
//include/ include_once avisa o erro e continua o programa
// require / require_once mata o programa ao encontrar erro.

include("conexao.php");

$idcursos = 1;

$sql = "delete from tblcursos where idcursos ='$idcursos'"; 
//mysqli_query(conexao,comando sql);
//$qry = mysqli_query
//($con,$sql)

//conexao->query(comando sql)
$con->query($sql);