<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="painel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notícia</title>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(function() {

$( "#data" ).datepicker();
$( "#data2" ).datepicker();

});

</script>

<script type="text/javascript" src="plugins/word/tiny_mce.js"></script>
				<script type='text/javascript'>
					// JavaScript Document
						tinyMCE.init(
						{
							// General options
							mode : 'textareas',
							theme : 'advanced',
							skin : 'o2k7',
							language : 'pt',
							plugins : 'autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave',
					
							// Theme options
							theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect',
							theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
							theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
							theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft',
							theme_advanced_toolbar_location : 'top',
							theme_advanced_toolbar_align : 'left',
							theme_advanced_statusbar_location : 'bottom',
							theme_advanced_resizing : true,
					
							// Example word content CSS (should be your site CSS) this one removes paragraph margins
							content_css : 'plugins/screen.css',
					
							// Drop lists for link/image/media/template dialogs
							template_external_list_url : 'lists/template_list.js',
							external_link_list_url : 'lists/link_list.js',
							external_image_list_url : 'lists/image_list.js',
							media_external_list_url : 'lists/media_list.js',
						});
</script>
</head>

<body>
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
$noticias= MYSQL_QUERY("select * from cpnoticias where cd='".$_GET["cd"]."' order by data DESC") or die(mysql_error());
while ($conteudo = mysql_fetch_row($noticias)){
$data=$conteudo[1][8].$conteudo[1][9]."/".$conteudo[1][5].$conteudo[1][6]."/".$conteudo[1][0].$conteudo[1][1].$conteudo[1][2].$conteudo[1][3];
$titulo=$conteudo[2];
$resumo=$conteudo[3];
$autor=$conteudo[4];
$noticia=$conteudo[5];
$cd=$_GET["cd"];
echo"
<form action=add.php method=post>
<table width=100% border=0 align=center cellpadding=0 cellspacing=0>
  <tr>
    <td colspan=2 align=center valign=middle><h2><strong>Nova notícia:</strong></h2></td>
  </tr>
  <tr>
    <td width=13% align=right valign=middle><strong>Título:&nbsp; </strong></td>
    <td align=left valign=middle><strong>
      <input name=titulo type=text id=titulo value='".$titulo."' />
    </strong></td>
  </tr>
  <tr>
    <td align=right valign=middle><strong>Data:&nbsp; </strong></td>
    <td align=left valign=middle><strong>
      <input name=data type=text id=data value=".$data." />
    </strong></td>
  </tr>
  <tr>
    <td align=right valign=top><strong>Resumo:&nbsp; </strong></td>
    <td align=left valign=middle><strong>
      <textarea name=resumo cols=80 rows=15 id=resumo>".$resumo."</textarea>
    </strong></td>
  </tr>
  <tr>
    <td align=right valign=middle><strong>Autor:&nbsp; </strong></td>
    <td align=left valign=middle><strong>
      <input name=autor type=text id=autor value='".$autor."' />
    </strong></td>
  </tr>
  <tr>
    <td align=right valign=top><strong>Notícia:&nbsp; </strong></td>
    <td valign=middle><strong>
      <textarea name=noticia cols=80 rows=20 id=noticia>".$noticia."</textarea>
    </strong></td>
  </tr>
  <tr>
    <td colspan=2 align=center valign=middle><strong>
      <input type=submit name=button id=button value=Publicar />
    </strong></td>
  </tr>
</table>
<input name=tipo type=hidden value=editnoticia />
<input name=cd type=hidden value=".$cd." />
</form>";
}
?>

</body>
</html>