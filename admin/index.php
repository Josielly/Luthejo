<?php
	if (isset($_POST['btn-enviar'])){
		include_once("controller/LoginController.class.php");
		$controle = new LoginController();

		$msg=$controle->loginAdministrador($_POST);
	}else{
		$msg = "";
	}

	if (isset($_POST['btn-cadastro'])){
		include_once("controller/LoginController.class.php");
		$controle = new LoginController();

		$msg=$controle->cadastro($_POST);
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" 
			href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/estilo.css" />
	</head>
	<body>
		<h1 class="h1-center"> Administração da  Pizzaria LUTHEJO! </h1>
		<div class="container">
						
			<div class="formulario-login">	
				<form method="POST">
					<?php
						echo $msg;
					?>
					<div class="form-group">
						<label for="login">Login</label>
						<input type="text" name="login" id="login" placeholder="Digite o seu login" class="form-control"/>
					</div>
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" placeholder="Digite a sua senha" class="form-control"/>
					</div>
					<input type="submit" name="btn-enviar" id="btn-enviar" value="Logar" class="btn btn-block">
				  
				</form>
			</div>
		</div>	
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>