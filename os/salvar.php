<?php
	switch ($_REQUEST["acao"]) {
		case 'novo-ticket':
			$sql = "INSERT INTO mensagem (
						usuario_id_usuario,
						assunto_mensagem, 
						texto_mensagem, 
						data_mensagem, 
						hora_mensagem,
						status_mensagem
					) VALUES (
						".$_SESSION["id"].",
						'".$_POST["assunto"]."',
						'".$_POST["mensagem"]."',
						'".date("Y-m-d")."',
						'".date("H:i:s")."',
						'1'
					)";
			$res = $conn->query($sql) or die($conn->error);
			

			if($res==true){
				print "<div class='alert alert-success'>Foi aberto uma nova OS. Aguarde nosso contato!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível enviar sua OS, entre em contato pelo E-mail do administrador do site.</div>";
			}
			print "<a href='?p=os&status=1' class='btn btn-primary'>Consultar OS</a>";
		break;

		case 'nova-resposta':
			$sql = "INSERT INTO respostas (
						mensagem_id_mensagem,
						usuario_id_usuario,
						texto_respostas, 
						data_respostas, 
						hora_respostas,
						status_respostas
					) VALUES (
						".$_POST["id_mensagem"].",
						".$_SESSION["id"].",
						'".$_POST["texto_respostas"]."',
						'".date("Y-m-d")."',
						'".date("H:i:s")."',
						'".$_POST["status_respostas"]."'
					)";
			$res = $conn->query($sql) or die($conn->error);

			$sql_up = "UPDATE mensagem SET status_mensagem='2' 
					   WHERE id_mensagem=".$_POST["id_mensagem"];

			$res_up = $conn->query($sql_up) or die($conn->error);

			if(($res==true) and ($res_up==true)){
				print "<div class='alert alert-success'>Foi realizada nova interação. Aguarde o retorno!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível enviar sua OS, entre em contato pelo E-mail do administrador do site.</div>";
			}
			print "<a href='?p=os&status=2' class='btn btn-primary'>Consultar OS</a>";
		break;

		case "novo-funcionario":
			
			if($_POST["tipo_usuario"]==1){
				$foto = "atendente.jpg";
			}else{
				$foto = "usuario.png";
			}
			$sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, tipo_usuario, foto_usuario) VALUES ('".$_POST["nome_usuario"]."', '".$_POST["email_usuario"]."', '".md5($_POST["senha_usuario"])."', '".$_POST["tipo_usuario"]."', '".$foto."')";
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Usuário cadastrado com sucesso!');</script>";
				print "<script>location.href='?p=listar-funcionarios';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?p=listar-funcionarios';</script>";
			}

		break;

		case "status-usuario":
			if($_GET["status"]==1){
				$sql = "UPDATE usuario SET status_usuario='0' WHERE id_usuario=".$_GET["id_usuario"];
			}else{
				$sql = "UPDATE usuario SET status_usuario='1' WHERE id_usuario=".$_GET["id_usuario"];
			}
			$res = $conn->query($sql) or die($conn->error);
			if($res==true){
				print "<script>alert('Alterado com sucesso!');</script>";
				print "<script>location.href='?p=listar-funcionarios';</script>";
			}else{
				print "<script>alert('Não foi possível alterar');</script>";
				print "<script>location.href='?p=listar-funcionarios';</script>";
			}
		break;		
	}
?>