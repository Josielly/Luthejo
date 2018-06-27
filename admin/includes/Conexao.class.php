<?php

class Conexao{
	private static $conexao;

	private function __construct(){
		$usuarioBanco 		= "root";
		$senhaBanco 		= "";
		$nomeBanco 			= "bd_pizzaria";
		$enderecoLinkHost = "localhost";
		
		try{
			self::$conexao = new PDO("mysql:host=$enderecoLinkHost;dbname=$nomeBanco", $usuarioBanco, $senhaBanco);
		}catch(PDOException $erro){
			echo "Não Conectou ". $erro->getMessage();
		}
	}

	public static function meDeAConexao(){
		if(!self::$conexao){
			new Conexao();
		}
		return self::$conexao;

	}
}
?>