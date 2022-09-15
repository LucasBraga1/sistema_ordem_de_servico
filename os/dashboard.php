<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <title>Sistema de Ordem de Serviço</title>
  </head>
  <body>  	
  	<nav class="navbar navbar-expand-lg navbar-dark">
  	  
  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  	    <span class="navbar-toggler-icon"></span>
  	  </button>

  	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	    <ul class="navbar-nav mr-auto">
  	      <li class="nav-item active">
  	        <a class="nav-link" href="dashboard.php">Home</a>
  	      </li>
  	      <li class="nav-item active">
  	        <a class="nav-link" href="?p=novo">Nova OS</a>
  	      </li>
          <?php if($_SESSION["tipo"]=='1'): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Funcionários
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?p=novo-funcionario">Novo Funcionário</a>
              <a class="dropdown-item" href="?p=listar-funcionarios">Listar Funcionários</a>
            </div>
          </li>
        <?php endif; ?>
  	      <li class="nav-item dropdown">
  	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  	          Ordens de Serviço
  	        </a>
  	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  	          <a class="dropdown-item" href="?p=os&status=1">Abertas</a>
  	          <a class="dropdown-item" href="?p=os&status=2">Aguardando</a>
  	          <a class="dropdown-item" href="?p=os&status=3">Fechadas</a>
  	        </div>
  	      </li>
			<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Enviar Arquivos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?p=index-upload">Enviar Arquivos</a>
              <a class="dropdown-item" href="?p=listar-upload">Listar Arquivos</a>
            </div>
          </li>
  	    </ul>
  	    <?php echo "<span class=\"text-secondary space\">Olá ".$_SESSION["nome"]."</span>"; ?>
  	    <form class="form-inline my-2 my-lg-0" action="logout.php"> 
  	      <button class="btn btn-danger my-2 my-sm-0" type="submit"><i class="fas fa-sign-out-alt"></i></button>
  	    </form>
  	  </div>
  	</nav>

  	<div class="container my-5">
  		<?php
		  
  			include("config.php");

  			switch (@$_REQUEST["p"]) {
  				case 'novo':
  					include("novo.php");
				break;
				case 'index-upload':
					include("index-upload.php");
				break;
				case 'listar-upload':
					include("listar-upload.php");
				break;
          case 'os':
            include("os.php");
            break;
          case 'mensagem':
            include("mensagem.php");
            break;
  				case 'salvar':
  					include("salvar.php");
  					break;
          case 'novo-funcionario':
            include("novo-funcionario.php");
            break;
          case 'listar-funcionarios':
            include("listar-funcionarios.php");
            break;
  				default:
  					include("main.php");
  			}
  		?>
  	</div>

  	<script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>