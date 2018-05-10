<?php
	include_once("model/Usuario.class.php");
	include_once("dao/DaoUsuario.class.php");
	class LoginController{
		public function logar($post){
			
			$dao = new DaoUsuario();
			$usuario = $dao->buscarUsuarioPorLogin($post['login']);
            if (is_null ($usuario->getIdUsuario())) {
            	return "Usuário não Encontrado!";

            } else{
            	if ($usuario->getSenha()== $post['senha']){
            		header("location:inicio.php");

            	} else{
            		return "Senha Incorreta!";
            	}
            }
		}

		public function cadastro($post){
			$dao = new DaoUsuario();
			$usuario = $dao->salvarUsuarioNoBanco($post);
		}
	}
?>