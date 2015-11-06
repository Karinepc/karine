<?php
    include 'config/conexao.php';
    
    $cod_agen     = $_POST['cod_agen'];
    $nome_cont       = $_POST['nome_cont'];
    $numero_cont    = $_POST['numero_cont'];
    
    if (($cod_agen != "") and ($nome_cont != "") and ($numero_cont != "")){
        mysql_query("UPDATE agenda SET nome_cont = '$nome_cont', numero_cont = '$numero_cont' 
        WHERE cod_agen = '$cod_agen'",$conexao);
            echo "Contato alterado com sucesso";
    }else{
            echo "Contato Nao pode ser atualizado, verifique o preenchimento";
    }
?>
