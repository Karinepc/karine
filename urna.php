<?php
session_start();
$digito = filter_input(INPUT_GET,'digito');
$_SESSION['voto'] = @$_SESSION['voto'] . $digito;
$visor = $_SESSION['voto'];
//$digito = $_GET['digito'];

	if(('$digito' == 13) or ('$digito' == 24) or ('digito' == 45));

	$digito = filter_input(INPUT_GET,'digito');
	IF(isset($_GET ['confirmar']) == 'confirmar'){
	$arquivo = "urna.txt";
	$conteudo = ",".$visor;
	$abertura = fopen("$arquivo","a+");
	$gravaçao = fwrite($abertura,$conteudo);
	#Reposiciona o ponteiro no inicio do arquivo
	fseek($abertura,0);
	$leitura = fread($abertura,filesize($arquivo));
	fclose($abertura);
}
	$digito = filter_input(INPUT_GET,'$digito');
	IF(isset($_GET ['branco']) == 'branco'){
	$arquivo = "branco.txt";
	$conteudo = ",". 0;
	$abertura = fopen("$arquivo","a+");
	$gravaçao = fwrite($abertura,$conteudo);
	#Reposiciona o ponteiro no inicio do arquivo
	fseek($abertura,0);
	$leitura = fread($abertura,filesize($arquivo));
	fclose($abertura);
}
	$digito = filter_input(INPUT_GET,'$digito');
	IF(isset($_GET ['nulo']) == 'nulo'){
	$arquivo = "nulo.txt";
	$conteudo = ",".0;
	$abertura = fopen("$arquivo","a+");
	$gravaçao = fwrite($abertura,$conteudo);
	#Reposiciona o ponteiro no inicio do arquivo
	fseek($abertura,0);
	$leitura = fread($abertura,filesize($arquivo));
	fclose($abertura);
}
?>
<html>
<form  action="" method="get">
<input type="text" name="campo" value="<?php echo $visor; ?>"
Numero do Candidato: <input type="text" name="numcondidato"><br/>
<input type="submit" name="digito" value="1"/>
<input type="submit" name="digito" value="2"/>
<input type="submit" name="digito" value="3"/><br/>
<input type="submit" name="digito" value="4"/>
<input type="submit" name="digito" value="5"/>
<input type="submit" name="digito" value="6"/><br/>
<input type="submit" name="digito" value="7"/>
<input type="submit" name="digito" value="8"/>
<input type="submit" name="digito" value="9"/><br/>
<input type="submit" name="digito" value="0"/><br/>

<input type="submit" name="nulo" value="nulo"/>
<input type="submit" name="branco" value="branco"/>
<input type="submit" name="corrigir" value="corrigir"/>
<input type="submit" name="confirmar" value="confirmar"/>
</form>


</html>

