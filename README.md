<?php
    $cod_agen = $_GET['cod_agen'];
    
    if($cod_agen != '') {
        include 'config/conexao.php';
        
        $query = "DELETE FROM agenda WHERE cod_agen='$cod_agen'";
        //echo $query;
        $return = mysql_query($query,$conexao);
        
        if ($return) {
            echo 'Contato removido com sucesso!';            
        }else{
            echo "Este registro possui vinculo em outra tabela.";
        }
    }
?>
