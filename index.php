<?php 

	require_once("config.php");

	/*$sql = new Sql();

	$usuarios = $sql -> select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);
	*/
	//carrega um usuario
	//$root = new Usuario();
	//$root -> loadById(9);
	//echo $root;
	

	//CARREGA UMA LISTA DE USUARIO

	//$lista = Usuario::getList();

	//echo json_encode($lista);

	//CARREGA UMA LISTA DE USUARIO BUSCANDO PELO LOGIN

   //	$search = Usuario::search("r");

   //echo json_encode($search);

	//carrega um usuario usando o login e senha


	$usuario = new Usuario();

	$usuario -> login("gabriel", "1111");

	echo $usuario;


 ?>