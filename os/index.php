<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Sistema de Ordem de Serviço</title>
  </head>
  <body id="LoginForm">
    <div class="container">
      <div class="login-form">
        <div class="main-div">
          <div class="panel">
            <h2>Acesso Restrito para Funcionários da Systems Lucas Ltda.</h2>
            <p>Por favor, entre com seu e-mail e senha</p>
          </div> 
          <form id="Login" action="login.php" method="POST">
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="inputEmail" placeholder="E-mail">
            </div>
            <div class="form-group">
              <input type="password" name="senha" class="form-control" id="inputPassword" placeholder="Senha">
            </div>
            <div class="forgot">
              <a href="reset-index.php">Recuperar senha?</a>
            </div>
            <button type="submit" class="btn btn-primary">Acesso</button>
          </form>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>