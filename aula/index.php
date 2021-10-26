<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title> Tópicos Especiais </title>
  </head>
  <body>
  <h1> Disciplina de Tópicos Especiais em Linguagem de Programação </h1>

  <?php
    require "views/UsuarioView.php";
	
	$acao = "";
	
	$usuario = new UsuarioView();
	
	if(isset($_GET["acao"]))
	{
		$acao = $_GET["acao"];	
	}
	
	if(isset($acao) && $acao == "cadastro")
	{
		$usuario->salvarDados();
	}
	
	$usuario->cadastro();
	
  ?>
  <script src="/assets/js/jquery.slim.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>