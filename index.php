<?php
	if (isset($_POST['btn-enviar'])){
		include_once("admin/controller/LoginController.class.php");
		$controle = new LoginController();

		$msg=$controle->loginCliente($_POST);
	}else{
		$msg = "";
	}

	if (isset($_POST['btn-cadastro'])){
		include_once("admin/controller/LoginController.class.php");
		$controle = new LoginController();

		$msg=$controle->cadastro($_POST);
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" 
			href="admin/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/estilo.css" />
	</head>
	<body>
		<h1 class="h1-center"> Pizzaria LUTHEJO! </h1>
		<div class="container">
			<button class="btn btn-default pull-right btn-cadastro" data-toggle="modal" data-target="#formCadastro">Cadastre-se</button> 
			
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
		<div class="cadastro">	
		<!-- Modal -->
		<div id="formCadastro" class="modal fade" role="dialog">
			<div class="modal-dialog">

			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Cadastre-se</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-12">
							<form>
								<div class="form-group">
									<label for="nome">Nome:</label>
									<input type="text" class="form-control" id="nome" placeholder="Informe o Nome">
								</div>

								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="cpf">CPF:</label>
											<input type="text" class="form-control" id="cpf" placeholder="Informe o CPF">
										</div>
									</div>
									<div class="col-md-9">
										<div class="form-group">
											<label for="endereço">Endereço:</label>
											<input type="text" class="form-control" id="endereço" placeholder="Informe o Endereço">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="exempleInputEmail11">Email:</label>
									<input type="email" class="form-control" id="exampleInputEmail11" placeholder="Informe o Email">
								</div>

								<div class="form-group">
									<label for="exempleInputPassword1">Senha:</label>
									<input type="password" class="form-control" id="exempleInputPassword1" placeholder="Informe a Senha">
								</div>
								<button type="submit" class="btn btn-default">Enviar</button>
								<button type="reset" class="btn btn-default">Cancelar</button>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
			</div>
		</div>
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>