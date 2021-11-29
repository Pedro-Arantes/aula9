<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "bdcurso";

try {
    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    var_dump($con);//debugar-descobrir o q esta sendo respondido.
} catch (PDOException $e) {
    echo "conexao falhou:<br>".$e->getMessage();
}