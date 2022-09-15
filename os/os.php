<div class="row">
	<div class="offset-lg-8 col-lg-4">
		<form action="?p=os&status=<?php print $_GET["status"]; ?>" method="POST" class="form-inline">
			<input type="text" name="pesquisar" placeholder="Pesquisar..." class="form-control">&nbsp;
			<button class="btn btn-success"><i class='fas fa-search'></i></button>
		</form>
	</div>
</div>
<?php
	switch ($_REQUEST["status"]) {
		case '1':
			print "<h1>Aberto</h1>";
			break;
		case '2':
			print "<h1>Andamento</h1>";
			break;
		case '3':
			print "<h1>Fechado</h1>";
			break;
	}

	if(empty($_REQUEST["pesquisar"])){
		$sql = "SELECT * FROM mensagem WHERE status_mensagem = '".$_REQUEST["status"]."'";
	}else{
		$sql = "SELECT * FROM mensagem WHERE status_mensagem = '".$_REQUEST["status"]."' AND assunto_mensagem LIKE '%".$_REQUEST["pesquisar"]."%'";
	}
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<div class='table-responsive'>";
		print "<table class='table table-bordered table-striped table-hover' style='background-color: rgba(255,255,255,0.5);'>";
		print "<tr>";
		print "<th width='100'>#</th>";
		print "<th>OS</th>";
		print "<th width='100'>Data</th>";
		print "<th width='100'>Hora</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".str_pad($row->id_mensagem , 5 , '0' , STR_PAD_LEFT)."</td>";
			print "<td><a href='?p=mensagem&id_mensagem=".$row->id_mensagem."'>".$row->assunto_mensagem."</a></td>";
			print "<td>".ExibeData($row->data_mensagem)."</td>";
			print "<td>".$row->hora_mensagem."</td>";
			print "</tr>";
		}
		print "</table>";
		print "</div>";
	}else{
		print "<div class='alert alert-danger'>Não foi encontrado resultado.</div>";
	}


?>
