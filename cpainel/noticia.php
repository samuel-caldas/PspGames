<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notícia</title>
<link href="painel.css" rel="stylesheet" type="text/css" />
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
<form action="add.php" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="left" valign="middle"><h2><strong>&nbsp;&nbsp; Nova notícia:</strong></h2></td>
  </tr>
  <tr>
    <td width="13%" align="right" valign="middle"><strong>Título:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <input type="text" name="titulo" id="titulo" />
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><strong>Data:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <input type="text" name="data" id="data" />
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="top"><strong>Resumo:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <textarea name="resumo" cols="80" rows="15" id="resumo"></textarea>
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><strong>Autor:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <input type="text" name="autor" id="autor" />
    </strong></td>
  </tr>
  <tr>
    <td align="right" valign="middle"><strong>Galeria:&nbsp; </strong></td>
    <td align="left" valign="middle"><strong>
      <select name="galeria" id="galeria">
        <option value="slide">Slider</option>
        <option value="thumb">Top 10</option>
        <option value="nenhuma" selected="selected">Nenhuma</option>
      </select>
    </strong></td>
    </tr>
  <tr>
    <td align="right" valign="top"><strong>Notícia:&nbsp; </strong></td>
    <td valign="middle"><strong>
      <textarea name="mensagem" cols="80" rows="20" id="mensagem"></textarea>
    </strong></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="middle"><strong>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" name="button" id="button" value="Publicar" />
    </strong></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="middle">&nbsp;</td>
  </tr>
</table>
<input name="tipo" type="hidden" value="noticia" />
</form>

</body>
</html>