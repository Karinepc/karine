<?php
    include 'agenda.php';
?>     
<fieldset>
    <legend> Contatos </legend>
    <table border="1">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Numero</th>
            <th>Remover</th>
            <th>Editar</th>
        </tr>
        <tr>
			<?php 
                include'config/conexao.php';
            $query 	= 	"SELECT * FROM agenda ORDER BY cod_agen ASC";
			
            $r 		= 	mysql_query($query) or die (mysql_error());
                        while ( $array = mysql_fetch_array($r) ) {
                                $cod_agen         = $array['cod_agen'];
                                $nome_cont        	= $array['nome_cont'];
                                $numero_cont     	= $array['numero_cont'];
                                ?>
        <tr>
            <td><?php echo $cod_agen ;?></td>
            <td><?php echo $nome_cont ;?></td>
            <td><?php echo $numero_cont ;?></td>
            <td><a href="excluir-contato.php?cod_agen=<?php echo $cod_agen;?>"><img src="imagens/x.png"/></a></td>
            <td><a href="editar-contato.php?cod_agen=<?php echo $cod_agen;?>"><img src="imagens/edit.png"/></a></td>
        </tr>
<?php
		}
?>
    </table>
</fieldset>
