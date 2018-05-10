<?php
	if (isset($_POST['enviar'])){
		include_once("controller/LoginController.class.php");
		$controle = new LoginController();

		$controle->logar($_POST);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="login">
		<input type="password" name="senha">
		<input type="submit" name="enviar">
	</form>
</body>
</html>