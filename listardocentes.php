<?php

include('conexao.php');


$sql = "select * from tbldocente";


$resultado = $con->query($sql);



    //listar os resultados achados

    while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

       
       echo "<br>";

     

        echo "Numero:{$linha['iddocente']}<br>";

        echo $linha['docente']."<br>";

        echo $linha['especialidade']."<br>";

        echo $linha['salhora']."<br>";

        echo $linha['disponibilidade']."<hr>";

        echo "<button>Editar</button> | <button>Apagar</button>";

        echo "<hr>";

         //die();

    }