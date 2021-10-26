<?php

require "controllers/UsuarioController.php";

class UsuarioView
{
	public function __construct()
	{
		$this->index();
		
	}	
	
	public function index()
	{
		$usuarios = new UsuarioController();
		
		$usuarios->listar();
	}
	
	public function cadastro()
	{
		require 'views/usuario/cadastro.php';
	}
	
	public function salvarDados()
	{
		$usuarios = new UsuarioController();
		
		$data['usuario'] 	= $_POST["txtUsuario"];
		$data['senha'] 		= $_POST["txtSenha"];
		$data['dataAcesso']	= $_POST["txtDataAcesso"];
		
		$usuarios->inserir($data);
		
	}
	
}


?>