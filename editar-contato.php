<?php
include 'config/conexao.php';

    $cod_agen = $_GET['cod_agen'];
    
    $sql_agenda = "SELECT * FROM agenda WHERE cod_agen = '$cod_agen'";
    $result_agenda = mysql_query($sql_agenda,$conexao) or die (mysql_error());
    $agenda = array();
    $agenda = mysql_fetch_array($result_agenda);

	?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alteração do Contato</title>
    </head>
    <body>
        <?php
            include 'agenda.php';
        ?>
        
        <fieldset>
            <legend>Alteração do Contato</legend>
            <form action="edit-contato.php" method="post">
            <label>Codigo</label>
            <p><input type="text" name="cod_agen" value="<?php echo $agenda['cod_agen'];?>" readonly/></p>
            <label>Nome</label>
            <p><input type="text" name="nome_cont" value="<?php echo $agenda['nome_cont'];?>"/></p>
            <label>Numero</label>
            <p><input type="text" name="numero_cont" value="<?php echo $agenda['numero_cont'];?>"/></p>
                <input type="submit" value="Alterar" name="alterar"/>
        </form>
        </fieldset>
    </body>
</html>
