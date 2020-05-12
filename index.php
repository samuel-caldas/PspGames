<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PSP Games</title>
<meta http-equiv="Refresh" content="5">
<style type="text/css">
body,td,th {
	color: #333;
	font-family: Verdana, Geneva, sans-serif;
}
body {
	background-color: #EEE;
}
a:link {
	text-decoration: none;
	color: #333;
}
a:visited {
	text-decoration: none;
	color: #333;
}
a:hover {
	text-decoration: underline;
	color: #333;
}
a:active {
	text-decoration: none;
	color: #333;
}
div {
	display: block;
	clear: both;
	margin: 0px;
	padding: 0px;
}
</style>
</head>

<body>
<h1>Todos os jogos de PSP no mesmo lugar!</h1>
<?php
	include_once("cpainel/funcoes/funcoes.php");
	include_once("cpainel/funcoes/conectar.php");
	$saida=select("*","games","","nome");
	$x=count($saida);
?>
<H3>Utilidades:</H3>
<p><a href="http://theonlinedatastorage.com/file/2027/hjsplit-zip.html">HJ Split: http://theonlinedatastorage.com/file/2027/hjsplit-zip.html</a><br>
Possiveis senhas:</p>
<h3>Indice:</h3>
<ul type="square">
<?php
for($i=0; $i<$x; $i++){
	echo("	<li><a href='#".$saida[$i][1]."'>".$saida[$i][1]."</a></li>");
}
?>
</ul>
<?php
	for($i=0; $i<$x; $i++){
		$link=select("*","links","id='".$saida[$i][0]."'","link");
		$y=count($link);
		echo"<div><a name='".$saida[$i][1]."'><h3>".$saida[$i][1]."</h3></a>";
		echo"<h4>Descri&ccedil;&atilde;o:</h4>".$saida[$i][2];
		if ($saida[$i][3] or $saida[$i][4] or $saida[$i][5] or $saida[$i][6] or $saida[$i][7] or $saida[$i][7]){echo"<h4>Info:</h4><p>";
		if ($saida[$i][3] and $saida[$i][3]!='-'){echo("Ripped:&nbsp;".$saida[$i][3]);};
		if ($saida[$i][4] and $saida[$i][4]!='-'){echo("<br />Formato:&nbsp;".$saida[$i][4]);};
		if ($saida[$i][5] and $saida[$i][5]!='-'){echo("<br />Tamanho:&nbsp;".$saida[$i][5]);};
		if ($saida[$i][6] and $saida[$i][6]!='-'){echo("<br />Idioma:&nbsp;".$saida[$i][6]);};
		if ($saida[$i][7] and $saida[$i][7]!='-'){echo("<br />Senha:&nbsp;".$saida[$i][7]);};
		echo"</p>";};
	if ($link[0][2]!=""){
	echo("
	<h4>Links:</h4>
		<ul>
");
		for($j=0; $j<$y; $j++){
			echo("			<li><a href='".$link[$j][2]."'>Parte ".($j+1)."</a></li>");
		}
		echo("
		</ul>");
	}
echo("
	</div><br><br>
");
	}
?>
</body>
</html>