<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
#Fun��es de Banco de Dados
	//Conect&&select
	function conectar($servidor,$usuario,$senha,$banco){$conexao=mysql_connect($servidor,$usuario,$senha) or die(myErro("Falha na Conex�o com o Banco de Dados")); mysql_select_db($banco,$conexao) or die(myErro("Falha ao selecionar a DB - ".$banco));}
	// insere
	function inserir($tabela,$onde,$valores,$retorno){if ($onde!=""){$onde="(".$onde.")";};$resultado=mysql_query("INSERT INTO ".$tabela." ".$onde." VALUES (".$valores.")") or die (myErro("Falha na inser��o dos dados!"));if($resultado){sucesso($retorno);}};
	// Deleta
	function deletar($tabela,$onde,$retorno){$resultado= mysql_query("DELETE FROM ".$tabela." WHERE ".$onde) or die (myErro("Falha ao deletar os dados!"));};
	//seleciona
	function select($oq, $tabela, $onde, $ordenar){
		if($oq==""){$oq="*";}; 
		if($onde!=""){$onde=" WHERE ".$onde;}; 
		if($ordenar!=""){$ordenar=" ORDER BY ".$ordenar;}; 
		$sql=MYSQL_QUERY("SELECT ".$oq." FROM ".$tabela.$onde.$ordenar); 
		if (mysql_num_rows($sql)!=0){
			return mysql_fetch_row($sql);
		} else {return false;}
	};
	//Atualisa
	function update($tabela,$valores,$onde){$valores=implode(', ', $valores);$onde=implode(', ', $onde);$inserir = "UPDATE ".$tabela." SET ".$valores." WHERE ".$onde;$resultado= mysql_query($inserir) or die (myErro("Falha ao atualizar os dados!"));};
	#Conectar#
	#em ordem (servidor, usuario, senha e banco de dados)
		#conectar('localhost', 'ednantur', 'ed123', 'ednantur'); 
		#conectar('dbmy0038.whservidor.com', 'corregonov1', 'corregonovo', 'corregonov1');
		#conectar('localhost', 'dados_criarte', 'dados', '');
		conectar('localhost', 'root', '', 'psp');
	#Imagem no Banco de Dados#
	function dbimg($id, $caminho, $capa){
		$valotres="'', ".$id.", ".$caminho.", ".$capa;
		inserir("imagens","",$valores,"");
	};
?>
		
        