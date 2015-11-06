<?php
    include 'config/conexao.php';

        $nome_cont=$_POST['nome_cont'];
        $numero_cont=$_POST['numero_cont'];
        
        if ( ($nome_cont !="")
          && ($numero_cont !="")
          ){
        mysql_query ("INSERT INTO agenda(nome_cont, numero_cont)
                            VALUES ('$nome_cont', '$numero_cont')",$conexao) or die(mysql_error());
        echo ("Contato adcionado com sucesso");
        echo "<a href=\" index.php\"><br/>Voltar</a>";
		  }else{
			  echo 'erro';
		  }
 ?>
