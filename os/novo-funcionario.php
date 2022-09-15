<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<div class="card">
			<div class="card-header">
				<h2>Novo Funcionário</h2>
			</div>
			<div class="card-body">
				<form action="?p=salvar" method="POST">
					<input type="hidden" name="acao" value="novo-funcionario">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome_usuario" class="form-control">
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email_usuario" class="form-control">
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" name="senha_usuario" class="form-control">
					</div>
					<div class="form-group">
						<label>Nível de Acesso</label>
						<select name="tipo_usuario" class="form-control">
							<option>- Escolha -</option>
							<option value="1">Administrador</option>
							<option value="2">Usuário Comum</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>