<?php
	require_once("conectar.php");
	if ($_POST["tipo"]=="usuario"){
				$permissao=$_POST["permissao"];
				$nome=$_POST["nome"];
				$login=$_POST["login"];
				$email=$_POST["email"];
				$senha=$_POST["senha"];
				$data=date("Y-m-d");
				$inserir = "INSERT INTO `cplogin` (`permissao`, `data`, `nome`, `login`, `email`, `senha`) VALUES ('".$permissao."', '".$data."', '".$nome."', '".$login."', '".$email."', '".$senha."')";
				$resultado= mysql_query($inserir) or die ("
								<script type='text/javascript'>
									window.alert('Falha ao enviar os dados!');
									history.back();
								</script>");
					if ($resultado){
							echo("
								<script type='text/javascript'>
									window.alert('Usuário adicionado com sucesso!');
									history.back(3);
								</script>
								");
					}

	}
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	if ($_POST["tipo"]=="prefeito"){
				$nome=$_POST["nome"];
				$inicio=$_POST["inicio"];
				$fim=$_POST["fim"];
				$txt=$_POST["txt"];
				$data1=$inicio[6].$inicio[7].$inicio[8].$inicio[9]."-".$inicio[3].$inicio[4]."-".$inicio[0].$inicio[1];
				$data2=$fim[6].$fim[7].$fim[8].$fim[9]."-".$fim[3].$fim[4]."-".$fim[0].$fim[1];
				$inserir = "UPDATE prefeito SET nome= '".$nome."', inicio= '".$data1."', termino ='".$data2."', mensagem='".$txt."' WHERE atual= 's';";
				$resultado= mysql_query($inserir) or die ("
								<script type='text/javascript'>
									window.alert('Falha ao enviar os dados!');
									history.back();
								</script>");
					if ($resultado){
							echo("
								<script type='text/javascript'>
									window.alert('Dados atualizados com sucesso!');
									history.back();
								</script>
								");
					}

	}
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	
	if ($_POST["tipo"]=="editnoticia"){
				$dt=$_POST["data"];
				$data=$dt[6].$dt[7].$dt[8].$dt[9]."-".$dt[3].$dt[4]."-".$dt[0].$dt[1];
				$inserir = "UPDATE `cpnoticias` SET data='".$data."', titulo='".$_POST["titulo"]."', resumo='".$_POST["resumo"]."', Autor = '".$_POST["autor"]."', noticia = '".$_POST["noticia"]."' WHERE cd=".$_POST["cd"].";";
				$resultado= mysql_query($inserir) or die ("
								<script type='text/javascript'>
									window.alert('Falha ao enviar os dados!');
									history.back(2);
								</script>");
					if ($resultado){
							echo("
								<script type='text/javascript'>
									window.alert('Dados atualizados com sucesso!');
									history.back();
								</script>
								");
					}

	} 
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	
	if ($_POST["tipo"]=="noticia"){
				$dt=$_POST["data"];
				$titulo=$_POST["titulo"];
				$resumo=$_POST["resumo"];
				$autor=$_POST["autor"];
				$noticia=$_POST["noticia"];
				$galeria=$_POST["galeria"];
				$data=$dt[6].$dt[7].$dt[8].$dt[9]."-".$dt[3].$dt[4]."-".$dt[0].$dt[1];
				$inserir = "INSERT INTO `cpnoticias` (`data`, `titulo`, `resumo`, `Autor`, `noticia`, `galeria`) VALUES ('".$data."', '".$titulo."', '".$resumo."', '".$autor."', '".$noticia."', '".$galeria."');";
				$resultado= mysql_query($inserir) or die ("
								<script type='text/javascript'>
									window.alert('Falha ao enviar os dados!');
									history.back();
								</script>");
					if ($resultado){
							echo("
								<script type='text/javascript'>
									window.alert('Dados atualizados com sucesso!');
									history.back();
								</script>
								");
					}

	}
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	
?>