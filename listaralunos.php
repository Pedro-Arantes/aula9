<?php

include('conexao.php');


$sql = "select * from tblaluno";


$resultado = $con->query($sql);



    //listar os resultados achados

    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

       // var_dump($linha);

     

        echo $linha['idaluno']."<br>";

        echo $linha['aluno']."<br>";

        echo $linha['turma']."<br>";

        echo $linha['mensal']."<br>";

        echo "<button>Editar</button> | <button>Apagar</button>";

        echo "<hr>";

         //die();

    }