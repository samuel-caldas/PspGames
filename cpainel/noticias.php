<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link href="painel.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="10">
<tr>
<?php
	include_once("conectar.php");
	session_cache_expire(10);
	@session_start();
	if (isset($_SESSION["nome"])){}
	else{
		echo("
		<script type='text/javascript'>
			document.bgColor='#FF0000';
			window.alert('Você nao está logado. Efetue o login para poder ver isso.');
			parent.window.location.href='index.php';
		</script>");
	}
//--------------------------
$i=1;
//--------------------------
$noticias= MYSQL_QUERY("select * from cpnoticias order by data DESC") or die(mysql_error());
while ($conteudo = mysql_fetch_row($noticias)){
$sql=MYSQL_QUERY("select * from cpimagens where capa='s' and id='".$conteudo[0]."'") or die(mysql_error());
$imagem = mysql_fetch_row($sql);
$data=$conteudo[1][8].$conteudo[1][9]."/".$conteudo[1][5].$conteudo[1][6]."/".$conteudo[1][0].$conteudo[1][1].$conteudo[1][2].$conteudo[1][3];
if ($conteudo[7]="thumb"){$galeria="Top 10";} elseif ($conteudo[7]="slide"){$galeria="Slider";} elseif ($conteudo[7]="nenhuma"){$galeria="Nenhuma";}

	echo"    
	<td align='center' valign='middle'>
    	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
          <tr>
            <td align='center' valign='middle'>
			<table border='0' cellspacing='0' cellpadding='0' background='imagens/bgplano.png'>
			  <tr>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
				<td align='center' valign='middle'>&nbsp;</td>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
			  </tr>
			  <tr>
				<td align='center' valign='middle'>&nbsp;</td>
				<td align='center' valign='middle'><img src='../".$imagem[3]."' width='360' height='210' alt='' /></td>
				<td align='center' valign='middle'>&nbsp;</td>
			  </tr>
			  <tr>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
				<td align='center' valign='middle'>&nbsp;</td>
				<td align='center' valign='middle' width='15px' height='5px'>&nbsp;</td>
			  </tr>
			</table>
			</td>
          </tr>
          <tr>
            <td align='center' valign='middle'><h2>".$conteudo[2]."</h2></td>
          </tr>
		 <tr>
            <td align='center' valign='middle'>
<a href='addimg.php'><img src='imagens/adicionar.png' width='27' height='27' alt='Adicionar imagens' /></a>
<a href='editnoticia.php?cd=".$conteudo[0]."'><img src='imagens/editar.png' width='27' height='27' alt='Editar notícia' /></a>
<a href='delete.php'><img src='imagens/excluir.png' width='27' height='27' alt='Excluir notícia' /></a>
			</td>
          </tr>
          <tr>
            <td align='center' valign='middle'><b>".$data."</b></td>
          </tr>
          <tr>
            <td align='center' valign='middle'><b>".$conteudo[4]."<b></td>
          </tr>
          <tr>
            <td align='center' valign='middle'>".$galeria."</td>
          </tr>
        </table>
    </td>";
	if ($i>3){echo"</tr><tr>"; $i=1;}
	$i++;
}
?>
</tr>
</table>

</body>
</html>