<?php 
	include_once("admin/model/Usuario.class.php");
	include_once("admin/includes/Conexao.class.php");
	class DaoUsuario{
		public function buscarAdministradorPorLogin($login){
			$sql = "SELECT * FROM tb_administrador WHERE login=:login";
			$sqlPreparado = Conexao::meDeAConexao()->prepare($sql);
			$sqlPreparado->bindValue(":login",$login);
			$resposta = $sqlPreparado->execute();
			$usuario = $this->transformaUsuarioDoBancoEmObjeto($sqlPreparado->fetch(PDO::FETCH_ASSOC));
			return $usuario;
			
		}
		public function salvarUsuarioNoBanco($login){
			
			return $usuario;
			
		}
		public function transformaUsuarioDoBancoEmObjeto($dadosDoBanco){
			$usuario = new Usuario();
			$usuario->setIdUsuario($dadosDoBanco['id_administrador']);
			$usuario->setNome($dadosDoBanco['nome']);
			$usuario->setLogin($dadosDoBanco['login']);
			$usuario->setSenha($dadosDoBanco['senha']);
			return $usuario;
		}
	}
 ?>