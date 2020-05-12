<?php
	@session_start();
	include("conectar.php");
	$sql = "DELETE FROM `".$_GET["t"]."` WHERE `cd` = ".$_GET["cd"].";";
	$resultado= mysql_query($sql) or die ("
		<script type='text/javascript'>
			window.alert('Falha ao enviar os dados!');
			history.back();
		</script>");
	if ($resultado){
	echo("
		<script type='text/javascript'>
			window.alert('Deletado com sucesso!');
			history.back();
		</script>
	");
	}
?>