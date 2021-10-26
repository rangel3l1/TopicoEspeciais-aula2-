<?php

require 'models/UsuarioModel.php';

class UsuarioController 
{

	public function listar() 
	{
		$usuario = new UsuarioModel();
		$usuarios = $usuario->listarUsuarios();

		$data = ['usuarios' => $usuarios];

		require 'views/usuario/lista.php';
	}
	
	public function inserir($data)
	{
		$usuario = new UsuarioModel();
		
		$usuario->setUsuario($data['usuario']);
		$usuario->setSenha(md5($data['senha']));
		$usuario->setDataAcesso($data['dataAcesso']);
		
		$usuario->inserirUsuario();
		
		return $this->listar();
	}
	

}

?>