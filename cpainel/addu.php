<?php
	session_start();
	if (isset($_SESSION["permissao"])){
		if ($_SESSION["permissao"]==3){
			$opcoes="<option value='3'>Usuário</option>";
		} else	if ($_SESSION["permissao"]==2){
			$opcoes="<option value='3'>Usuário</option>
					<option value='2'>Moderador</option>";
		} else	if ($_SESSION["permissao"]==1){
			$opcoes="<option value='3'>Usuário</option>
			<option value='2'>Moderador</option>
			<option value='1'>Administrador</option>";
		}
	}
?>	
            
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Adicionar usuário</title>
<link href="painel.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form action='add.php' method='post'>
<input name="tipo" type="hidden" value="usuario" />
  <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
        <td align="right" valign="middle">Tipo de permissao:&nbsp;</td>
        <td align="left" valign="middle">
          <select name='permissao'>
            <?php	echo $opcoes; ?>
          </select>
        </td>
      </tr>
      <tr>
        <td width="50%" align="right" valign="middle">Nome:&nbsp; </td>
        <td align="left" valign="middle"><input name='nome' type='text' id="nome" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Login:&nbsp;</td>
        <td align="left" valign="middle"><input name='login' type='text' id="login" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle">E-mail:&nbsp; </td>
        <td align="left" valign="middle"><input name='email' type='text' id="e-mail" /></td>
      </tr>
      <tr>
        <td align="right" valign="middle">Senha:&nbsp; </td>
        <td align="left" valign="middle"><input name='senha' type='password' id="senha" /></td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="middle"><input type="submit" name="button" value="Enviar" /></td>
      </tr>
    </table>
  </form>
</body>
</html>