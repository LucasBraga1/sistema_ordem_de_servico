<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<div class="card">
			<div class="card-header">
				<h2>Enviar Arquivos</h2>
                <h3>(jpg - jpeg - png)</h3>	
			</div> 
			<div class="card-body">
                <form action="enviar-upload.php" enctype="multipart/form-data" method="POST">
					<div class="form-group">
						<input type="file" name="arquivo" accept="jpg|jpeg|png|bmp|gif|tiff">
					</div>
					<div class="form-group">
						<button class="btn btn-success" type="submit">Enviar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>