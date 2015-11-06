<?php
    include 'menu.php';
?>
<fieldset>
    <legend>Agenda.</legend>
    <table border="1">
        <tr>
            <th>Codigo</th>
			<th>Nome do contato</th>
            <th>Numero do contato</th>
        </tr>
		
            <?php
				include'config/conexao.php';
            $query  = "SELECT * FROM agenda";

            $r      = mysql_query($query) or die (mysql_error());
            while ($array = mysql_fetch_array($r)) {
               $cod_agen     = $array['cod_agen'];
			   $nome_cont  =   $array['nome_cont'];
			   $numero_cont    =   $array['numero_cont'];
            ?>
			
        <tr>
           <td><?php echo $cod_agen; ?></td>
		   <td><?php echo $nome_cont; ?></td>
            <td><?php echo $numero_cont; ?></td>
        </tr>
            <?php
            }
            ?>
    </table>
</fieldset>
