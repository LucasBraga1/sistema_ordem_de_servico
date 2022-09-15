<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Recuperar Senha</title>
</head>
<body>
<div class="container">
      <div class="login-form">
        <div class="main-div">
          <div class="panel">
            <h2>Acesso Restrito para Funcionários da Systems Lucas Ltda.</h2>
            <p>Digite suas Novas Credenciais</p>
          </div> 
          <form id="Login" action="reset.php" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Nova Senha">
            </div>
            <div class="form-group">
              <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Nova Senha">
            </div>
            <button type="submit" class="btn btn-primary" alert="Credenciais Redefinidas com Sucesso">Recuperar Senha</button>
          </form>
        </div>
      </div>
    </div>

</body>
</html>