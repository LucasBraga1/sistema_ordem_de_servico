<?php

	$sql = "SELECT * FROM arquivos";
	$res = $conn->query($sql) or die($conn->error);

	while($row = $res->fetch_object() ){
	    print "<div style='text-align:center; width:100%'><img class='imagem' src='uploads/".$row->url."'><br></div>";
	}
?>