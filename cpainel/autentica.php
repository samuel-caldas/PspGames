<?php
	require_once("conectar.php");
	$l = $_POST["nome"];
	$s = $_POST["senha"];
	$sql = "select * from cplogin where nome='".$l."' or login='".$l."' or email='".$l."' and senha ='".$s."'";
	$result = mysql_query($sql) or die(mysql_error());
	$sessao = mysql_fetch_row($result);	
	$num_linhas = mysql_num_rows($result);
	if($num_linhas==1){
		session_start();
		$_SESSION["cd"]=$sessao[0];
		$_SESSION["permissao"]=$sessao[1];
		$_SESSION["nome"]=$sessao[3];
		$_SESSION["login"]=$sessao[4];
		$_SESSION["email"]=$sessao[5];
		$_SESSION["senha"]=$sessao[6];
		echo("<script language='javascript'>parent.window.location.href='inicio.php' </script>");
	}
	else{
		echo("<script type='text/javascript'> window.alert('Dados incorretos'); </script>");
		echo("<script language='javascript'>parent.window.location.href='index.php' </script>");
	}
?>