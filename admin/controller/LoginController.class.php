<?php
	include_once("admin/model/Usuario.class.php");
	include_once("admin/dao/DaoUsuario.class.php");
	class LoginController{
		public function loginAdministrador($post){
			
			$dao = new DaoUsuario();
			$usuario = $dao->buscarAdministradorPorLogin($post['login']);
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

		public function loginCliente($post){
			
			$dao = new DaoUsuario();
			$usuario = $dao->buscarAdministradorPorLogin($post['login']);
            if (is_null ($usuario->getIdUsuario())) {
            	return "Usuário não Encontrado!";

            } else{
            	if ($usuario->getSenha()== $post['senha']){
            		header("location:pedido.php");

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