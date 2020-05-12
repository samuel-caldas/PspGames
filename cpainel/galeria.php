<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<style>
body{
	color:#FFFFFF;
}
</style>
<script language="JavaScript">
<!--
	var i =0;
	function adicionar(){
		var conteudo = ''
		document.getElementById('linha').innerHTML += conteudo;
		i+=i;
	};
	function carrega(c){
		document.getElementById('load'+c).style.visibility=visible;
		document.getElementById('nome'+c).innerHTML=document.getElementById('file'+c).value;
		document.getElementById('nome'+c).style.visibility=visible;
	};
//-->
</script>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><input type="button" name="button" id="button" value="Adicionar" onclick="adicionar();" /></td>
  </tr>
  <tr>
    <td>
    <div id="linha">
<form action="envia.php" enctype="multipart/form-data" target="frame',i,'"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="left" valign="middle"><input type="file" name="file',i,'" id="file',i,'" /> <input type="submit" value="Enviar" onclick="carrega(',i,');" /></td><td rowspan="2" align="center" valign="middle"><img src="../../../wamp/www/Site sem nome 2/loading.gif" name="load" width="30" height="30" align="middle" id="load'+i+'" style="visibility:hidden;"/></td><td rowspan="2" align="center" valign="middle"><iframe name="frame',i,'" style="visibility:hidden;" width="0px" height="0px"></iframe></td></tr><tr><td align="left" valign="middle"><div id="nome'+i+'" style="visibility:hidden"></div></td></tr></table></form>
    </div>
</table>
</body>
</html>
