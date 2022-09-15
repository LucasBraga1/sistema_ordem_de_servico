<?php
	include("config.php");

	$pasta      = "uploads/";
	$tmp_name   = $_FILES["arquivo"]["tmp_name"];
	$nome       = $_FILES["arquivo"]["name"];

	$cod        = date("dmYHis") .  "-" . $_FILES["arquivo"]["name"];
	$uploadfile = $pasta . basename($cod);

	if(move_uploaded_file($tmp_name, $uploadfile)){
		
		$sql = "INSERT INTO arquivos (url) VALUES ('".$cod."')";
		$res = $conn->query($sql) or die($conn->error);
		if($res==true){
			print "<script>alert('Enviado com sucesso!');</script>";
			print "<script>location.href='dashboard.php';</script>";
		}else{
			print "Não foi possível enviar ao banco de dados";
		}
	}else{
		print "Não foi possível enviar arquivo para a pasta";
	}

?>